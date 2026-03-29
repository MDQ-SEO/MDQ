<?php
include './header.php';
include './connect.php';
?>
<style>
div.item {
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
    width: 120px;
}

#contactus {
    background-color: #fff !important;
}

.sizeclr {
    width: 50px;
    height: 50px;

}

.caption {
    /* Make the caption a block so it occupies its own line. */
    display: block;
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
</style>
<div class="website-background" style="padding-top:95px">
    <div class="container-fluid">
        <div class="useclr container-fluid">
            <div class="container">
                <?php
                $id = $_GET['id'];
                $logo = $conn->prepare("SELECT aw.project_title AS project_title,aw.logo_images AS logo_images,aw.banner_images AS banner_images,aw.project_overview AS project_overview,aw.photos AS photos,aw.technology AS awtechnology,aw.project_id AS project_id,tn.technology AS technology,tn.technology_images AS technology_images FROM application_web aw INNER JOIN technology_name tn ON tn.id=aw.technology Where aw.cilent_id=?");
                $logo->bind_param("i", $id); // "i" indicates the type is integer
        
                $logo->execute();
                $result = $logo->get_result();

                while ($frow = $result->fetch_assoc()) {
                    $projectlogo = $frow['logo_images'];
                    $bannerimages = $frow['banner_images'];
                    $overview = $frow['project_overview'];
                    $project_title = $frow['project_title'];
                    $mobileimages = $frow['photos'];
                    $awtechnology = $frow['awtechnology'];
                    $project_id = $frow['project_id'];
                ?>
                <div class="row py-4">
                    <div class="col-lg-6">
                        <div style="width:80px; height:80px">
                            <img src="images/portfolio/<?php echo $projectlogo; ?>" alt="<?php echo $projectlogo; ?>"
                                width="100%">
                        </div>
                        <h2 class="py-4 fw-bold"><?php echo $project_title; ?></h2>


                        <?php
                            $projectpointsid = $frow['project_id'];
                            $resultpoints = explode(",", $projectpointsid);
                            $points = array_map('trim', array_filter($resultpoints));
                            foreach ($points as $prjpoints) {
                                $pointsimg = $conn->prepare("SELECT id, images, projectpoints FROM project_points WHERE id=?");
                                $pointsimg->bind_param("i", $prjpoints); // "i" indicates the type is integer
                        
                                $pointsimg->execute();
                                $result = $pointsimg->get_result();
                                while ($frow = $result->fetch_assoc()) {
                                    $projectpoints = $frow['projectpoints'];
                                    $images = $frow['images'];
                            ?>


                        <h5 class="py-1">
                            <?php
                                        if ($prjpoints != null) {
                                            echo "<img src='images/portfolio/$images' alt='projects'  width='50px' height='50px'/>";
                                        }

                                        ?>
                            <span class=""><?php echo $projectpoints; ?></span>
                        </h5>
                        <?php }
                            } ?>

                        <p class="px-2 py-4 ">Platforms developed :
                        <div class="col-lg-8 px-4 d-flex ">
                            <div>
                                <img class="px-1" width="30px" alt="ios" src="images/portfolio/ios.png">
                                ios
                            </div>
                            <p class="px-2">|</p>
                            <div>
                                <img width="20px" alt="android" src="images/portfolio/Android.png">
                                android
                            </div>
                            <p class="px-2">|</p>
                            <div>
                                <img width="20px" alt="react" src="images/portfolio/Reactjs.png">
                                Reactjs
                            </div>
                        </div>
                        </p>
                    </div>
                    <div class="col-lg-6 d-flex justify-content-center">
                        <img src="images/portfolio/<?php echo $bannerimages; ?>" alt="<?php echo $bannerimages; ?>"
                            width="100%" height="100%">
                    </div>
                </div>
            </div>
        </div>

        <div class="container pybot">
            <div class="row py-4">
                <div class="col-lg-4">
                    <h3 class="fw-bold">Overview</h3>
                </div>
                <div class="col-lg-8">
                    <p>
                        <?php echo $overview; ?></p>
                </div>
            </div>
        </div>
        <!-- Technology -->
        <div class="container">
            <div class="row py-4">
                <div class="col-lg-4">
                    <h3 class="fw-bold">Technology</h3>
                </div>

                <div class="col-lg-8 d-flex ">
                    <?php

                    $resulttechnology = explode(",", $awtechnology);
                    $result = array_map('trim', array_filter($resulttechnology));
                    foreach ($result as $tech) {
                        $technologyimg = $conn->prepare("SELECT id, technology, technology_images FROM technology_name WHERE id=?");
                        $technologyimg->bind_param("i", $tech); // "i" indicates the type is integer
                
                        $technologyimg->execute();
                        $result = $technologyimg->get_result();
                        while ($frow = $result->fetch_assoc()) {
                            $technology = $frow['technology'];
                            $technology_images = $frow['technology_images'];
                    ?>


                    <div class="item">
                        <?php
                                if ($tech != null) {
                                    echo "<img src='images/portfolio/$technology_images' class='img-fluid px-2' alt='$tech' width='50%' height='80%'/>";
                                }

                                ?>
                        <span class="caption"><?php echo $technology; ?></span>
                    </div>
                    <?php }
                    } ?>
                </div>
            </div>
        </div>

        <?Php } ?>
        <div>
            <div class="swiper-container" id="slider1">
                <div class="swiper-wrapper">
                    <?php
                $resultImages = explode(",", $mobileimages);
                $resultImages = array_map('trim', array_filter($resultImages));
                foreach ($resultImages as $img) {
                ?>
                    <div class="swiper-slide py-5 px-3">
                        <div class="card d-flex justify-content-center align-items-center" style="border:none">
                            <?php
                            if ($img != null) {
                                echo "<img src='images/portfolio/$img' class='img-fluid px-2' alt='$img' width='80%' height='80%'/>";
                            }

                            ?>
                        </div>
                    </div>

                    <?php } ?>
                </div>

                <div class="swiper-button-prev custom-prev px-5"
                    style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/back.png') !important;">
                </div>
                <div class="swiper-button-next custom-next px-5"
                    style="background-image:url('https://img.icons8.com/ios-filled/100/1C46A8/forward--v1.png') !important;">
                </div>

            </div>
        </div>

        <div class="clients pt-5">
            <h3 class="mt-4" style="color: #064B96; font-weight:700; text-align:center;">Want to Know More?</h3>
            <h5 class="my-4" style="color: black; text-align:center;">Connect with us to know more and how we helped our
                client achieve their goals</h5>
            <div class="swiperlogo">
                <div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <?php
                        $logo = mysqli_query($conn, "SELECT id, projectname, aboutproject,image, sec_image FROM project_list WHERE type_project=2");

                        while ($frow = mysqli_fetch_array($logo)) {
                            $projectname = $frow['projectname'];
                            $aboutproject = $frow['aboutproject'];
                            $image = $frow['image'];
                            $sec_image = $frow['sec_image'];
                            $id = $frow['id'];
                        ?>
                            <div class="swiper-slide py-5 px-3 d-flex justify-content-center">

                                <a href="portfolio-mobile.php?id=<?php echo $id; ?>"
                                    style="color:black; text-decoration:none">
                                    <div class=" port-animation-card">
                                        <div class="wrapper">
                                            <img src="./images/portfolio/<?php echo $image; ?>" class="cover-image"
                                                alt="<?php echo $image; ?>" />
                                        </div>
                                        <img src="./images/portfolio/<?php echo $sec_image; ?>" width="180px"
                                            alt="<?php echo $sec_image; ?>" class="character" />

                                    </div>
                                    <div class="px-5">
                                        <h4 style="color:#1C46A8" class=" fw-bold text-start">
                                            <?php echo $projectname; ?></h4>
                                        <h6 style="color:rgba(0, 0, 0, 0.7)"><?php echo $aboutproject; ?></h6>
                                    </div>
                                </a>

                            </div>
                            <?php } ?>
                        </div>
                        <div class="swiper-button-prev custom-prev" style="background-image:none !important;"><img
                                width="40" height="40"
                                src="https://img.icons8.com/material-outlined/150/1C46A8/circled-chevron-left.png"
                                alt="circled-chevron-right" /></div>
                        <div class="swiper-button-next custom-next" style="background-image:none !important;"><img
                                width="40" height="40"
                                src="https://img.icons8.com/material-outlined/150/1C46A8/circled-chevron-right.png"
                                alt="circled-chevron-right" /></div>

                    </div>
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
                    const reviewsCarousel = new Swiper('.swiper-container', reviewsCarouselOptions);

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
                    const slider1 = new Swiper('#slider1', slider1Options);
                    </script>

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