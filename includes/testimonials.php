<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        .heading {
            position: relative;
        }

        .testimonials {
            background: url("./images/testimonial.png") center center no-repeat;
            background-size: cover;
            width: 100%;
            background-attachment: fixed;
            padding: 130px 0 150px;
            color: #000000;
            position: relative;
        }

        .testimonials:before {
            content: "";
            background: rgba(0, 0, 0, 0.1);
            width: 100%;
            height: 100%;
            top: 0;
            position: absolute;
            left: 0;
        }

        .testimonials .heading h2 {
            font-size: 25px;
            font-weight: 700;
            color: #000000;
        }

        .testimonials .heading h2 span {
            color: #1C46A8;
        }

        .testimonials p {
            font-size: 15px;
            font-weight: 400;
            line-height: 1.7;
            color: #d1e5e7;
            margin: 20px 0;
            padding: 0;
        }

        /* Image */
        .testimonials .carousel-inner .carousel-item .team {
            width: 100px;
            height: 100px;
            border: 2px solid #1C46A8;
            border-radius: 100%;
            padding: 5px;
            margin: 50px 0 15px;
        }

        .testimonials .carousel-inner .carousel-item h3 {
            font-size: 20px;
            color: #000000;
            font-weight: 600;
        }

        .testimonials .carousel-inner .carousel-item h4 {
            font-size: 14px;
            font-weight: 300;
            color: #e2e1e1;
            margin-bottom: 20px;
        }

        .testimonials .carousel-indicators {
            bottom: -30px;
        }

        .testimonials .carousel-indicators li {
            background-color: #b8b7b7;
            border-radius: 30px;
            height: 4px;
            width: 40px;
        }

        .testimonials .carousel-indicators .active {
            background-color: #1C46A8;
        }

        .testimonials .control span {
            cursor: pointer;
        }

        .testimonials .icon {
            height: 40px;
            width: 40px;
            background-size: 100%, 100%;
            border-radius: 50%;
            font-size: 30px;
            background-image: none;
            color: #000000;
        }
    </style>
</head>

<body>
    <section class="testimonials">
        <div class="heading text-center">
            <h2>What's
                <span>Clients</span>
                Says?
            </h2>

        </div>
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <?php
                        $countQuery = mysqli_query($conn, "SELECT COUNT(id) as total FROM testimonials");
                        $countData = mysqli_fetch_assoc($countQuery);
                        $num = $countData['total'];
                        ?>
                        <ol class="carousel-indicators">
                            <?php
                            for ($i = 0; $i < $num; $i++) {
                            ?>


                                <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $i; ?>" <?php echo $i === 0 ? 'class="active"' : ''; ?> aria-current="<?php echo $i === 0 ? 'true' : 'false'; ?>" class="active"></li>
                            <?php
                            }
                            ?>
                        </ol>

                        <div class="carousel-inner">
                            <?php
                            $sql = mysqli_query($conn, "SELECT * FROM testimonials ORDER BY created_at DESC;");
                            $active = true;

                            while ($data = mysqli_fetch_array($sql)) {
                            ?>
                                <div class="carousel-item text-center <?php echo $active ? 'active' : ''; ?>" data-bs-interval="4000">
                                    <img src="images/testimonials/<?php echo $data['image']; ?>" width="100%" alt="app development" class="center-block team">
                                    <h3><?php echo $data['name']; ?></h3>
                                    <h4 style="color:#000000"><?php echo $data['clientfrom']; ?></h4>
                                    <p style="color:#000000; padding-left:25%; padding-right:25%"><?php echo $data['feedback']; ?></p>
                                </div>
                            <?php
                                $active = false;
                            }
                            ?>

                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>