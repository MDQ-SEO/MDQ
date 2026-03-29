<?php
include "connect.php";

if (isset($_POST['upload'])) {
    $password = mysqli_real_escape_string($conn, $_POST['password']);


    $encryptedPassword = md5($password);

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());
    $sql = mysqli_query($conn, "INSERT INTO signin (name, password) VALUES ('$username', '$encryptedPassword')");
    $sql = mysqli_query($conn, "UPDATE signin SET `password` = '$password' WHERE id = '$post_id'");

    if ($sql) {
        echo "<script type='text/javascript'>
        alert ('Credential Added Successfully');
        window.location.href='home.php';
        </script>";
    } else {
        echo "<script type='text/javascript'>
        alert('Failed to upload');
        window.location.href='home.php';
        </script>";
    }
}
?>