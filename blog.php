<?php
include './header.php';
include './connect.php';
?>

<head>
    <meta name="description" content="Explore expert insights on Flutter app development, web development, and mobile technologies from MDQuality Apps in Chennai, helping businesses stay ahead in the digital world." />
    <meta name="keywords" content="Reliable application development services, Customized application solutions" />
    <title>Technology Insights for App & Web Development | MDQuality Apps</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/42ccddb556.js" crossorigin="anonymous"></script>

    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://www.mdqualityapps.com/blog.php" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="MDQuality Apps Solutions" />
    <meta property="og:title" content="Flutter app development, web development, and mobile technologies from MDQuality Apps in Chennai" />
    <meta property="og:description" content="Explore expert insights on Flutter app development, web development, and mobile technologies from MDQuality Apps in Chennai, helping businesses stay ahead in the digital world." />
    <meta property="og:url" content="https://mdqualityapps.com/blog.php/" />
    <meta property="article:publisher" content="MDQuality Apps Solutions" />
            <meta property="og:image" content="https://mdqualityapps.com/" />
        <meta property="og:image:secure_url" content="https://mdqualityapps.com/" />
        <meta property="og:image:width" content="1640px" />
        <meta property="og:image:height" content="856px" />
        <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Explore expert insights on Flutter app development, web development, and mobile technologies from MDQuality Apps in Chennai, helping businesses stay ahead in the digital world." />
    <meta name="twitter:title" content="Flutter app development, web development, and mobile technologies from MDQuality Apps in Chennai." />

            <meta name="twitter:image" content="https://mdqualityapps.com/" />
    <style>
        #contactus {
            background-color: #fff !important;
        }

        .limited-text {
            overflow: hidden;
            position: relative;
            max-height: 6em;
            line-height: 1.2em;
        }

        .limited-text::before {
            content: '...';
            position: absolute;
            bottom: 0;
            right: 0;
            padding-left: 30px;
        }
    </style>
</head>
<div class="background-color" style="background-color:#fff; padding-top:95px">
    <div class="container">
        <h1 class="text-center py-4" style="color:#1C46A8; font-weight:600;">Blog</h1>
        <div class="container">
            <div class="row">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM blog");
                while ($data = mysqli_fetch_array($sql)) {
                    $id = $data['id'];
                    $title = $data['title'];
                    $content = $data['content'];
                    $image = $data['image'];
                ?>
                    <div class="col-lg-4 p-3">
                        <a href="./blog-details.php?id=<?php echo $data['id']; ?>" style="text-decoration: none; color:rgba(0, 0, 0, 0.7);">
                            <div>
                                <img src="./images/blog/<?php echo $data['image']; ?>" alt="<?php echo $data['image']; ?>" width="100%" height="300px" style="border-radius: 8px;">
                            </div>



                            <div>
                                <div class="limited-text">
                                    <p><?php echo $data['title']; ?></p>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

</div>
<!-- floating-icons -->
<div class="floating-icons">
      <a href="mailto:apps@mdqualityapps.com" target="_blank">
      <div class="mailbox-container" style="top:180px">
        <div class="mailbox-name">Mail</div>
        <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/material-rounded/100/ffffff/mail.png" alt="mail"/></div>
    </div>
    </a>
      <a href="tel:8838995745" target="_blank">
      <div class="mailbox-container" style="top:230px">
        <div class="mailbox-name">Call</div>
        <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/glyph-neue/100/ffffff/phone.png" alt="phone"/></div>
    </div>
    </a>
      <a href="https://www.linkedin.com/in/divyalakshmipathy" target="_blank">
      <div class="mailbox-container" style="top:280px">
        <div class="mailbox-name">in</div>
        <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-filled/100/ffffff/linkedin.png" alt="linkedin"/></div>
    </div>
    </a>
      <a href="https://twitter.com/mdqualityapps" target="_blank">
      <div class="mailbox-container" style="top:330px">
        <div class="mailbox-name">Twit</div>
        <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/100/ffffff/twitter--v1.png" alt="twitter--v1"/></div>
    </div>
    </a>
    </div>
<?php
include './footer.php';
?>