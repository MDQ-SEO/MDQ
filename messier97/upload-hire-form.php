<?php
include 'connect.php';

if (isset($_POST['upload'])) {
    $technology = $_POST['technology'];
    $descriptions = $_POST['description'];
    $requirements = $_POST['requirement'];
    date_default_timezone_set('Asia/Kolkata');
    $createdAt = date("Y-m-d H:i:s", time());

    $descriptionsJson = json_encode($descriptions);
    $requirementsJson = json_encode($requirements);

    $stmt = $conn->prepare("INSERT INTO hiring (position, descriptions, requirement, created_at) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $technology, $descriptionsJson, $requirementsJson, $createdAt);

    if ($stmt->execute()) {
        echo "<script>alert('Added successfully'); window.location.href='./admin-hire-form.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! please try again later'); window.location.href='./admin-hire-form.php'</script>" . mysqli_error($conn);
    }

    $stmt->close();
    $conn->close();
}
?>
