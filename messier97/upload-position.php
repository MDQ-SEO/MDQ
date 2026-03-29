<?php
include 'connect.php';

if (isset($_POST['upload'])) {
    $position = $_POST['position'];
    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());
    $query = mysqli_query($conn, "INSERT INTO hire_position (position, created_at) VALUES ('$position', '$createdAt')");

    if ($query > 0) {
        echo "<script>alert('Added successfully');
        window.location.href='./admin-add-position.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! please try again later');
        window.location.href='./admin-add-position.php'</script>" . mysqli_error($conn);
    }
}

?>
