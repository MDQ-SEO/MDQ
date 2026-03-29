<?php
include 'connect.php';

if(isset($_POST['upload'])){
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $phone = htmlspecialchars(trim($_POST['phone']));
    $message = htmlspecialchars(trim($_POST['message']));
        date_default_timezone_set('Asia/Kolkata');
        $createdAt = date("Y-m-d H:i:s", time());
        $stmt = $conn->prepare("INSERT INTO contact (name, email, phone, message, created_at) VALUES (?, ?, ?, ?, ?)");
        
    if ($stmt)
    {
        $stmt->bind_param("sssss", $name, $email, $phone, $message, $createdAt);
         if($stmt->execute())
         {
            echo "<script>alert('Thankyou for Reaching us');
            window.location.href='../offer.php'</script>";
    
        }
        else
        {
            echo "<script>alert('Something went wrong! please try again later');
            window.location.href='../index.php#contactus'</script>". mysqli_error($conn);
        }

        $stmt->close();
    }
    else
    {
        echo "<script>alert('Database error. Please try again later.');
        window.location.href='../index.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    
    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5WSMF2QJ');</script>
<!-- End Google Tag Manager -->
    </head>
    
    <body>
        
        <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5WSMF2QJ"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    </body>



</html>

