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
            $errorMessage = "Only JPG, JPEG, PNG, and WEBP files are allowed for " . $fileInputName;
            return false;
        }

        $uniqueName = uniqid($fileInputName . '_', true) . '.' . $extension;
        $destination = $uploadPath . $uniqueName;

        if (move_uploaded_file($tmpName, $destination)) {
            return $uniqueName;
        } else {
            $errorMessage = "Failed to move uploaded file for " . $fileInputName;
            return false;
        }
    }
    return null; // No file uploaded
}

if (isset($_POST['edit-post'])) {
    $post_id = intval($_POST['id']);
    $projectname = htmlspecialchars(trim($_POST['projectname']));
    $aboutproject = htmlspecialchars(trim($_POST['aboutproject']));
    $type_project = htmlspecialchars(trim($_POST['type_project']));
    $createdAt = date("Y-m-d H:i:s");

    $error = "";
    $image = uploadImage('image', $uploadPath, $allowedExtensions, $error);
    if ($image === false) {
        echo "<script>alert('$error'); window.location.href='table-project-list.php';</script>";
        exit();
    }

    $sec_image = uploadImage('sec_image', $uploadPath, $allowedExtensions, $error);
    if ($sec_image === false) {
        echo "<script>alert('$error'); window.location.href='table-project-list.php';</script>";
        exit();
    }

    // Build dynamic SQL based on provided inputs
    $query = "UPDATE project_list SET projectname = ?, aboutproject = ?, type_project = ?";
    $types = "sss";
    $params = [$projectname, $aboutproject, $type_project];

    if ($image !== null) {
        $query .= ", image = ?";
        $types .= "s";
        $params[] = $image;
    }

    if ($sec_image !== null) {
        $query .= ", sec_image = ?";
        $types .= "s";
        $params[] = $sec_image;
    }

    $query .= " WHERE id = ?";
    $types .= "i";
    $params[] = $post_id;

    $stmt = $conn->prepare($query);
    $stmt->bind_param($types, ...$params);

    if ($stmt->execute()) {
        echo "<script>alert('Project List Updated Successfully'); window.location.href='table-project-list.php';</script>";
    } else {
        echo "<script>alert('Failed to update project'); window.location.href='table-project-list.php';</script>";
    }

    $stmt->close();
}
?>