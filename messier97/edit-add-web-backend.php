<?php
include 'connect.php';

if (isset($_POST['edit-post'])) {
    $post_id = $_POST['id'];
    $folder = "../images/portfolio/";

    // Existing photos
    $existingPhotos = $_POST['hiddenPhotos'];

    // New photos
    $newPhotos = [];
    foreach ($_FILES["webphotos"]["error"] as $key => $error) {
        if ($error == UPLOAD_ERR_OK) {
            $tmp_name = $_FILES["webphotos"]["tmp_name"][$key];
            $name = $_FILES["webphotos"]["name"][$key];
            $newPhotos[] = $name;
            move_uploaded_file($tmp_name, $folder . $name);
        }
    }

    // Remove selected photos logic (optional delete from folder if needed)
    $removedPhotos = isset($_POST['removed_photos']) ? $_POST['removed_photos'] : [];

    $allPhotos = array_merge(explode(',', $existingPhotos), $newPhotos);
    $updatedPhotos = implode(',', $allPhotos);

    // File uploads
    $weblogo_images = $_FILES["weblogo_images"]["name"];
    $projectimagesTempname = $_FILES["weblogo_images"]["tmp_name"];
    $webbanner_images = $_FILES["webbanner_images"]["name"];
    $bannerimagesTempname = $_FILES["webbanner_images"]["tmp_name"];

    move_uploaded_file($projectimagesTempname, $folder . $weblogo_images);
    move_uploaded_file($bannerimagesTempname, $folder . $webbanner_images);

    // Other fields
    $webproject_overview = $_POST["webproject_overview"];
    $webproject_title = $_POST["webproject_title"];
    $cilent_id = $_POST['cilent_id'];
    $technologys = isset($_POST['technology']) ? $_POST['technology'] : [];
    $technology = implode(",", $technologys);

    // Prepare statement
    $stmt = $conn->prepare("UPDATE web_details 
        SET 
            cilent_id = ?, 
            technology = ?, 
            webphotos = ?, 
            webproject_overview = ?, 
            webproject_title = ?, 
            weblogo_images = ?, 
            webbanner_images = ? 
        WHERE id = ?");

    $stmt->bind_param(
        "sssssssi", 
        $cilent_id, 
        $technology, 
        $updatedPhotos, 
        $webproject_overview, 
        $webproject_title, 
        $weblogo_images, 
        $webbanner_images, 
        $post_id
    );

    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
            alert('Application has been updated successfully');
            window.location.href='table-add-web.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
            alert('Failed to update application');
            window.location.href='table-add-web.php';
        </script>";
    }
}
?>