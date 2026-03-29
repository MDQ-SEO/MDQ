<!-- Event snippet for Mobile App Appointment conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
    var callback = function() {
        if (typeof(url) != 'undefined') {
            window.location = url;
        }
    };
    gtag('event', 'conversion', {
        'send_to': 'AW-11453263060/OueSCKa9nqEZENTZq9Uq',
        'value': 1.0,
        'currency': 'INR',
        'event_callback': callback
    });
    return false;
}
</script>

<?php
include '../connect.php';

if(isset($_POST['upload'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
        date_default_timezone_set('Asia/Kolkata');
        $createdAt = date("Y-m-d H:i:s", time());
    //     $query = mysqli_query($conn,"INSERT INTO contact (name, email, phone, message, created_at) VALUES ('$name', '$email', '$phone', '$message', '$createdAt')");

    //  if($query>0){
    //     echo "<script>alert('Thankyou for Reaching us');
    //     window.location.href='../index.php'</script>";

    // } else {
    //     echo "<script>alert('Something went wrong! please try again later');
    //     window.location.href='../index.php'</script>". mysqli_error($conn);
    // }
    $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message, created_at) VALUES (?, ?, ?, ?, ?)");

if ($stmt) {
    $stmt->bind_param("sssss", $name, $email, $phone, $message, $createdAt);

    if ($stmt->execute()) {
        echo "<script>alert('Thank you for reaching us');
        window.location.href='../index.php'</script>";
    } else {
        echo "<script>alert('Something went wrong! Please try again later');
        window.location.href='../index.php'</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('Database error. Please try again later.');
    window.location.href='../index.php'</script>";
}
}