<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/slider.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"> </script>
</head>


<body>
<div class="">
<div class="blog-slider mt-3"  style="background:linear-gradient(to right, #1C46A8, #081A48);">
  <div class="blog-slider__wrp swiper-wrapper">
  <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./images/app-development-mdq.webp" alt="app mdq development company">
      </div>
      <div class="blog-slider__content">
        <!-- <span class="blog-slider__code">26 December 2019</span> -->
        <div class="blog-slider__title">Mobile App Development</div>
        <div class="blog-slider__text">We harness the latest technologies, tools, frameworks and SDKs to develop custom mobile applications for iPhone, iPad, and Android operating systems. Our clients have won awards and mobile apps have been featured in the App Store.</div>
        <a href="./offering-mobile-app.php">
        <div class="web-button-1-div">
            <button style="border-radius: 5px;box-shadow: 0px 14px 80px rgba(28, 196, 248, 1);" class="web-button-1">READ MORE</button>
          </div>
        </a>
      </div>
    </div>

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">
        <img src="./images/web-development-mdq.webp" alt="mdq web development" style="width:100% !important">
      </div>
      <div class="blog-slider__content">
        <!-- <span class="blog-slider__code">26 December 2019</span> -->
        <div class="blog-slider__title">Web Application Development</div>
        <div class="blog-slider__text">We have built secure web application development solutions that align with business long-term strategies. Focused on a collaborative approach, our team understands customers needs to unlock value, build generation-next capabilities.</div>
        <a href="./offering-web-application.php" ">
        <div class="web-button-1-div">
            <button style="border-radius: 5px;box-shadow: 0px 14px 80px rgba(28, 196, 248, 1);" class="web-button-1">READ MORE</button>
          </div></a>
      </div>
    </div>

    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">

        <img src="./images/artificial-interligence-mdq.webp" alt="artificial mdq development">
      </div>
      <div class="blog-slider__content">
        <!-- <span class="blog-slider__code">26 December 2019</span> -->
        <div class="blog-slider__title">Artificial Intelligence</div>
        <div class="blog-slider__text">With a proficiency in Artificial Intelligence technology & Machine Learning, we help businesses build intelligent solutions by providing AI consulting, deployment, and support. We guide enterprises to use AI solutions and improve ROI.</div>
        <a href="./trending-artificial-intelligence.php">
        <div class="web-button-1-div">
            <button style="border-radius: 5px;box-shadow: 0px 14px 80px rgba(28, 196, 248, 1);" class="web-button-1">READ MORE</button>
          </div>
        </a>
      </div>
    </div>
    <div class="blog-slider__item swiper-slide">
      <div class="blog-slider__img">

        <img src="./images/vr-ar.webp" alt="virtual reality development">
      </div>
      <div class="blog-slider__content">
        <!-- <span class="blog-slider__code">26 December 2019</span> -->
        <div class="blog-slider__title">AR and VR App Development</div>
        <div class="blog-slider__text">Our team specializes in crafting AR and VR applications that transform ordinary processes into extraordinary, immersive experiences, catering to the demands of the next generation of users.</div>
        <a href="./trending-artificial-intelligence.php">
        <div class="web-button-1-div">
            <button style="border-radius: 5px;box-shadow: 0px 14px 80px rgba(28, 196, 248, 1);" class="web-button-1">READ MORE</button>
          </div>
        </a>
      </div>
    </div>


  </div>
  <div class="blog-slider__pagination"></div>
</div>
<script>
  var swiper = new Swiper('.blog-slider', {
      spaceBetween: 30,
      effect: 'fade',
      loop: true,
      mousewheel: {
        invert: false,
      },
      // autoHeight: true,
      pagination: {
        el: '.blog-slider__pagination',
        clickable: true,
      }
    });
</script>
</div>
</body>
