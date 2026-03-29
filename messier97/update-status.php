<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $status = $_POST['status'];

    if (!empty($id) && !empty($status)) {
        // Prepare and execute the update query
        $stmt = $conn->prepare("UPDATE contact SET status = ? WHERE id = ?");
        $stmt->bind_param("si", $status, $id);

        if ($stmt->execute()) {
            header("Location: admin-contactus.php"); // Redirect back to the contact page
        } else {
            echo "Error updating record: " . $conn->error;
        }

        $stmt->close();
    } else {
        echo "Invalid input.";
    }
}

$conn->close();
?>