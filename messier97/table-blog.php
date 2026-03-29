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
            <div class="container-fluid px-5 py-2 mx-auto">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="d-flex align-items-center justify-content-between">
                            <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600"> Blog Table</p>
                            <div class="fw-bold">
                                <a href="admin-create-blog.php" class="nav-link align-middle px-0">
                                    <button class="btn" type="submit" name="switch">Switch to Upload</button>
                                </a>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <div class="wrapper">
                                <table class="table css-serial text-white" style="background-color: #111420;">
                                    <thead class=" table-dark text-nowrap text-white">
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Title</th>
                                            <th class="text-center">Content</th>
                                            <th class="text-center">Image</th>
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

                                        $sql = mysqli_query($conn, "SELECT * FROM blog");
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $title = $data['title'];
                                            $content = $data['content'];
                                            $image = $data['image'];
                                        ?>
                                            <tr id="<?php echo $data['id']; ?>" class="text-nowrap text-center">
                                                <td></td>
                                                <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <?php echo $data['title']; ?>
                                                </td>
                                                <td style="max-width: 300px; overflow: hidden; text-overflow: ellipsis; white-space: nowrap;">
                                                    <?php echo $data['content']; ?>
                                                </td>

                                                <td><img src="../images/blog/<?php echo $data['image']; ?>" alt="logo" width="100px" height="100px"></td>
                                                <td class='text-center'>
                                                    <form action="edit-blog.php" method='POST'>
                                                        <input class='d-none' type="text" value='<?php echo $data['id']; ?>' name='postid'>
                                                        <div>
                                                            <button style="background-color: #007BFF !important;" class='btn' type='submit' name='postedit'><i class="bi bi-pen fs-6"></i></button>
                                                        </div>
                                                    </form>
                                                </td>
                                                <td class='text-center'>
                                                    <form action="delete-blog.php" method="POST">
                                                        <input class='d-none' type="text" value='<?php echo $data['id']; ?>' name='userid'>
                                                        <button style="background-color: #007BFF !important;" class='btn posters' type='submit' name='postdelete'><i class="bi bi-trash fs-6"></i></button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                <div class="text-center" style="background-color: #2d2e37;">
                                    <?php

                                    $pr_query = "SELECT * FROM blog";
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