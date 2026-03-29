<?php
include 'connect.php';

if (isset($_POST['upload'])) {
    $description = $_POST['description'];
    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());
    $query = mysqli_query($conn, "INSERT INTO hire_description (description, created_at) VALUES ('$description', '$createdAt')");

    if ($query > 0) {
        echo "<script>alert('Added successfully');
        window.location.href='./admin-add-description.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! please try again later');
        window.location.href='./admin-add-description.php'</script>" . mysqli_error($conn);
    }
}

?>
