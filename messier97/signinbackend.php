<?php
include 'connect.php';
session_start();

if (isset($_POST['submit'])) {
    $name = $_POST["name"];
    $password = $_POST["password"];

    // Use prepared statement (prevent SQL injection)
    $stmt = $conn->prepare("SELECT name, password FROM signin WHERE name = ?");
    $stmt->bind_param("s", $name);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($row = $result->fetch_assoc()) {

        // Verify hashed password
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['name'];
            echo "<script>alert('Login Successful'); window.location.href='home.php'</script>";
        } else {
            echo "<script>alert('Invalid password'); window.location.href='index.php'</script>";
        }

    } else {
        echo "<script>alert('User not found'); window.location.href='index.php'</script>";
    }
}
?>

