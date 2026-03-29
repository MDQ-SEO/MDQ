<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto px-0">
                <?php
                $directoryURI = $_SERVER['REQUEST_URI'];
                $path = parse_url($directoryURI, PHP_URL_PATH);
                $components = explode('/messier97/', $path);
                $first_part = $components[1];
                include 'sidebar.php'; ?>
            </div>
            <div class="col table-responsive">

                <div id="post" class="tabcontent">
                    <?php
                    if (isset($_POST['postedit'])) {
                        $postid = $_POST['postid'];
                        //echo $user_id;
                        $stmt =  $conn->prepare("SELECT p.id, p.projectname, p.aboutproject, p.image, p.sec_image, p.type_project, w.projecttype FROM project_list p INNER JOIN web_application w ON w.id = p.type_project WHERE p.id = ?");
                        $stmt->bind_param("i", $postid); // 'i' means integer

                        // Execute and get result
                        $stmt->execute();
                        $result = $stmt->get_result();
                        while ($users = $result->fetch_assoc()) {
                    ?>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <div class="d-flex pt-2 align-items-center justify-content-between">
                                    <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600"> Project List Edit
                                    </p>
                                    <div class="fw-bold">
                                        <a href="table-project-list.php" class="nav-link align-middle px-0">
                                            <button class="btn" type="submit" name="switch"><img width="30" height="30"
                                                    src="https://img.icons8.com/ios-glyphs/200/ffffff/multiply.png"
                                                    alt="multiply" /></button>
                                        </a>
                                    </div>
                                </div>
                                <form action='edit-project-list-backend.php' method='post'
                                    enctype="multipart/form-data">
                                    <div style='border-radius:1rem' class="card shadow px-3 py-3">
                                        <div class="row gy-3">
                                            <div class="col-lg-2">
                                                <div class="py-1">
                                                    <label for="gallery" class="form-label">Project Image :</label>
                                                    <div class="row">
                                                        <?php
                                                                $image = $users['image']; {
                                                                    echo "<div>";
                                                                    echo "<img src='../images/portfolio/$image' class='img-fluid' alt='$image'>";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="py-1">
                                                        <label for="image" class="form-label">Update Image</label>
                                                        <!-- Display current image value -->
                                                        <input class="form-control" type="text"
                                                            value="<?php echo $users['image']; ?>" readonly>
                                                        <input class="form-control" type="file" name="image"
                                                            id="imageInput">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="py-1">
                                                    <label for="gallery" class="form-label">Second Image :</label>
                                                    <div class="row">
                                                        <?php
                                                                $sec_image = $users['sec_image']; {
                                                                    echo "<div>";
                                                                    echo "<img src='../images/portfolio/$sec_image' class='img-fluid' alt='$sec_image' width='100px'> ";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="py-1">
                                                        <label for="image" class="form-label">Update Image</label>
                                                        <input class="form-control" type="text"
                                                            value="<?php echo $users['sec_image']; ?>" readonly>
                                                        <input class="form-control" type="file" name="sec_image"
                                                            id="secImageInput">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="py-1">
                                                    <input type="text" class='d-none'
                                                        value='<?php echo $users['id']; ?>' name='id'>
                                                    <label for="name" class="form-label">Project Name :</label>
                                                    <input type="text" name='projectname'
                                                        value='<?php echo $users['projectname']; ?>'
                                                        class="form-control" id="imgname" placeholder="Enter the name">

                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="py-1">
                                                    <label for="name" class="form-label">About Project :</label>
                                                    <input type="text" name='aboutproject'
                                                        value='<?php echo $users['aboutproject']; ?>'
                                                        class="form-control" id="imgname" placeholder="Enter the name">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="py-1">
                                                    <label for="name" class="form-label">Project Type :</label>
                                                    <select class="py-2 mb-3" style="width:100%" name="type_project">
                                                        <?php
                                                                $multiplesearch = mysqli_query($conn, "SELECT id, projecttype FROM web_application");

                                                                while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                                    $cilent_id = $multiicon['id'];
                                                                    $project_name = $multiicon['projecttype'];

                                                                    // Check if this option should be selected based on some condition        1 == Web
                                                                    $selected = ($cilent_id == $users['type_project']) ? 'selected' : '';

                                                                    echo "<option value='$cilent_id' $selected>$project_name</option>";
                                                                }

                                                                echo "Default Value: " . $users['projecttype'];
                                                                ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class='text-center pt-2'>
                                            <button type="submit" name='edit-post' style="width:100%"
                                                class='btn '>Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>