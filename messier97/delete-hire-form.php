<?php
include 'connect.php';

if (isset($_POST['postdelete'])) {
    $userid = trim($_POST['userid']);
    $stmt = $conn->prepare("DELETE FROM hiring WHERE id = ?");
    $stmt->bind_param("i", $userid); // 'i' means integer
    if ($stmt->execute()) {
        echo "<script type='text/javascript'>
    alert('Details has been Deleted');
    window.location.href='table-hire-form.php';
    </script>";
    } else {
        echo "<script type='text/javascript'>
          alert('Something went wrong !!! Please try later.');
          window.location.href='table-hire-form.php';
           </script>";
    }
    $stmt->close();
}