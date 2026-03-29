<?php
include "connect.php";

if(isset($_POST['upload'])){
    $title = $_POST['title'];
    $content = $_POST['content'];
    $color = $_POST['color'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png", "pdf");

    $image = $_FILES['image']['name'];
    $fileuploadtempname = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $path = '../images/portfolio/';

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    if (move_uploaded_file($fileuploadtempname, $path.$image)) {
        if(in_array($extension, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO portfolio (title, content, color, image,  created_at) VALUES ('$title', '$content', '$color', '$image', '$createdAt')");

            // Execute the statement
            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Details Added Successfully');
                window.location.href='admin-create-portfolio.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='admin-create-portfolio.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png, webp, and pdf files are allowed');
            window.location.href='index.php#enquiry'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='index.php#enquiry'</script>";
    }
}
?>
