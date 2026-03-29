<?php
include 'connect.php';
session_start();

if(isset($_POST['submit'])){
    $name = $_POST["name"];
    $password = $_POST["password"];

    $encr = hash('sha256', $password);
    $query = mysqli_query($conn, "SELECT name, password from signin Where name='$name' and password= '$encr'");

    if (mysqli_num_rows($query) > 0) {
        $_SESSION['email'] = $name;
        echo "<script>alert('Login Successful'); window.location.href='home.php'</script>";
    } else {
        echo "<script>alert('Please check your username password'); window.location.href='index.php'</script>" . mysqli_error($conn);
    }
}
?>