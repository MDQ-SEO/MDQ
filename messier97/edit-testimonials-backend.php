<?php
include "connect.php";

$allowedExtensions = ["jpg", "jpeg", "webp", "png"];
$uploadPath = '../images/testimonials/';

function uploadImage($fileInput, $uploadPath, $allowedExtensions, &$error) {
    if (isset($_FILES[$fileInput]) && $_FILES[$fileInput]['error'] === UPLOAD_ERR_OK) {
        $filename = $_FILES[$fileInput]['name'];
        $tmpName = $_FILES[$fileInput]['tmp_name'];
        $ext = strtolower(pathinfo($filename, PATHINFO_EXTENSION));

        if (!in_array($ext, $allowedExtensions)) {
            $error = "Only JPG, JPEG, PNG, and WEBP files are allowed.";
            return false;
        }

        $uniqueName = uniqid('testimonial_', true) . '.' . $ext;
        $destination = $uploadPath . $uniqueName;

        if (move_uploaded_file($tmpName, $destination)) {
            return $uniqueName;
        } else {
            $error = "Failed to move uploaded file.";
            return false;
        }
    }
    return null;
}

if (isset($_POST['edit-post'])) {
    $post_id = intval($_POST['id']);
    $name = htmlspecialchars(trim($_POST['name']));
    $clientfrom = htmlspecialchars(trim($_POST['clientfrom']));
    $feedback = htmlspecialchars(trim($_POST['feedback']));

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s");

    $error = "";
    $imageName = uploadImage('image', $uploadPath, $allowedExtensions, $error);

    if ($imageName === false) {
        echo "<script>alert('$error'); window.location.href='table-testimonials.php';</script>";
        exit();
    }

    // Prepared statement
    if ($imageName !== null) {
        $stmt = $conn->prepare("UPDATE testimonials SET name = ?, clientfrom = ?, feedback = ?, image = ?, created_at = ? WHERE id = ?");
        $stmt->bind_param("sssssi", $name, $clientfrom, $feedback, $imageName, $createdAt, $post_id);
    } else {
        $stmt = $conn->prepare("UPDATE testimonials SET name = ?, clientfrom = ?, feedback = ? WHERE id = ?");
        $stmt->bind_param("sssi", $name, $clientfrom, $feedback, $post_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Testimonial Updated Successfully'); window.location.href='table-testimonials.php';</script>";
    } else {
        echo "<script>alert('Failed to update testimonial'); window.location.href='table-testimonials.php';</script>";
    }

    $stmt->close();
}
?>