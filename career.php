<?php
include './header.php';
include './connect.php';
?>

<head>
    <meta name="description" content="Supercharge your digital success with MDQuality Apps – where expertise meets excellence, crafting cutting-edge solutions to propel your business forward!" />
    <meta name="keywords" content="Reliable application development services, Customized application solutions" />
    <title>MDQ: Your Top Choice for Software & Application Development</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/42ccddb556.js" crossorigin="anonymous"></script>
    <meta name="robots" content="max-image-preview:large" />
    <link rel="canonical" href="https://www.mdqualityapps.com/aboutus" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:site_name" content="MDQuality Apps Solutions" />
    <meta property="og:title" content="Reliable application development services, Customized application solutions" />
    <meta property="og:description" content="Supercharge your digital success with MDQuality Apps – where expertise meets excellence! Our stellar software and application development team craft cutting-edge solutions to propel your business forward." />
    <meta property="og:url" content="https://www.mdqualityapps.com/aboutus" />
    <meta property="article:publisher" content="MDQuality Apps Solutions" />
    <meta property="og:image" content="https://www.mdqualityapps.com/" />
    <meta property="og:image:secure_url" content="https://www.mdqualityapps.com/" />
    <meta property="og:image:width" content="1640px" />
    <meta property="og:image:height" content="856px" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:description" content="Supercharge your digital success with MDQuality Apps – where expertise meets excellence! Our stellar software and application development team craft cutting-edge solutions to propel your business forward." />
    <meta name="twitter:title" content="Reliable application development services, Customized application solutions" />

    <meta name="twitter:image" content="https://www.mdqualityapps.com/" />
    <style>
        .group-photo {
            position: relative;
            text-align: center;
            color: white;
        }

        .centered {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }

        .zoom-gallery:hover {
            transform: scale(1.1);
        }

        .about-heading {
            font-size: 50px;
        }

        @media (max-width:720px) {
            .about-heading {
                font-size: 20px;
            }
        }

        @media (max-width:720px) {
            .modal-content {
                height: 500px;
                overflow-y: auto;
                max-width: 90% !important;
            }

            .hideApply {
                display: none;
            }

        }

        .positionButton {
            width: 100%;
            padding: 20px 30px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-weight: 700;
        }

        .buttonText {
            flex-grow: 1;
        }

        .arrowMark {
            margin-left: auto;
            font-size: 25px;
        }

        /* Button styling */
        .positionButton {
            display: inline-flex;
            align-items: center;
            padding: 15px 30px;
            font-size: 16px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .positionButton .buttonText {
            margin-right: 10px;
        }

        .positionButton .arrowMark {
            font-size: 20px;
        }

        /* Modal styling */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0, 0, 0);
            background-color: rgba(0, 0, 0, 0.4);
            justify-content: center;
            align-items: center;
            padding-top: 45%;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 65%;
            border-radius: 5px;
        }

        .close {
            color: #aaa;
            position: absolute;
            top: 0px;
            right: 10px;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover,
        .close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .applyButton {
            background-color: #1C46A8;
            color: white;
            border: none;
            width: 150px;
            padding: 10px 20px;
            border-radius: 5px;
        }

        .applyButton:hover {
            color: white;
        }

        .popupUl {
            line-height: 40px;
        }

        .careerInput {
            width: 100%;
            border: none;
            border-bottom: 1px solid black;
        }

        .careerInput:focus {
            border: none;
            outline: none;
            border-bottom: 1px solid black;
        }

        .dropInput {
            width: 100%;
        }

        .upload-container {
            margin-top: 30px;
            margin-bottom: 30px;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 200px;
            border: 2px dashed #ccc;
            background-color: #fff;
            text-align: center;
            position: relative;
        }

        .file-upload-input {
            position: absolute;
            width: 100%;
            height: 100%;
            opacity: 0;
            cursor: pointer;
        }

        .file-upload-label {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            font-size: 18px;
            color: #888;
        }

        .upload-icon {
            font-size: 36px;
            margin-bottom: 10px;
            color: #888;
        }
    </style>
</head>
<div class="background-color" style="background-color:#F7FDFF; padding-top:60px">
    <div class="group-photo">
        <img src="./images/career/bg-careers.png" alt="Software Developer Team" style="width:100%;">
    </div>
    <div class="px-3">
        <hr>
    </div>
    <div class="join-mdq mt-4">
        <div class="container mb-4">
            <div class="row py-4">
                <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
                    <img src="./images/career/career.png" alt="hiring developers" width="100%">
                </div>
                <div class="col-lg-6  d-flex justify-content-center align-items-center">
                    <div>
                        <h2 style="font-weight:600; color:#1C46A8">Careers at MDQuality Apps</h2>
                        <p style="color:rgba(0, 0, 0, 0.7); text-align:justify">Join the dynamic team at MDQuality Apps and be a part of our mission to empower global progress through innovative IT solutions. We are always looking for passionate, talented individuals who are eager to make a difference in the world through technology. At MDQuality Apps, you will have the opportunity to work on exciting projects, collaborate with industry experts, and develop your skills in a supportive and forward-thinking environment. Explore our current job openings and discover how you can contribute to our vision of a more connected and efficient world.</p>
                    </div>

                </div>

            </div>
        </div>
        <div class="px-3">
            <hr style="margin-bottom:0px">
        </div>
    </div>
    <div class="container">
        <h3 class="py-5" style="font-weight:800;font-size:40px; color:#1C46A8; text-align:center">Trending Opportunities</h3>
        <p style="font-size:18px; text-align:center">We promise you an inclusive work environment where you will fall in love with challenging as well as getting challenged.</p>
        <div class="row">
            <div class="col-lg-3 pt-4">
                <img src="./images/career/career-vector.jpg" alt="career vector" style="width:100%;">
            </div>
            <div class="col-lg-9">
                <h5 class="pt-4" style="font-weight:800;">Positions:</h5>
                <div class="row">
                    <?php
                    $sql = mysqli_query($conn, "SELECT * FROM hiring");
                    $count = 0;

                    while ($data = mysqli_fetch_array($sql)) {
                        $id = $data['id'];
                        $position = $data['position'];
                    ?>
                        <div class="col-lg-12 my-2">
                            <a href="career-hire-details.php?id=<?php echo $id; ?>">
                            <button class="positionButton">
                                <span class="buttonText"><?php echo $position; ?></span>
                                <span class="arrowMark">&rarr;</span>
                            </button>
                            </a>
                        </div>
                    <?php } ?>
                </div>

            </div>
        </div>
        <p class="py-5" style="font-size:18px;">
            Explore the latest and most exciting career paths at the forefront of innovation and growth. Our company is expanding, and we are seeking dynamic, forward-thinking professionals to join our team. We are hiring for a variety of positions across multiple departments, including technology, marketing, sales, and customer service. If you are passionate about making an impact and eager to grow with a leading organization, we want to hear from you. Apply today to be part of our journey towards excellence.
        </p>
    </div>

    <div id="myModal" class="modal">
        <div class="modal-content" style="padding:5%">
            <span class="close">&times;</span>

        </div>
    </div>
    <div class="px-3 py-3">
        <hr>
    </div>
    <div class="join-mdq mt-4">
        <div class="container mb-4">
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100">
                    <img src="./images/we-are-hiring.webp" alt="hiring developers" width="100%">
                </div>
                <div class="col-lg-6  d-flex justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-lg-10">
                            <div>
                                <h2 style="font-weight:600; color:#1C46A8">Join the MDQ team!</h2>
                                <h5 style="color:rgba(0, 0, 0, 0.7)">Innovate with the latest and greatest technologies & get to work on some of the coolest projects you can imagine.</h5>
                                <div class="web-button-div">
                                    <a href="./offer-letter.php">
                                        <button class="web-button mt-3">Apply now</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
        <div class="px-3">
            <hr style="margin-bottom:0px">
        </div>
        <!-- New Modal -->
        <div id="newModal" class="modal">

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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Select all position buttons
        var positionButtons = document.querySelectorAll('.positionButton');

        // Modal elements
        var modal = document.getElementById('myModal');
        var closeButtons = document.querySelectorAll('.close');

        // Function to handle button clicks
        positionButtons.forEach(function(button) {
            button.onclick = function() {
                // Extract id from button ID
                var id = button.id.split('_')[1]; // Assuming format is 'openModalBtn_<id>'

                // Example: Fetch job details via AJAX (assuming PHP script to fetch data)
                fetchJobDetails(id); // Function to fetch job details based on id

                // Display modal
                modal.style.display = 'flex';
            }
        });

        // Function to fetch job details via AJAX
        function fetchJobDetails(id) {
            // Example AJAX call using Fetch API
            fetch('fetch_job_details.php?id=' + id)
                .then(response => response.json())
                .then(data => {
                    // Populate modal content with job details
                    document.getElementById('jobTitle').textContent = data.position;
                    document.getElementById('jobLocation').textContent = data.location;
                    // Populate other details similarly
                })
                .catch(error => {
                    console.error('Error fetching job details:', error);
                });
        }

        // Close modal functionality
        closeButtons.forEach(function(close) {
            close.onclick = function() {
                modal.style.display = 'none';
            }
        });

        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = 'none';
            }
        }
    });
</script>


<?php
include './footer.php';
?>