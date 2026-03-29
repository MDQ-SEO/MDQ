<?php
include "connect.php";

if(isset($_POST['upload'])){
    $technology = $_POST['technology'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png");

    $technology_images = $_FILES['technology_images']['name'];
    $fileuploadtempname = $_FILES['technology_images']['tmp_name'];
    $extension = pathinfo($technology_images, PATHINFO_EXTENSION);
    $path = '../images/portfolio/';

    if (move_uploaded_file($fileuploadtempname, $path.$technology_images)) {
        if(in_array($extension, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO technology_name (technology, technology_images) VALUES ('$technology', '$technology_images')");

            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Details Added Successfully');
                window.location.href='admin-technology.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='admin-technology.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
            window.location.href='admin-technology.php'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='admin-technology.php'</script>";
    }
}
?>
