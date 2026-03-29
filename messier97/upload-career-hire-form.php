<?php
include "connect.php";

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $position = $_POST['position'];
    $message = $_POST['message'];
    $linkedin = $_POST['linkedin'];
    $choosen = $_POST['choosen'];

    $imgDir = './resume/';
    $resume = $_FILES["image"]["name"];
    $fileUploadTempName = $_FILES["image"]["tmp_name"];
    $extension = strtolower(pathinfo($resume, PATHINFO_EXTENSION));

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    $allowed_extensions = ["jpg", "jpeg", "webp", "png", "pdf"];
    if (in_array($extension, $allowed_extensions)) {
        if (move_uploaded_file($fileUploadTempName, $imgDir.$resume)) {
            $sql = "INSERT INTO hire_form (name, phone, email, position, message, linkedin, choosen, image, created_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

            if ($stmt = mysqli_prepare($conn, $sql)) {
                mysqli_stmt_bind_param($stmt, "sssssssss", $name, $phone, $email, $position, $message, $linkedin, $choosen, $resume, $createdAt);

                if (mysqli_stmt_execute($stmt)) {
                    echo "<script type='text/javascript'>alert('Details Added Successfully'); window.location.href='../career.php';</script>";
                } else {
                    echo "<script type='text/javascript'>alert('Failed to upload'); window.location.href='../career.php';</script>";
                }

                mysqli_stmt_close($stmt);
            } else {
                echo "<script type='text/javascript'>alert('Failed to prepare SQL statement'); window.location.href='../career.php';</script>";
            }
        } else {
            echo "<script>alert('Failed to move resume file'); window.location.href='../career.php'</script>";
        }
    } else {
        echo "<script>alert('Invalid resume file format. Only jpg, jpeg, png, webp, pdf files are allowed.');</script>";
        echo "File extension: " . $extension;
        echo "File name: " . $resume;
    }
}

mysqli_close($conn);
?>
