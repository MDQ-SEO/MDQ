<?php
include "connect.php";

if (isset($_POST['edit-post'])) {
    $post_id = intval($_POST['id']);
    $title1 = htmlspecialchars(trim($_POST['title1']));
    $title2 = htmlspecialchars(trim($_POST['title2']));
    $path = '../images/carousel/';

    $image = null;
    $createdAt = null;

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowedExtensions = ['jpg', 'jpeg', 'webp', 'png'];
        $originalName = $_FILES['image']['name'];
        $tmpName = $_FILES['image']['tmp_name'];
        $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

        if (!in_array($extension, $allowedExtensions)) {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG, and WEBP files are allowed');
                  window.location.href='table-carousel.php';</script>";
            exit();
        }

        // Unique file name to prevent collisions
        $image = uniqid('carousel_', true) . '.' . $extension;
        $destination = $path . $image;

        if (!move_uploaded_file($tmpName, $destination)) {
            echo "<script>alert('Failed to move uploaded file');
                  window.location.href='table-carousel.php';</script>";
            exit();
        }

        date_default_timezone_set('Asia/Kolkata');
        $createdAt = date("Y-m-d H:i:s");
    }

    if ($image) {
        $stmt = $conn->prepare("UPDATE carousel SET title1 = ?, title2 = ?, image = ?, created_at = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $title1, $title2, $image, $createdAt, $post_id);
    } else {
        $stmt = $conn->prepare("UPDATE carousel SET title1 = ?, title2 = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title1, $title2, $post_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Carousel updated successfully');
              window.location.href='table-carousel.php';</script>";
    } else {
        echo "<script>alert('Failed to update carousel');
              window.location.href='table-carousel.php';</script>";
    }

    $stmt->close();
}
?>