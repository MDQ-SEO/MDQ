<?php
include './header.php';
include './connect.php';
?>

<head>
    <meta name="description"
        content="Supercharge your digital success with MDQuality Apps – where expertise meets excellence! Our stellar software and application development team craft cutting-edge solutions to propel your business forward." />
    <meta name="keywords" content="Reliable application development services, Customized application solutions" />
    <title>MDQuality Apps: Your Top Choice for Software & Application Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/42ccddb556.js" crossorigin="anonymous"></script>
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
        <h1 class="text-center py-4" style="color:#1C46A8; font-weight:600;">Trending</h1>
        <div class="container">
            <div class="row">
                <?php
                $id = $_GET['id'];
                $sql = $conn->prepare("SELECT * FROM blog WHERE id = ?");
                $sql->bind_param("i", $id); // "i" indicates the type is integer

                $sql->execute();
                $result = $sql->get_result();
                
                while ($data = $result->fetch_assoc()) {
                    $title = $data['title'];
                    $content = $data['content'];
                    $image = $data['image'];
                ?>
                <div class="col-lg-6">
                    <div>
                        <img src="./images/blog/<?php echo $data['image']; ?>" alt="<?php echo $data['image']; ?>"
                            width="100%" height="100%" style="border-radius: 8px;">
                    </div>
                </div>
                <div class="col-lg-6">
                    <?php echo $data['title']; ?>
                </div>
                <!-- <div class="col-lg-12 pt-4">
                        <div>
                            <img src="./images/blog/<?php echo $data['image']; ?>" alt="<?php echo $data['image']; ?>" width="100%" height="100%" style="border-radius: 8px;">
                        </div>
                    </div> -->
                <div class="col-lg-12 py-3">
                    <?php echo $data['content']; ?>
                </div>
                <hr>
                <?php } ?>
            </div>

            <!-- <div class="row">
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
                            <h2 class="pt-3" style="font-size:14px; font-weight:600; color:black">Business Travel - July 2, 2020</h2>


                            <div>
                                <div class="limited-text">
                                    <p><?php echo $data['content']; ?></p>
                                </div>
                            </div>

                        </a>
                    </div>
                <?php } ?>
            </div> -->
        </div>
    </div>

</div>
<!-- floating-icons -->
<div class="floating-icons">
    <a href="mailto:apps@mdqualityapps.com" target="_blank">
        <div class="mailbox-container" style="top:180px">
            <div class="mailbox-name">Mail</div>
            <div class="mailbox-icon"><img width="25" height="25"
                    src="https://img.icons8.com/material-rounded/100/ffffff/mail.png" alt="mail" /></div>
        </div>
    </a>
    <a href="tel:8838995745" target="_blank">
        <div class="mailbox-container" style="top:230px">
            <div class="mailbox-name">Call</div>
            <div class="mailbox-icon"><img width="25" height="25"
                    src="https://img.icons8.com/glyph-neue/100/ffffff/phone.png" alt="phone" /></div>
        </div>
    </a>
    <a href="https://www.linkedin.com/in/divyalakshmipathy" target="_blank">
        <div class="mailbox-container" style="top:280px">
            <div class="mailbox-name">in</div>
            <div class="mailbox-icon"><img width="25" height="25"
                    src="https://img.icons8.com/ios-filled/100/ffffff/linkedin.png" alt="linkedin" /></div>
        </div>
    </a>
    <a href="https://twitter.com/mdqualityapps" target="_blank">
        <div class="mailbox-container" style="top:330px">
            <div class="mailbox-name">Twit</div>
            <div class="mailbox-icon"><img width="25" height="25"
                    src="https://img.icons8.com/ios-glyphs/100/ffffff/twitter--v1.png" alt="twitter--v1" /></div>
        </div>
    </a>
</div>
<?php
include './footer.php';
?>