<?php
include './header.php';

include './connect.php';

?>

<head>
  <meta name="description" content="Explore MDQuality Apps portfolio of mobile apps, web applications, and digital solutions. See our successful projects delivered for clients across industries." />
  <meta name="keywords" content="Mobile App Design and Development Portfolio, Scalable Enterprise Solutions" />
  <title>Web & Mobile Application Development | MDQuality Apps</title>
  <meta name="robots" content="max-image-preview:large" />
  <link rel="canonical" href="https://www.mdqualityapps.com/portfolio.php" />
  <meta property="og:locale" content="en_US" />
  <meta property="og:site_name" content="MDQuality Apps Solutions" />
  <meta property="og:title" content="Web & Mobile Application Development | MDQuality Apps" />
  <meta property="og:description" content="Explore MDQuality Apps portfolio of mobile apps, web applications, and digital solutions. See our successful projects delivered for clients across industries." />
  <meta property="og:url" content="https://mdqualityapps.com/portfolio.php/" />
  <meta property="article:publisher" content="MDQuality Apps Solutions" />
  <meta property="og:image" content="https://mdqualityapps.com/" />
  <meta property="og:image:secure_url" content="https://mdqualityapps.com/" />
  <meta property="og:image:width" content="1640px" />
  <meta property="og:image:height" content="856px" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:description" content="Explore MDQuality Apps portfolio of mobile apps, web applications, and digital solutions. See our successful projects delivered for clients across industries." />
  <meta name="twitter:title" content="Web & Mobile Application Development | MDQuality Apps" />
  <meta name="twitter:image" content="https://mdqualityapps.com/" />
  <style>
    .carousel-indicators [data-bs-target] {
      display: none;
    }

    :root {
      --card-height: 235px;
      --card-width: 250px;
    }

    .port-animation-card {
      width: var(--card-width);
      height: var(--card-height);
      position: relative;
      display: flex;
      justify-content: center;
      align-items: flex-end;
      padding: 0 36px;
      perspective: 2500px;
      margin: 0 50px;
    }

    .cover-image {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .wrapper {
      transition: all 0.5s;
      position: absolute;
      width: 100%;
      z-index: -1;
    }

    .port-animation-card:hover .wrapper {
      transform: perspective(900px) translateY(-5%) rotateX(25deg) translateZ(0);
      box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
      -webkit-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
      -moz-box-shadow: 2px 35px 32px -8px rgba(0, 0, 0, 0.75);
    }

    .wrapper::before,
    .wrapper::after {
      content: "";
      opacity: 0;
      width: 100%;
      height: 80px;
      transition: all 0.5s;
      position: absolute;
      left: 0;
    }

    .wrapper::before {
      top: 0;
      height: 100%;
      background-image: linear-gradient(to top,
          transparent 46%,
          rgba(12, 13, 19, 0.5) 68%,
          rgba(12, 13, 19) 97%);
    }

    .wrapper::after {
      bottom: 0;
      opacity: 1;
      background-image: linear-gradient(to bottom,
          transparent 46%,
          rgba(12, 13, 19, 0.5) 68%,
          rgba(12, 13, 19) 97%);
    }

    .port-animation-card:hover .wrapper::before,
    .wrapper::after {
      opacity: 1;
    }

    .port-animation-card:hover .wrapper::after {
      height: 100%;
    }

    .title {
      width: 100%;
      transition: transform 0.5s;
    }

    .port-animation-card:hover .title {
      transform: translate3d(0%, -50px, 100px);
    }

    .character {
      opacity: 0;
      transition: all 0.5s;
      position: absolute;
      z-index: -1;
    }

    .port-animation-card:hover .character {
      opacity: 1;
      transform: translate3d(0%, -30%, 100px);
    }
  </style>
</head>
<div class="website-background" style="background-color:#F7FDFF">
  <div class="container-fluid px-5" style="padding-top:95px">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 pt-4">
          <h1 style="color:#1C46A8; font-weight:700;">Our Beautiful Interfaces</h1>
          <p class="fs-5">We have been instrumental in turning our clients' dreams of building exceptional technology platforms into reality, successfully launching them into the market, generating substantial revenues, amassing thousands of users, and achieving million-dollar valuations. We can replicate this success for you too. Remember, every remarkable journey begins with a single step.</p>

        </div>
        <div class="col-lg-4">
          <!-- Carousel -->
          <div id="demo" class="carousel slide" data-bs-ride="carousel">

            <!-- Indicators/dots -->
            <div class="carousel-indicators ">
              <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
              <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
            </div>

            <!-- The slideshow/carousel -->
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/portfolio/indxslider/image1.png" alt="Los Angeles" class="d-block slideshow" width="100%">
              </div>
              <div class="carousel-item">
                <img src="images/portfolio/indxslider/image2.png" alt="Chicago" class="d-block slideshow" width="100%">
              </div>
              <div class="carousel-item">
                <img src="images/portfolio/indxslider/image3.png" alt="New York" class="d-block  slideshow" width="100%">
              </div>
            </div>
          </div>
        </div>
      </div>


      <!-- first row -->
      <div class="container-fluid">
        <h2 class="craft py-4 fw-bold text-center">Passion-Infused Exemplary Apps.</h2>
        <div class="row">
          <h3 class="craft fw-bold text-center">Mobile Applications</h3>
          <?php
          $logo = mysqli_query($conn, "SELECT id, projectname, aboutproject, image, sec_image  FROM project_list WHERE type_project=2");

          while ($frow = mysqli_fetch_array($logo)) {
            $projectname = $frow['projectname'];
            $aboutproject = $frow['aboutproject'];
            $image = $frow['image'];
            $sec_image = $frow['sec_image'];
            $id = $frow['id'];
          ?>
            <div class="col-lg-4 d-flex justify-content-center">
              <a href="portfolio-mobile.php?id=<?php echo $id; ?>" style="color:black; text-decoration:none">
                <div class=" port-animation-card">
                  <div class="wrapper">
                    <img src="./images/portfolio/<?php echo $image; ?>" alt="<?php echo $image; ?>" class="cover-image" />
                  </div>
                  <img src="./images/portfolio/<?php echo $sec_image; ?>" alt="<?php echo $sec_image; ?>" width="180px" class="character" />

                </div>
                <div class="px-5" style="text-align:center">
                  <h4 style="color:#1C46A8" class=" fw-bold"><?php echo $projectname; ?></h4>
                  <h6 style="color:rgba(0, 0, 0, 0.7)"><?php echo $aboutproject; ?></h6>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
      </div>
      <div class="container">
        <div class="row py-5">
          <h3 class="craft fw-bold text-center">Web Applications</h3>
          <?php
          $logo = mysqli_query($conn, "SELECT id, projectname, aboutproject, image, sec_image FROM project_list WHERE type_project=1");
          while ($frow = mysqli_fetch_array($logo)) {
          $projectname = $frow['projectname'];
          $aboutproject = $frow['aboutproject'];
          $image = $frow['image'];
          $sec_image = $frow['sec_image'];
          $id = $frow['id'];
          ?>
            <div class="col-lg-4 d-flex justify-content-center">
              <a href="portfolio-web.php?id=<?php echo $id; ?>" style="color:black; text-decoration:none">
                <div class=" port-animation-card">
                  <div class="wrapper">
                    <img src="./images/portfolio/<?php echo $image; ?>" alt="<?php echo $image; ?>" class="cover-image" />
                  </div>
                  <img src="./images/portfolio/<?php echo $sec_image; ?>" alt="<?php echo $sec_image; ?>" width="280px" class="character" />

                </div>
                <div class="px-5" style="text-align:center">
                  <h4 style="color:#1C46A8" class=" fw-bold"><?php echo $projectname; ?></h4>
                  <h6 style="color:rgba(0, 0, 0, 0.7)"><?php echo $aboutproject; ?></h6>
                </div>

              </a>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- floating-icons -->
<div class="floating-icons">
  <a href="mailto:apps@mdqualityapps.com" target="_blank">
    <div class="mailbox-container" style="top:180px">
      <div class="mailbox-name">Mail</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/material-rounded/100/ffffff/mail.png" alt="mail" /></div>
    </div>
  </a>
  <a href="tel:8838995745" target="_blank">
    <div class="mailbox-container" style="top:230px">
      <div class="mailbox-name">Call</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/glyph-neue/100/ffffff/phone.png" alt="phone" /></div>
    </div>
  </a>
  <a href="https://www.linkedin.com/in/divyalakshmipathy" target="_blank">
    <div class="mailbox-container" style="top:280px">
      <div class="mailbox-name">in</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-filled/100/ffffff/linkedin.png" alt="linkedin" /></div>
    </div>
  </a>
  <a href="https://twitter.com/mdqualityapps" target="_blank">
    <div class="mailbox-container" style="top:330px">
      <div class="mailbox-name">Twit</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/100/ffffff/twitter--v1.png" alt="twitter--v1" /></div>
    </div>
  </a>
</div>
<!-- floating-icons -->
<div class="floating-icons">
  <a href="mailto:apps@mdqualityapps.com" target="_blank">
    <div class="mailbox-container" style="top:180px">
      <div class="mailbox-name">Mail</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/material-rounded/100/ffffff/mail.png" alt="mail" /></div>
    </div>
  </a>
  <a href="tel:8838995745" target="_blank">
    <div class="mailbox-container" style="top:230px">
      <div class="mailbox-name">Call</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/glyph-neue/100/ffffff/phone.png" alt="phone" /></div>
    </div>
  </a>
  <a href="https://www.linkedin.com/in/divyalakshmipathy" target="_blank">
    <div class="mailbox-container" style="top:280px">
      <div class="mailbox-name">in</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-filled/100/ffffff/linkedin.png" alt="linkedin" /></div>
    </div>
  </a>
  <a href="https://twitter.com/mdqualityapps" target="_blank">
    <div class="mailbox-container" style="top:330px">
      <div class="mailbox-name">Twit</div>
      <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/100/ffffff/twitter--v1.png" alt="twitter--v1" /></div>
    </div>
  </a>
</div>
<?php
include './footer.php';
?>