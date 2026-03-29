<?php
include "connect.php";

if(isset($_POST['upload'])){
    $title1 = $_POST['title1'];
    $title2 = $_POST['title2'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png");

    $image = $_FILES['image']['name'];
    $fileuploadtempname = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $path = '../images/carousel/';

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    if (move_uploaded_file($fileuploadtempname, $path.$image)) {
        if(in_array($extension, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO carousel (title1, title2, image,  created_at) VALUES ('$title1', '$title2', '$image', '$createdAt')");

            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Details Added Successfully');
                window.location.href='home.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='home.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
            window.location.href='home.php'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='home.php'</script>";
    }
}
?>
