<?php
include "connect.php";

if(isset($_POST['upload'])){
    $name = $_POST['name'];
    $clientfrom = $_POST['clientfrom'];
    $feedback = $_POST['feedback'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png");

    $image = $_FILES['image']['name'];
    $fileuploadtempname = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $path = '../images/testimonials/';

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    if (move_uploaded_file($fileuploadtempname, $path.$image)) {
        if(in_array($extension, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO testimonials (name, clientfrom, feedback, image, created_at) VALUES ('$name', '$clientfrom', '$feedback', '$image', '$createdAt')");

            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Testimonial Added Successfully');
                window.location.href='admin-testimonials.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='admin-testimonials.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
            window.location.href='admin-testimonials.php'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='admin-testimonials.php'</script>";
    }
}
?>
