<?php
include 'header.php';
include 'connect.php';
?>

<style>
    .body_color {
        background-color: #e5e8e8 !important;
    }

    .table> :not(caption)>*>* {
        background-color: #081A48 !important;
        text-align: left;
    }

    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #2d2e37 !important;
    }

    .vision_button {
        margin-left: -15px;
    }

    #fr-logo {
        display: none;
    }
</style>

<body class="body_color">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-auto px-0">
                <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/messier97/', $path);
                $first_part = $components[1];
                include 'sidebar.php'; ?>
            </div>
            <div class="container-fluid px-5 py-5 mx-auto">
                <div class="row">
                    <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600">Career Form</p>
                </div>
                <div class="row py-2">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <div class="wrapper">
                                <table class="table css-serial text-white" style="background-color: #111420;">
                                    <thead class="table-dark text-nowrap text-white">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Phone</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">LinkedIn</th>
                                            <th class="text-center">Discovery</th>
                                            <th class="text-center">Resume</th>
                                            <th class="text-center">Message</th>
                                            <th class="text-center">Date & Time</th>
                                            <th class="text-center">Delete</th>
                                        </tr>
                                    </thead>

                                    <tbody id="post_search">
                                        <?php
                                        $num_per_page = 20;

                                        if (isset($_GET["page"])) {
                                            $page = $_GET["page"];
                                        } else {
                                            $page = 1;
                                        }

                                        $start_from = ($page - 1) * 20;

                                        $sql = mysqli_query($conn, "SELECT * FROM hire_form LIMIT $start_from, $num_per_page");
                                        while ($data = mysqli_fetch_array($sql)) {
                                        ?>
                                            <tr id="<?php echo $data['id']; ?>" class="text-nowrap text-center">
                                                <td><?php echo $data['id']; ?></td>
                                                <td><?php echo $data['position']; ?></td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['phone']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['linkedin']; ?></td>
                                                <td><?php echo $data['choosen']; ?></td>
                                                <td>
                                                    <?php
                                                    $file = './resume/' . $data['image'];
                                                    $extension = pathinfo($file, PATHINFO_EXTENSION);

                                                    if (in_array($extension, array("jpg", "jpeg", "png", "webp"))) {
                                                        echo '<div>';
                                                        echo '<img src="' . $file . '" alt="img" width="50px" height="50px">';
                                                        echo '<a href="' . $file . '" download>&nbsp; &nbsp;<img width="25" height="25" src="https://img.icons8.com/material-rounded/96/ffffff/download--v1.png" alt="download--v1"/></a>';
                                                        echo '</div>';
                                                    } elseif ($extension === "pdf") {
                                                        echo '<a href="' . $file . '" download>Download PDF</a>';
                                                    } else {
                                                        echo 'File type not supported';
                                                    }
                                                    ?>
                                                </td>
                                                <td style="width:50px; white-space:normal;"><?php echo $data['message']; ?></td>
                                                <td><?php echo $data['created_at']; ?></td>
                                                <td class='text-center'>
                                                    <form action="delete-career-hire-form.php" method="POST">
                                                        <input class='d-none' type="text" value='<?php echo $data['id']; ?>' name='userid'>
                                                        <button style="background-color:#2857AA !important" class='btn posters' type='submit' name='postdelete'><i class="bi bi-trash fs-6"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <!-- <div class="text-center" style="background-color: #2d2e37;">
                                    <?php
                                    $pr_query = "SELECT * FROM hire_form";
                                    $pr_result = mysqli_query($conn, $pr_query);
                                    $total_record = mysqli_num_rows($pr_result);

                                    $total_page = ceil($total_record / $num_per_page);
                                    if ($page > 1) {
                                        echo "<a href='vision.php?page=" . ($page - 1) . "' class='btn mx-2'>Previous</a>";
                                    }

                                    for ($i = 1; $i <= $total_page; $i++) {
                                        echo "<a href='vision.php?page=" . $i . "' class='btn mx-1'>$i</a>";
                                    }

                                    if ($i > $page) {
                                        echo "<a href='vision.php?page=" . ($page + 1) . "' class='btn mx-2'>Next</a>";
                                    }
                                    ?>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>
