<?php
include "connect.php";

if (isset($_POST['upload'])) {
    $name = htmlspecialchars(trim($_POST['name']));
    $image = $_FILES['image']['name'];
    $image_tmp = $_FILES["image"]["tmp_name"];
    $extension = pathinfo($image, PATHINFO_EXTENSION);

    $upload_cover = "";
    $extension_cover = "";

    $img_dir = './resume/';
    $cover_dir = './cover_letter/';

    $phone = htmlspecialchars(trim($_POST['phone']));
    $email = htmlspecialchars(trim($_POST['email']));
    $qualification = htmlspecialchars(trim($_POST['qualification']));
    $year = htmlspecialchars(trim($_POST['year']));
    $experience = htmlspecialchars(trim($_POST['experience']));
    $cur_salary = htmlspecialchars(trim($_POST['cur_salary']));
    $exp_salary = htmlspecialchars(trim($_POST['exp_salary']));
    $message = htmlspecialchars(trim($_POST['message']));

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s");

    $allowed_extensions = ['jpg', 'jpeg', 'webp', 'png', 'pdf'];

    if (in_array(strtolower($extension), $allowed_extensions) && move_uploaded_file($image_tmp, $img_dir . $image)) {

        // Check if cover letter is uploaded
        if (!empty($_FILES['upload_cover']['name'])) {
            $upload_cover = $_FILES['upload_cover']['name'];
            $cover_tmp = $_FILES["upload_cover"]["tmp_name"];
            $extension_cover = pathinfo($upload_cover, PATHINFO_EXTENSION);

            if (in_array(strtolower($extension_cover), $allowed_extensions)) {
                move_uploaded_file($cover_tmp, $cover_dir . $upload_cover);

                // INSERT with cover letter
                $stmt = $conn->prepare("INSERT INTO career (name, image, upload_cover, phone, email, qualification, year, experience, cur_salary, exp_salary, message, created_at) 
                                        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

                $stmt->bind_param(
                    "ssssssssddss",
                    $name,
                    $image,
                    $upload_cover,
                    $phone,
                    $email,
                    $qualification,
                    $year,
                    $experience,
                    $cur_salary,
                    $exp_salary,
                    $message,
                    $createdAt
                );
            } else {
                echo "<script>alert('Invalid cover letter format. Allowed: jpg, jpeg, png, webp, pdf'); window.location.href='career.php';</script>";
                exit;
            }

        } else {
            // INSERT without cover letter
            $stmt = $conn->prepare("INSERT INTO career (name, image, phone, email, qualification, year, experience, cur_salary, exp_salary, message, created_at) 
                                    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

            $stmt->bind_param(
                "sssssssssss",
                $name,
                $image,
                $phone,
                $email,
                $qualification,
                $year,
                $experience,
                $cur_salary,
                $exp_salary,
                $message,
                $createdAt
            );
        }

        // Execute prepared statement
        if ($stmt->execute()) {
            echo "<script>alert('Details Added Successfully'); window.location.href='career.php';</script>";
        } else {
            echo "<script>alert('Failed to upload'); window.location.href='career.php';</script>";
        }

        $stmt->close();

    } else {
        echo "<script>alert('Invalid resume format or failed to upload resume. Allowed: jpg, jpeg, png, webp, pdf'); window.location.href='career.php';</script>";
    }
}
?>