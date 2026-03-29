<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css" integrity="sha384-3AB7yXWz4OeoZcPbieVW64vVXEwADiYyAEhwilzWsLw+9FgqpyjjStpPnpBO8o8S" crossorigin="anonymous">

<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>


</head>
<style>

   
    @font-face {
        font-family: 'Pacifico';
        src: url('path_to_your_font_files/Pacifico-Regular.ttf') format('truetype');
        /* Update the path to your font file */
    }

    @font-face {
        font-family: 'Quicksand';
        src: url('path_to_your_font_files/Quicksand-Regular.ttf') format('truetype');
        /* Update the path to your font file */
        /* You can also add additional font weights or styles here */
    }

    .contact-card {
        height: 490px;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3), 0 6px 20px 0 rgba(256, 256, 256, 0.25);
        border-radius: 0px !important;
        border: none;
        margin-bottom: -7%;
    }

    .last {
        background-color: #081A48;
        color: white;
        padding-top: 150px;
    }

    .last-first p {
        padding-top: 0px;
    }

    .last-second {
        list-style: none;
        margin-bottom: 5%;
    }

    .last-second h4 {
        font-weight: 600;
    }

    .last-second ul {
        list-style: none;
        line-height: 35px;
        color: white;
    }

    .last-second ul li a {
        color: white;
        text-decoration: none;
    }

    .last-second ul li a:hover {
        color: white;
    }

    .last-third {
        margin-top: 3%;
    }

    .lasthead {
        font-weight: 600;
    }

    .last-third a {
        color: white;
        text-decoration: none;
    }

    .last-third a:hover {
        color: white;
    }

    .soci-last {
        display: flex !important;
        align-items: center;
    }

    .so-icon {
        margin-right: 20px;
        padding: 5px 10px;
        border-radius: 100%;
        border-color: white;
        border-style: solid;
        border-width: 0.5px;
    }

    .design-but button {
        padding: 10px 40px;
        border-radius: 30px;
        border: none;
        color: white;
        background-image: linear-gradient(to top, #48A7ED, #0052D3);

    }

    .bw-head {
        color: #081A48;
    }

    .para {
        font-size: 17px;
        text-align: justify;
    }

    .best-work ul li a {
        color: #081A48;
        font-size: 14px;
        text-decoration: none;
    }

    .best-work ul li a:hover {
        color: black;
    }

    .lastline {
        color: white;
        text-align: end;
    }

    .lastline a {
        color: white;
        text-decoration: none;
    }

    .lastline a:hover {
        color: white;
    }

    .copyrights {
        background-color: #081A48;
        padding-top: 1.5%;
        padding-bottom: 0.7%;
    }

    .last-anchor {
        color: white;
        text-decoration: none;
        font-weight: 600;
    }

    .a-tag {
        color: white;
        font-weight: 600;
    }

    .title {
        font-family: 'Pacifico', cursive;
        color: white;
        font-size: 1.7rem;
    }

    .form-control {
        background-color: white;
        border-radius: 1rem;
        border: none;
        width: 90%;
        margin-left: 5%;
        box-shadow: 0px 7px 5px rgba(0, 0, 0, 0.2);

        &.thick {
            height: 1.3rem;

        }

        &:focus {
            border: 2px solid #1C46A8;
            box-shadow: 5px 10px 5px rgba(0, 0, 0, 0.09);
        }
    }

    .message .form-control {
        padding: 0.5rem 1.8rem;
    }

    ::placeholder {
        font-family: "Quicksand", sans-serif;
        font-weight: 600;
        font-size: 1.1rem;
        color: #081A48 !important;
        position: relative;
        left: 0;
    }

    .form-group input,
    textarea {
        font-family: "Quicksand", sans-serif;
        color: #081A48;
        font-size: 1.1rem;
    }

    .icon {
        position: absolute;
        left: 45px;
        top: 12px;
    }


    .btn.btn-primary {
        font-family: "Quicksand", sans-serif;
        font-weight: bold;
        height: 2.5rem;
        line-height: 2.5rem;
        padding: 0 3rem;
        border: 0;
        border-radius: 3rem;
        background-image: linear-gradient(131deg, #1C46A8, #1CC4F8);
        background-size: 300% 100%;
        transition: all 0.3s ease-in-out;
    }

    .btn.btn-primary:hover:enabled {
        box-shadow: 0 0.5em 0.5em -0.4em #ff923cba;
        background-size: 100% 100%;
        transform: translateY(-0.15em);
    }

    .back-img {
        background: url(./images/contactform.png);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .anchor-footer {
        color: #B6C7D6;
        text-decoration: none;
    }

    .anchor-footer:hover {
        color: white;
    }

    .social-media .fb {
        position: relative;
        display: block;
        width: 45px;
        height: 45px;
        background-color: #f1f1f1;
        border-radius: 30%;
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px rgba(69, 69, 69, 0.5);
        color: #4267B2;
    }

    .social-media .fb i {
        line-height: 50px;
        font-size: 1.5rem;
        transition: .2s linear;
    }

    .social-media .fb:hover i {
        transform: scale(1.2);
        color: #f1f1f1;
    }

    .social-media .fb:hover::before {
        animation: icons .7s 1;
        top: -10%;
        left: -10%;
    }

    .social-media .fb::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        background: #4267B2;
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }
    

    @keyframes icons {
        0% {
            left: -110%;
            top: 90%;
        }

        50% {
            left: 10%;
            top: -30%;
        }

        100% {
            left: -10%;
            top: -10%;
        }
    }

    /****************************linkedin***************/
    .social-media .linkedin {
        position: relative;
        display: block;
        width: 45px;
        height: 45px;
        background-color: #f1f1f1;
        border-radius: 30%;
        /* margin: 10px; */
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px rgba(69, 69, 69, 0.5);
        color: #0077b5;
    }

    .social-media .linkedin i {
        line-height: 50px;
        font-size: 1.5rem;
        transition: .2s linear;
    }

    .social-media .linkedin:hover i {
        transform: scale(1.2);
        color: #f1f1f1;
    }

    .social-media .linkedin:hover::before {
        animation: icons .7s 1;
        top: -10%;
        left: -10%;
    }

    .social-media .linkedin::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        background: #0077b5;
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    @keyframes icons {
        0% {
            left: -110%;
            top: 90%;
        }

        50% {
            left: 10%;
            top: -30%;
        }

        100% {
            left: -10%;
            top: -10%;
        }
    }

    /********************************youtube************************/
    .social-media .youtube {
        position: relative;
        display: block;
        width: 45px;
        height: 45px;
        background-color: #f1f1f1;
        border-radius: 30%;
        /* margin: 10px; */
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px rgba(69, 69, 69, 0.5);
        color: #FF0000;
    }

    .social-media .youtube i {
        line-height: 50px;
        font-size: 1.5rem;
        transition: .2s linear;
    }

    .social-media .youtube:hover i {
        transform: scale(1.2);
        color: #f1f1f1;
    }

    .social-media .youtube:hover::before {
        animation: icons .7s 1;
        top: -10%;
        left: -10%;
    }

    .social-media .youtube::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        background: #FF0000;
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    @keyframes icons {
        0% {
            left: -110%;
            top: 90%;
        }

        50% {
            left: 10%;
            top: -30%;
        }

        100% {
            left: -10%;
            top: -10%;
        }
    }

    /********************instragram***************/
    .social-media .instagram {
        position: relative;
        display: block;
        width: 45px;
        height: 45px;
        background-color: #f1f1f1;
        border-radius: 30%;
        /* margin: 10px; */
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px rgba(69, 69, 69, 0.5);
        color: rgb(251, 173, 80);
    }

    .social-media .instagram i {
        line-height: 50px;
        font-size: 1.5rem;
        transition: .2s linear;
    }

    .social-media .instagram:hover i {
        transform: scale(1.2);
        color: #f1f1f1;
    }

    .social-media .instagram:hover::before {
        animation: icons .7s 1;
        top: -10%;
        left: -10%;
    }

    .social-media .instagram::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        background: #fbad50;
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    @keyframes icons {
        0% {
            left: -110%;
            top: 90%;
        }

        50% {
            left: 10%;
            top: -30%;
        }

        100% {
            left: -10%;
            top: -10%;
        }
    }

    /**************twitter****************/
    .social-media .twitter {
        position: relative;
        display: block;
        width: 45px;
        height: 45px;
        background-color: #f1f1f1;
        border-radius: 30%;
        overflow: hidden;
        text-align: center;
        text-decoration: none;
        box-shadow: 0 5px 15px -5px rgba(69, 69, 69, 0.5);
        color: #1DA1F2;
    }

    .social-media .twitter i {
        line-height: 50px;
        font-size: 1.5rem;
        transition: .2s linear;
    }

    .social-media .twitter:hover i {
        transform: scale(1.2);
        color: #f1f1f1;
    }

    .social-media .twitter:hover::before {
        animation: icons .7s 1;
        top: -10%;
        left: -10%;
    }

    .social-media .twitter::before {
        content: '';
        position: absolute;
        width: 120%;
        height: 120%;
        background: #1DA1F2;
        transform: rotate(45deg);
        left: -110%;
        top: 90%;
    }

    @keyframes icons {
        0% {
            left: -110%;
            top: 90%;
        }

        50% {
            left: 10%;
            top: -30%;
        }

        100% {
            left: -10%;
            top: -10%;
        }
    }

    .cap-inp {
        border-radius: 1rem;
        outline: none;
        border: none;
        width: 150px;
        background-color: white;
    }

    .footer-address {
        color: #B6C7D6;
    }

    .footer-address:hover {
        color: #ffffff;
    }

    .india-image {
        width: 200px;
        position: relative;
        display: inline-block;
    }

    .india-image .img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    .india-image:hover .img-top {
        display: inline;
    }

    .dubai-image {
        width: 200px;
        position: relative;
        display: inline-block;
    }

    .dubai-image .dubai-img-top {
        display: none;
        position: absolute;
        top: 0;
        left: 0;
        z-index: 99;
    }

    .dubai-image:hover .dubai-img-top {
        display: inline;
    }
</style>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

<div class="pt-5" id="contactus" style="background-color:#F7FDFF">
    <div class="card back-img contact-card mt-4" style="width: 80%; margin-left:10%">

        <!-- popup screen  -->
        <style>
            .popup {
                display: none;
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 20px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
                z-index: 9999;
            }

            .overlay {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 9998;
            }

            .popup-inputbox {
                border-radius: 15px;
                border: 1px solid #081A48;
                width: 100%;
            }

            .popup-inputbox::placeholder {
                color: #081A48 !important;
                font-size: 14px;
            }

            .popuptitle {
                font-weight: 700;
                color: #1C46A8;
            }

            .popup-submit {
                background-color: white;
                color: black;
                border: none;
                border-radius: 5px;
            }

            .close-icon {
                position: absolute;
                top: -4px;
                right: 10px;
                font-size: 30px;
                cursor: pointer;
                color: #1C46A8;
            }

            .cap-inpd {
                margin: 0;
                width: 100%;
                border: 1px solid #081A48;
                box-shadow: none;
            }
        </style>
        <div class="popup" id="popup" style="width:60%; border-radius:5px">
            <span class="close-icon" onclick="closePopup()">&times;</span>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center align-items-center">
                    <img src="./images/contact-us-vector.png" alt="girl with contact us board" width="100%" style="border-radius:5px">
                </div>
                <div class="col-lg-6">
                    <form method="POST" action="./messier97/upload-contactus.php" onsubmit="return checkInput()" enctype="multipart/form-data">
                        <h3 class="popuptitle mb-3">Contact Us!</h3>
                        <div>
                            <input class="popup-inputbox py-2 px-3 " placeholder="Name*" type="text" id="message" name="name" required>
                        </div>
                        <div>
                            <input class="popup-inputbox py-2 px-3 my-3" placeholder="Phone*" type="text" id="phone" oninput="this.value = this.value.replace(/[^0-9]/g, '')" name="phone" required>
                        </div>
                        <div>
                            <input class="popup-inputbox py-2 px-3 " placeholder="Email*" type="email" id="message" name="email" required>
                        </div>
                        <div>
                            <input class="popup-inputbox py-4 px-3  my-3" placeholder="Message*" type="text" id="message" name="message" required>
                        </div>
                        <div id="user-input" class="inline">
                            <input class="cap-inpd py-2 my-2 form-control" type="text" id="submit_a" placeholder=" Enter Captcha" required />
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="d-flex mt-1">
                                    <div class="inline" style="cursor: pointer; margin-right:10px" onclick="generate_a()">
                                        <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/90/1C46A8/refresh--v1.png" alt="refresh--v1" />
                                    </div>
                                    <del style="text-decoration-thickness: 1.5px; text-decoration-color: #1C46A8;">
                                        <div id="image_a" style="color: red; font-weight:bold; font-style:italic; font-size:18px" class="inline" selectable="False">
                                        </div>
                                    </del><span style="padding-left: 10px;" id="key_a"></span>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div>
                                    <div class="web-button-div d-flex justify-content-center">
                                        <button type="submit" name="upload" onclick="return printmsg_a()" class="web-button">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="overlay" id="overlay" onclick="closePopup()"></div>
        <!-- Add a scroll trigger -->
        <script>
            var popupOpened = false;
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (!popupOpened && (document.body.scrollTop > 2500 || document.documentElement.scrollTop > 2500)) {
                    openPopup();
                    popupOpened = true;
                }
            }

            // Function to open the popup
            function openPopup() {
                document.getElementById('popup').style.display = 'block';
                document.getElementById('overlay').style.display = 'block';
            }

            // Function to close the popup
            function closePopup() {
                document.getElementById('popup').style.display = 'none';
                document.getElementById('overlay').style.display = 'none';
            }

            function checkInput() {
                var message = document.getElementById('message').value;
                var restrictedChars = /[<>*\/]/;
                if (restrictedChars.test(message)) {
                    alert('Please avoid using <, >, *, or / in your message.');
                    return false;
                }
                return true;
            }
        </script>
        <!-- popup screen end -->
        <div class="container py-3 px-5">
            <div class="row">
                <div class="col-lg-6"></div>
                <div class="col-lg-6">
                    <form method="POST" action="./messier97/upload-contactus.php">
                        <h2 class="title text-center mb-2">Talk to Us</h2>
                        <!-- Name -->
                        <div class="form-group position-relative">
                            <input type="text" id="formName" name="name" class="form-control form-control-lg thick" placeholder="Name" required>
                        </div>
                        <!-- E-mail -->
                        <div class="form-group position-relative mt-2">
                            <input type="text" name="phone" class="form-control form-control-lg thick" placeholder="Phone" required oninput="this.value = this.value.replace(/[^0-9]/g, '');">
                        </div>
                        <!-- phone -->
                        <div class="form-group position-relative my-2">
                            <input type="email" name="email" id="formEmail" class="form-control form-control-lg thick" placeholder="E-mail" required>
                        </div>
                        <!-- Message -->
                        <div class="form-group message">
                            <textarea id="formMessage" name="message" class="form-control form-control-lg" rows="4" placeholder="Message"></textarea>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div style="margin-left:20px">
                                    <div id="user-input" class="inline">
                                        <input class="cap-inp py-2 my-2 form-control" type="text" id="submit" placeholder=" Enter Captcha" required />
                                    </div>
                                    <div class="d-flex mt-1">
                                        <div class="inline mx-3 " onclick="generate()">
                                            <img width="25" height="25" src="https://img.icons8.com/ios-glyphs/90/ffffff/refresh--v1.png" alt="refresh--v1" />
                                        </div>
                                        <del style="text-decoration-thickness: 1.5px; text-decoration-color: #1C46A8;">
                                            <div id="image" style="color: red; font-weight:bold; font-style:italic; font-size:18px" class="inline" selectable="False">
                                            </div>
                                        </del><span style="padding-left: 20px;" id="key"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <!-- Submit btn -->
                                <div class="text-center">
                                    <div class="web-button-div">
                                        <button style="border-radius: 1rem; padding: 7px 50px;" name="upload" type="submit" onclick="return printmsg()" class="web-button my-2">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<script>
    let captcha;
    document.addEventListener('DOMContentLoaded', function() {
        captcha = document.getElementById("image");
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (let i = 1; i < 5; i++) {
            uniquechar += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        captcha.innerHTML = uniquechar;
    }, false);

    let captcha_a;
    document.addEventListener('DOMContentLoaded', function() {
        captcha_a = document.getElementById("image_a");
        let uniquechar_a = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (let i = 1; i < 5; i++) {
            uniquechar_a += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        captcha_a.innerHTML = uniquechar_a;
    }, false);

    function generate() {

        captcha = document.getElementById("image");
        let uniquechar = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (let i = 1; i < 5; i++) {
            uniquechar += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        captcha.innerHTML = uniquechar;
    }

    function generate_a() {

        captcha_a = document.getElementById("image_a");
        let uniquechar_a = "";

        const randomchar =
            "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

        for (let i = 1; i < 5; i++) {
            uniquechar_a += randomchar.charAt(
                Math.random() * randomchar.length)
        }
        captcha_a.innerHTML = uniquechar_a;
    }

    function printmsg() {
        const usr_input = document
            .getElementById("submit").value;
        if (usr_input == captcha.innerHTML) {
            let s = document.getElementById("key")
                .innerHTML = '<div style="display:flex;"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/200/00A14F/checked--v1.png" alt="checked--v1"/><p style="color:#00A14F"> Verified</p></div>';
            generate();
            return true;
        } else {
            let s = document.getElementById("key")
                .innerHTML = '<div style="display:flex;"><img style="margin-top:-1px" width="25" height="25" src="https://img.icons8.com/material-sharp/96/EA0B0B/multiply.png" alt="multiply"/><span style="color:red">Invalid</span></div>';
            generate();
            return false;
        }
    }

    function printmsg_a() {
        const user_input = document
            .getElementById("submit_a").value;
        if (user_input == captcha_a.innerHTML) {
            let s = document.getElementById("key_a")
                .innerHTML = '<div style="display:flex;"><img width="25" height="25" src="https://img.icons8.com/ios-glyphs/200/00A14F/checked--v1.png" alt="checked--v1"/><p style="color:#00A14F"> Verified</p></div>';
            generate_a();
            return true;
        } else {
            let s = document.getElementById("key_a")
                .innerHTML = '<div style="display:flex;"><img style="margin-top:-1px" width="25" height="25" src="https://img.icons8.com/material-sharp/96/EA0B0B/multiply.png" alt="multiply"/><span style="color:red">Invalid</span></div>';
            generate_a();
            return false;
        }
    }
</script>
<!-- <a href="tel:8838995745" class="anchor-footer">
    <p><img style="margin-top: -2px;" width="20" height="20" src="https://img.icons8.com/android/150/ffffff/phone.png" alt="phone" /> +91 8838995745</p>
</a>
<a href="mailto:apps@mdqualityapps.com" class="anchor-footer">
    <p><img style="margin-top: -2px;" width="20" height="20" src="https://img.icons8.com/metro/150/ffffff/filled-message.png" alt="filled-message" /> &nbsp;apps@mdqualityapps.com</p>
</a> -->
<div class="last">
    <div class="container-fluid last1">
        <div class="row px-5">
            <div class="col-lg-4 py-3 d-flex justify-content-center">
                <div class="footer-address india-image">
                    <img src="./images/india.png" width="100%" alt="Card Back">
                    <img src="./images/india.png" class="img-top" width="100%" alt="Card Front">
                    <hr>
                    <h6 class="mt-2 text-center" style="font-weight:600">HQ INDIA</h6>
                    <p class="px-2" style="text-align:center">#2B, Vel Nagar, 6th Cross St,<br> Maduravoyal, Chennai,<br> Tamil Nadu - 600095.</p>
                </div>
            </div>
            <div class="col-lg-4 py-3 d-flex justify-content-center px-5">
                <div class="footer-address dubai-image" style="margin-top:-35px">
                    <img src="./images/dubai.png" width="100%" alt="Card Back">
                    <img src="./images/dubai-1.png" class="dubai-img-top" width="100%" alt="Card Front">
                    <hr>
                    <h6 class="mt-2 text-center" style="font-weight:600">DUBAI</h6>
                    <p class="px-2" style="text-align:center">Office 13&14, Ground Floor,
                        Iridium Building, Umm Suqeim Road,AI Barsha1, Dubai.</p>
                </div>
            </div>
            <div class="col-lg-4 py-3 d-flex justify-content-center px-5">
                <div class="footer-address dubai-image" style="margin-top:-30px">
                    <img src="./images/canada.png" width="100%" alt="Card Back">
                    <img src="./images/canada-1.png" class="dubai-img-top" width="100%" alt="Card Front">
                    <hr>
                    <h6 class="mt-2 text-center" style="font-weight:600">CANADA</h6>
                    <p class="px-2" style="text-align:center">Calgary, Canada.</p>
                </div>
                <div class="footer-address">
                    <hr>
                </div>
            </div>

        </div>
        <hr>
        <div class="row">
              <!-- About MDQ section --> 
            <div class="col-lg-4 px-5 d-flex justify-content-center ">
                <div class="last-first">
                    <h4 class="mt-2">MDQ</h4>
                    <p style="color:#B6C7D6; text-align:justify"> MDQuality Apps Solutions is a Website Development, Web Application, Digital Marketing and Mobile
                        Application leading Company in Chennai. We are all about the web. You would like to do
                        anything with online then, we are the ones you call. </p>
                        <p>
                            GST: 33ABPFM9307G1Z2
                        </p>
                    <h4 class="mt-2">Social Networks</h4>
                    <div class="row pt-3 gy-3">
                        <div class="col-lg-12">
                            <ul class="social-media d-flex" style="list-style-type:none; margin-left:-33px">
                                
                                <li class="pe-2"><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="https://www.facebook.com/MDQuality-Apps-Solutions-101922395234820" target="_blank" class="fb"><i class="fab fa-facebook-f" style="font-size:20px"></i></a>
                                </li>
                                <li class="pe-2 mx-1"><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="https://www.linkedin.com/company/mdquality-apps-solutions/" target="_blank" class="linkedin"><i class="fa fa-linkedin" style="font-size:20px"></i></a>
                                </li>
                                <li class="pe-2 "><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="https://twitter.com/mdqualityapps" target="_blank" class="twitter"><i class="fa fa-twitter" style="font-size:20px"></i></a>
                                </li>
                                <li class="pe-2 mx-1"><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="https://www.instagram.com/mdqualityapps/" target="_blank" class="instagram"><i class="fa fa-instagram" style="font-size:20px"></i></a>
                                </li>
                                <li class="pe-2 "><a style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" href="https://www.youtube.com/@MDQualityApps" target="_blank" class="youtube"><i class="fa fa-youtube-play" style="font-size:20px"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
              <!-- Linkeidn Profile Tag 
              
              <script src="https://platform.linkedin.com/badges/js/profile.js" async defer type="text/javascript"></script>
              
              <div class="badge-base LI-profile-badge" data-locale="en_US" data-size="medium" data-theme="light" data-type="VERTICAL" data-vanity="divyalakshmipathy-android-ios-webdevelopment" data-version="v1">
              
              <a class="badge-base__link LI-simple-link" href="https://in.linkedin.com/in/divyalakshmipathy-android-ios-webdevelopment?trk=profile-badge">Divya L</a></div>
              --> 
              
            <div class="col-lg-4" style=" display: flex;  justify-content: center;">
                <div style="margin-left:30px">
                    
         <iframe src="./linkeidn.php" width="100%" height="400px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          
                </div>
              
            </div>
            
            <!-- Google maps section --> 
            
            <div class="col-lg-4 py-4">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d1284.578782734799!2d80.17467962117463!3d13.059582507596213!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52613d2014a4ab%3A0xd495655bdeb91fea!2s2B%2C%206th%20Cross%20St%2C%20Velu%20Nagar%2C%20Maduravoyal%2C%20Chennai%2C%20Tamil%20Nadu%20600095!5e0!3m2!1sen!2sin!4v1701947091680!5m2!1sen!2sin" width="100%" height="370px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
    
    
    
    <!-- Copy rights section below -->
    
    <div class="container-fluid pb-3">
        <hr>
        <div class="row">
            <div class="col-lg-4">
                <p style="color:#B6C7D6 ; text-align:center; font-weight:600; margin-bottom:0px;font-size:14px">Copyright © 2023 MDQuality
                    Apps Solutions </p>
            </div>  
             <div class="col-lg-4">
                <p style="text-align:center; margin-bottom:0px"><a class="a-tag" href="./faq.php">T&M, FAQ</a></p>
            </div>
            <div class="col-lg-4">
                <p style="text-align:center; margin-bottom:0px"><a class="a-tag" href="./privacy-policy.php">Privacy Policy</a></p>
            </div>
        </div>
        <div>
        </div>
    </div>
</div>