<?php
session_start();
if (!$_SESSION['email']) {
    echo '<script language="javascript">
    window.location = "index.php";
    </script>';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta http-equiv="refresh" content="900;url=logout.php" /> -->
    <link rel="shortcut icon" sizes="100x100" href="favicon.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="sidebar.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="sidebar.css">
    <title>Admin</title>
    <style>
        .nav_list a{
            color: #1CC4F8;
            font-weight: 600;
        }
        .nav_list>a:hover {
           color: white;
        }

        /*code to change background color*/
        nav.nav>.nav_list>a.active {

            color: white;
        }

        .btn:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .brandcolor {
            background-image: -webkit-linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            background-image: -moz-linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            background-image: -ms-linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            background-image: -o-linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            background-image: linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            -webkit-background-clip: text;
            -moz-background-clip: text;
            -ms-background-clip: text;
            -o-background-clip: text;
            background-clip: text;
            color: transparent;
            background: -webkit-linear-gradient(60deg, #FC6703, #F12651, #ED0A76);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .bigger-icon {
  font-size: 20px;
}
    </style>
</head>

<body id="body-pd">
    <header class="header" id="header" style="background-color: #081A48;">
        <div class="header_toggle" style="color: #1CC4F8;"> <i class='bx bx-menu' id="header-toggle"></i></div>
        <a href="./home.php" class="nav_logo my-3 text-white">MDQ<img src="../images/mdq-white-logo.png" alt="" class="img-fluid headr" width="100" /></a>
        <!-- <p class="my-3 fs-2 mt-3" style="color:#FE5D37"><span></span></p> -->
        <div class="header_toggle">
            <div type="button" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Exit">
                <a href="logout.php"><i class='bx bx-log-out nav_icon my-auto mnd' style="color:#1CC4F8"></i></a>
            </div>
        </div>
    </header>
    <div class="l-navbar" id="nav-bar" style="background-color: #1C46A8;">
        <nav class="nav">
        <div class="nav_list">
            <a href="home.php" class="nav_link <?php if ($first_part == "home.php" || $first_part == "table-carousel.php" || $first_part == "edit-carousel.php") { echo "active"; } else { echo "noactive"; } ?>"> <i class='bx bxs-home nav_icon'></i><span class="nav_name">Carousel</span> </a>

            <a href="admin-testimonials.php" class="nav_link <?php if ($first_part == "admin-testimonials.php" || $first_part == "table-testimonials.php" || $first_part == "edit-testimonials.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="bx bxs-quote-alt-left bigger-icon"></i><span class="nav_name">Testimonials</span> </a>

            <a href="admin-create-blog.php" class="nav_link <?php if ($first_part == "admin-create-blog.php" || $first_part == "table-blog.php" || $first_part == "edit-blog.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-book" style="margin-left: 3px;"></i> <span class="nav_name"> &nbsp;Blog</span></a>

            <a href="admin-contactus.php" class="nav_link <?php if ($first_part == "admin-contactus.php") { echo "active"; } else { echo "noactive"; } ?>"> <i class='bx bi-person-fill nav_icon'></i> <span class="nav_name">Contact</span> </a>


<a href="admin-addform.php" class="nav_link <?php if ($first_part == "admin-addform.php") { echo "active"; } else { echo "noactive"; } ?>"> <i class='bx bi-person-fill nav_icon'></i> <span class="nav_name">Add Response</span> </a>

            <a href="table-offer-letter.php" class="nav_link <?php if ($first_part == "table-offer-letter.php") { echo "active"; } else { echo "noactive"; } ?>"><i class='bx bxs-pencil nav_icon'></i> <span class="nav_name"> Offer Letter</span></a>

            <a href="admin-create-portfolio.php" class="nav_link <?php if ($first_part == "admin-create-portfolio.php" || $first_part == "table-add-mobile.php" || $first_part == "edit-add-mobile.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-briefcase" style="margin-left:3px"></i><span class="nav_name"> Portfolio</span> </a>

            <a href="admin-project-list.php" class="nav_link <?php if ($first_part == "admin-project-list.php" || $first_part == "table-project-list.php" || $first_part == "edit-project-list.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-tasks" style="margin-left: 3px;"></i><span class="nav_name"> Project List</span> </a>

            <a href="admin-technology.php" class="nav_link <?php if ($first_part == "admin-technology.php" || $first_part == "table-technology.php" || $first_part == "edit-technology.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-code" style="margin-left: 1px;"></i><span class="nav_name"> Technology</span> </a>

            <a href="admin-add-position.php" class="nav_link <?php if ($first_part == "admin-add-position.php" || $first_part == "admin-add-description.php" || $first_part == "admin-add-requirement.php" || $first_part == "table-position.php" || $first_part == "table-description.php" || $first_part == "table-requirement.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-plus-circle" style="margin-left: 2px;"></i>
            <span class="nav_name"> Add Hire Details</span> </a>

            <a href="admin-hire-form.php" class="nav_link <?php if ($first_part == "admin-hire-form.php" || $first_part == "table-technology.php" || $first_part == "edit-technology.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-file-alt" style="margin-left: 4px;"></i>
            <span class="nav_name"> Hiring Form</span> </a>

            <a href="table-career-hire-form.php" class="nav_link <?php if ($first_part == "admin-technology.php" || $first_part == "table-technology.php" || $first_part == "edit-technology.php") { echo "active"; } else { echo "noactive"; } ?>"><i class="fas fa-clipboard" style="margin-left: 4px;"></i>
            <span class="nav_name"> Career</span> </a>
        </div>

        </nav>

        <script>
            $(document).ready(function() {

                $('nav.nav > nav_list > a ')
                    .click(function(e) {
                        $('nav.nav > nav_list > a')
                            .removeClass('active');
                        $(this).addClass('active');
                    });
            });
        </script>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chartjs-adapter-date-fns/dist/chartjs-adapter-date-fns.bundle.min.js"></script>

</html>