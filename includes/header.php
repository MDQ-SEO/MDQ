<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/js/swiper.min.js"> </script>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.0.7/css/swiper.min.css'>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js" integrity="sha512-NdZyIQYjul6RuB0vCoq9ec+xqTO2riVTZAZf9YM3BHkkcJxFTq7z9FAK3PXP+XYs5zQRuOycmL5GdwD85t2T+Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="./css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/css/swiper.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.5/js/swiper.min.js"> </script>
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>mdq</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg fixed-navbar">
    <div class="container-fluid">
      <a class="navbar-brand" href="./index.php"><img src="./images/MDQualityappssolutions.png" alt="app-development-company-chennai" width="100"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav nav_ani mx-auto">
          <li class="nav-item nav_ani_li">
            <a class="nav-link active" aria-current="page" href="company.php">Company</a>
          </li>
          <li class="nav-item nav_ani_li">
            <a class="nav-link" href="ourwork.php">Our Work</a>
          </li>
          <li class="nav-item ">
            <div class="dropdown">
              <a class="nav-link nav_ani_li dropdown nav-underline" href="">Services</a>
              <?php include './dropdown/services.php'; ?>
            </div>
          </li>
          <li class="nav-item ">
            <div class="dropdown">
              <a class="nav-link nav_ani_li dropdown nav-underline" href="">Technology</a>
              <?php include './dropdown/technology.php'; ?>
            </div>
          </li>
          <li class="nav-item nav_ani_li">
            <a class="nav-link" href="#">Hire Developers</a>
          </li>
          <li class="nav-item">
            <div class="frame">
              <button class="custom-btn btn-11">Let's Talk<div class="dot"></div></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>

</html>