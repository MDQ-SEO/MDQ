<?php
include "connect.php";

if(isset($_POST['upload'])){
    $projectname = $_POST['projectname'];
    $aboutproject = $_POST['aboutproject'];
    $type_project = $_POST['type_project'];

    $allowedExtensions = array("jpg", "jpeg", "webp", "png");

    // First Image
    $image = $_FILES['image']['name'];
    $fileuploadtempname1 = $_FILES['image']['tmp_name'];
    $extension1 = pathinfo($image, PATHINFO_EXTENSION);
    $path = '../images/portfolio/';

    // Second Image
    $sec_image = $_FILES['sec_image']['name'];
    $fileuploadtempname2 = $_FILES['sec_image']['tmp_name'];
    $extension2 = pathinfo($sec_image, PATHINFO_EXTENSION);

    // date_default_timezone_set('Asia/Kolkata');
    // $createdAt = date("Y-m-d H:i:s", time());

    // Move and insert the first image
    if (move_uploaded_file($fileuploadtempname1, $path.$image) && move_uploaded_file($fileuploadtempname2, $path.$sec_image)) {
        if(in_array($extension1, $allowedExtensions) && in_array($extension2, $allowedExtensions)) {
            $sql = mysqli_query($conn, "INSERT INTO project_list (projectname, aboutproject, image, sec_image, type_project) VALUES ('$projectname', '$aboutproject', '$image', '$sec_image', '$type_project')");

            if($sql > 0){
                echo "<script type='text/javascript'>
                alert ('Project List Added Successfully');
                window.location.href='admin-project-list.php';
                </script>";
            } else {
                echo "<script type='text/javascript'>
                alert('Failed to upload');
                window.location.href='admin-project-list.php';
                </script>" . mysqli_error($conn);
            }
        } else {
            echo "<script>alert('Sorry, only jpg, jpeg, png and webp files are allowed');
            window.location.href='admin-project-list.php'</script>" . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Failed to move uploaded file');
        window.location.href='admin-project-list.php'</script>";
    }
}
?>
