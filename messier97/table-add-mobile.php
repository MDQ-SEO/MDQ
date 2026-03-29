<?php include 'header.php'; ?>

<style>
    .body_color {
        background-color: #e5e8e8  !important;
    }

    .table> :not(caption)>*>* {
        background-color: #081A48 !important;
    }

    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #2d2e37 !important;
    }

    .vision_button {
        margin-left: -15px;
    }

    #fr-logo{
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
            <div class="container-fluid px-5 py-3 mx-auto">
            <div class="row py-2">
            <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-5" style="color:#1C46A8; font-weight:600">Mobile App Table</p>
                        <div class="fw-bold">
                            <a href="admin-create-portfolio.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to Upload</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <div class="wrapper">
                                <table class="table css-serial text-white" style="background-color: #111420;">
                                    <thead class=" table-dark text-nowrap text-white">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Project Name</th>
                                            <th class="text-center">Logo</th>
                                            <th class="text-center">Banner Image</th>
                                            <th class="text-center">Project Overview</th>
                                            <th class="text-center">Slider Images</th>
                                            <th class="text-center">Technology</th>
                                            <th class="text-center">Project Title</th>
                                            <th class="text-center">Edit</th>
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

                                       $sqlTable1 = mysqli_query($conn, "SELECT id FROM application_web");
                                        $resultTable1 = mysqli_fetch_array($sqlTable1);

                                        while ($rowTable1 = mysqli_fetch_array($sqlTable1)) {
                                            $table2Id = $rowTable1['id'];

                                        $sql = mysqli_query($conn, "SELECT a.id, a.cilent_id, a.logo_images, a.banner_images, a.project_overview, a.photos, a.technology, a.project_title, a.project_id, p.projectname FROM application_web a INNER JOIN project_list p ON p.id = a.cilent_id WHERE a.id = '$table2Id'");
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $client_id = $data['cilent_id'];
                                            $logo_images = $data['logo_images'];
                                            $banner_images = $data['banner_images'];
                                            $project_overview = $data['project_overview'];
                                            $photos = $data['photos'];
                                            $technology = $data['technology'];
                                            $project_title = $data['project_title'];



                                        ?>
                                        <tr id="<?php echo $data['id']; ?>" class="text-nowrap text-center">
                                            <td></td>
                                            <td><?php echo $data['projectname']; ?></td>
                                            <td><img src="../images/portfolio/<?php echo $data['logo_images']; ?>" alt="logo" width="100px" height="100px"></td>
                                            <td><img src="../images/portfolio/<?php echo $data['banner_images']; ?>" alt="logo" width="100px" height="100px"></td>
                                            <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $data['project_overview']; ?></td>
                                            <!-- <td><img src="../images/portfolio/<?php echo $data['photos']; ?>" alt="logo" width="100px" height="100px"></td> -->
<td> <?php
                                                                $photoString = $data['photos'];
                                                                $photos = explode(',', $photoString); // Split the string into an array

                                                                foreach ($photos as $photo)
                                                                    echo "<div class='col-12'>";  // Adjust the column width as needed
                                                                    echo "<img src='../images/portfolio/$photo' class='img-fluid' alt='$photo' width='100px'> ";
                                                                    echo "</div>";

                                                                ?></td>

                                            <td><?php
                                            $foreignKeysArray = explode(',', $data['technology']);
                                            // Use the foreign key IDs as needed
                                            foreach ($foreignKeysArray as $foreignKeyId) {
                                                // Retrieve data from table1 using $foreignKeyId
                                                $sqlTable2 = mysqli_query($conn, "SELECT technology FROM technology_name WHERE id = '$foreignKeyId'");
                                                $resultTable2 = mysqli_fetch_array($sqlTable2);



                                                if (mysqli_num_rows($sqlTable2) > 0) {
                                                    $rowTable1 = mysqli_fetch_assoc($sqlTable2);

                                                    // echo $rowTable1['technology'];

                                            echo $resultTable2['technology'] .','; }}?></td>

                                            <!-- <td><?php echo $data['technology']?></td> -->

                                            <td style="max-width: 200px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;"><?php echo $data['project_title']; ?></td>
                                            <td class='text-center'>
                                                <form action="edit-add-mobile.php" method='POST'>
                                                    <input class='d-none' type="text" value='<?php echo $data['id']; ?>'
                                                        name='postid'>
                                                        <div>
                                                        <button class='btn' type='submit' name='postedit'><i
                                                            class="bi bi-pen fs-6"></i></button>
                                                        </div>
                                                </form>
                                            </td>
                                            <td class='text-center'>
                                                <form action="delete-add-mobile.php" method="POST">
                                                    <input class='d-none' type="text" value='<?php echo $data['id']; ?>'
                                                        name='userid'>
                                                    <button class='btn posters' type='submit' name='postdelete'><i
                                                            class="bi bi-trash fs-6"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php } }?>
                                    </tbody>
                                </table>
                                <div class="text-center" style="background-color: #2d2e37;">
                                    <?php

                                    $pr_query = "SELECT * FROM application_web";
                                    $pr_result = mysqli_query($conn, $pr_query);
                                    $total_record = mysqli_num_rows($pr_result);

                                    $total_page = ceil($total_record / $num_per_page);

                                    if ($page > 1) {
                                        echo "<a href='home.php?page=" . ($page - 1) . "' class='btn mx-2'>Previous</a>";
                                    }


                                    for ($i = 1; $i < $total_page; $i++) {
                                        echo "<a href='home.php?page=" . $i . "' class='btn mx-1'>$i</a>";
                                    }

                                    if ($i > $page) {
                                        echo "<a href='home.php?page=" . ($page + 1) . "' class='btn mx-2'>Next</a>";
                                    }

                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>