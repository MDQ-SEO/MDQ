<?php
include "connect.php";

if (isset($_POST['edit-post'])) {
    $post_id = intval($_POST['id']); // Cast to int for safety
    $title = htmlspecialchars(trim($_POST['froalaTitle']));
    $content = htmlspecialchars(trim($_POST['froalaContent']));
    $path = '../images/blog/';

    $image = null;
    $createdAt = null;

    // Check for uploaded file
    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $allowedExtensions = ["jpg", "jpeg", "webp", "png"];
        $originalName = $_FILES['image']['name'];
        $tempName = $_FILES['image']['tmp_name'];
        $extension = strtolower(pathinfo($originalName, PATHINFO_EXTENSION));

        if (in_array($extension, $allowedExtensions)) {
            $image = uniqid('blog_', true) . "." . $extension;
            $destination = $path . $image;

            if (!move_uploaded_file($tempName, $destination)) {
                echo "<script>alert('Failed to move uploaded file'); window.location.href='table-blog.php';</script>";
                exit();
            }

            date_default_timezone_set('Asia/Kolkata');
            $createdAt = date("Y-m-d H:i:s");
        } else {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG, and WEBP files are allowed'); window.location.href='table-blog.php';</script>";
            exit();
        }
    }

    // Build SQL dynamically based on whether image is uploaded
    if ($image) {
        $stmt = $conn->prepare("UPDATE blog SET title = ?, content = ?, image = ?, created_at = ? WHERE id = ?");
        $stmt->bind_param("ssssi", $title, $content, $image, $createdAt, $post_id);
    } else {
        $stmt = $conn->prepare("UPDATE blog SET title = ?, content = ? WHERE id = ?");
        $stmt->bind_param("ssi", $title, $content, $post_id);
    }

    if ($stmt->execute()) {
        echo "<script>alert('Blog updated successfully'); window.location.href='table-blog.php';</script>";
    } else {
        echo "<script>alert('Failed to update blog'); window.location.href='table-blog.php';</script>";
    }

    $stmt->close();
}
?>