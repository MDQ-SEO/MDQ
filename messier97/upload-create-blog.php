<?php
include "connect.php";

if(isset($_POST['upload'])){
    $title = $_POST['froalaTitle'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png");
    $image = $_FILES['image']['name'];
    $fileuploadtempname = $_FILES['image']['tmp_name'];
    $extension = pathinfo($image, PATHINFO_EXTENSION);
    $path = '../images/blog/';

    $content = $_POST['froalaContent'];

    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    if (move_uploaded_file($fileuploadtempname, $path.$image)) {
        if(in_array($extension, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO blog (title, image, content, created_at) VALUES ('$title', '$image', '$content', '$createdAt')");

            // Execute the statement
            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Blog Created Successfully');
                window.location.href='admin-create-blog.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='admin-create-blog.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
            window.location.href='index.php#enquiry'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='index.php#enquiry'</script>";
    }
}
?>
