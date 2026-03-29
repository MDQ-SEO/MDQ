<?php
include 'connect.php';

if (isset($_POST['upload'])) {
    $requirement = $_POST['requirement'];
    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());
    $query = mysqli_query($conn, "INSERT INTO hire_requirement (requirement, created_at) VALUES ('$requirement', '$createdAt')");

    if ($query > 0) {
        echo "<script>alert('Added successfully');
        window.location.href='./admin-add-requirement.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! please try again later');
        window.location.href='./admin-add-requirement.php'</script>" . mysqli_error($conn);
    }
}

?>
