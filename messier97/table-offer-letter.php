<?php include 'header.php'; ?>

<style>
    .body_color {
        background-color: #e5e8e8 !important;
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
            <div class="container-fluid px-5 py-3 mx-auto">
                <div class="row py-2">
                    <div class="col-lg-12">
                    <p class="fs-4" style="color:#1C46A8; font-weight:600">Offer Letter</p>
                        <div class="table-responsive">
                            <div class="wrapper">
                                <table class="table css-serial text-white" style="background-color: #111420;">
                                    <thead class=" table-dark text-nowrap text-white">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Name</th>
                                            <th class="text-center">Email</th>
                                            <th class="text-center">Contact No</th>
                                            <th class="text-center">Location</th>
                                            <th class="text-center">Position</th>
                                            <th class="text-center">College Name</th>
                                            <th class="text-center">Branch</th>
                                            <th class="text-center">Old Office</th>
                                            <th class="text-center">Experience</th>
                                            <th class="text-center">Resume</th>
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

                                        $sql = mysqli_query($conn, "SELECT * FROM careers");
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $name = $data['name'];
                                            $email = $data['email'];
                                            $mobile = $data['mobile'];
                                            $location = $data['location'];
                                            $position = $data['position'];
                                            $collname = $data['collname'];
                                            $branch = $data['branch'];
                                            $oldoffice = $data['old_office'];
                                            $experience = $data['experience'];
                                            $dp = $data['dp'];
                                            $cv = $data['cv'];
                                        ?>
                                            <tr id="<?php echo $data['id']; ?>" class="text-nowrap text-center">
                                                <td></td>
                                                <td><?php echo $data['name']; ?></td>
                                                <td><?php echo $data['email']; ?></td>
                                                <td><?php echo $data['mobile']; ?></td>
                                                <td><?php echo $data['location']; ?></td>
                                                <td><?php echo $data['position']; ?></td>
                                                <td><?php echo $data['collname']; ?></td>
                                                <td><?php echo $data['branch']; ?></td>
                                                <td><?php echo $data['old_office']; ?></td>
                                                <td><?php echo $data['experience']; ?></td>
                                                <!-- <td><a href="<?php echo "photo/" . $data['dp']; ?>" target="_blank">dp</a></td> -->
                                                <td><a href="<?php echo "resume/" . $data['cv']; ?>" target="_blank">open</a></td>

                                                <td class='text-center'>
                                                    <form action="delete-offer-letter.php" method="POST">
                                                        <input class='d-none' type="text" value='<?php echo $data['id']; ?>' name='userid'>
                                                        <button class='btn posters' type='submit' name='postdelete'><i class="bi bi-trash fs-6"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="text-center" style="background-color: #2d2e37;">
                                    <?php

                                    $pr_query = "SELECT * FROM contact";
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