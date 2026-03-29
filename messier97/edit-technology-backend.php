<?php
include "connect.php";

$allowedExtensions = array("jpg", "jpeg", "webp", "png");
$uploadPath = '../images/portfolio/';

function uploadImage($fileInputName, $uploadPath, $allowedExtensions, &$errorMessage) {
    if (isset($_FILES[$fileInputName]) && $_FILES[$fileInputName]['error'] === UPLOAD_ERR_OK) {
        $filename = $_FILES[$fileInputName]['name'];
        $tmpName = $_FILES[$fileInputName]['tmp_name'];
        $extension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($extension, $allowedExtensions)) {
            $errorMessage = "Only JPG, JPEG, PNG, and WEBP files are allowed.";
            return false;
        }

        $uniqueName = uniqid($fileInputName . '_', true) . '.' . $extension;
        $destination = $uploadPath . $uniqueName;

        if (move_uploaded_file($tmpName, $destination)) {
            return $uniqueName;
        } else {
            $errorMessage = "Failed to move uploaded file.";
            return false;
        }
    }
    return null; // No image uploaded
}

if (isset($_POST['edit-post'])) {
    $post_id = intval($_POST['id']);
    $technology = htmlspecialchars(trim($_POST['technology']));

    $error = "";
    $technology_image = uploadImage('technology_images', $uploadPath, $allowedExtensions, $error);
    if ($technology_image === false) {
        echo "<script>alert('$error'); window.location.href='table-technology.php';</script>";
        exit();
    }

    // Use prepared statements
    if ($technology_image !== null) {
        $stmt = $conn->prepare("UPDATE technology_name SET technology = ?, technology_images = ? WHERE id = ?");
        $stmt->bind_param("ssi", $technology, $technology_image, $post_id);
    } else {
        $stmt = $conn->prepare("UPDATE technology_name SET technology = ? WHERE id = ?");
        $stmt->bind_param("si", $technology, $post_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Technology Updated Successfully'); window.location.href='table-technology.php';</script>";
    } else {
        echo "<script>alert('Failed to update technology'); window.location.href='table-technology.php';</script>";
    }

    $stmt->close();
}
?>