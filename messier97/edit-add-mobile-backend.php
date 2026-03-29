<?php
include 'connect.php';

if (isset($_POST['edit-post'])) {
    $post_id = trim($_POST['id']);
    $folder = "../images/portfolio/";

    // Get existing photos
    $existingPhotos = isset($_POST['hiddenPhotos']) ? $_POST['hiddenPhotos'] : '';

    // Process new photos
    $newPhotos = [];
    foreach ($_FILES["photos"]["error"] as $key => $error) {
        if ($error === UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["photos"]["tmp_name"][$key];
            $name = $_FILES["photos"]["name"][$key];
            $newPhotos[] = $name;
            move_uploaded_file($tmp_name, $folder . $name);
        }
    }

    // Handle removed photos
    $removedPhotos = isset($_POST['removed_photos']) ? $_POST['removed_photos'] : [];
    $existingArray = array_filter(explode(',', $existingPhotos));
    $allPhotos = array_merge($existingArray, $newPhotos);
    $allPhotos = array_diff($allPhotos, $removedPhotos); // remove deleted
    $updatedPhotos = implode(',', $allPhotos);

    // Handle logo and banner
    $logo_images = $_FILES["logo_images"]["name"];
    $logoTmp = $_FILES["logo_images"]["tmp_name"];
    move_uploaded_file($logoTmp, $folder . $logo_images);

    $banner_images = $_FILES["banner_images"]["name"];
    $bannerTmp = $_FILES["banner_images"]["tmp_name"];
    move_uploaded_file($bannerTmp, $folder . $banner_images);

    // Other fields
    $project_overview = trim($_POST["project_overview"]);
    $project_title = trim($_POST["project_title"]);
    $cilent_id = trim($_POST['cilent_id']);
    $technology = isset($_POST['technology']) ? implode(",", $_POST['technology']) : '';

    // Prepare statement
    $stmt = $conn->prepare("
        UPDATE application_web SET 
            cilent_id = IF(LENGTH(?) = 0, cilent_id, ?),
            technology = IF(LENGTH(?) = 0, technology, ?),
            photos = IF(LENGTH(?) = 0, photos, ?),
            project_overview = IF(LENGTH(?) = 0, project_overview, ?),
            project_title = IF(LENGTH(?) = 0, project_title, ?),
            logo_images = IF(LENGTH(?) = 0, logo_images, ?),
            banner_images = IF(LENGTH(?) = 0, banner_images, ?)
        WHERE id = ?
    ");

    $stmt->bind_param(
        "sssssssssssssi",
        $cilent_id, $cilent_id,
        $technology, $technology,
        $updatedPhotos, $updatedPhotos,
        $project_overview, $project_overview,
        $project_title, $project_title,
        $logo_images, $logo_images,
        $banner_images, $banner_images,
        $post_id
    );

    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
            alert('Application has been updated successfully');
            window.location.href='table-add-mobile.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Failed to update application');
            window.location.href='table-add-mobile.php';
        </script>";
    }

    $stmt->close();
}
?>