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
                        $stmt = $conn->prepare("SELECT * FROM technology_name WHERE id = ?");
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
                                    <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600"> Technology Edit
                                    </p>
                                    <div class="fw-bold">
                                        <a href="table-technology.php" class="nav-link align-middle px-0">
                                            <button class="btn" type="submit" name="switch"><img width="30" height="30"
                                                    src="https://img.icons8.com/ios-glyphs/200/ffffff/multiply.png"
                                                    alt="multiply" /></button>
                                        </a>
                                    </div>
                                </div>
                                <form action='edit-technology-backend.php' method='post' enctype="multipart/form-data">
                                    <div class="d-flex justify-content-center">
                                        <div style='border-radius:1rem; width:500px' class="card shadow px-3 mb-4 py-3">
                                            <div class="row gy-3">
                                                <div class="col-lg-3">
                                                    <div class="py-1">
                                                        <label for="gallery" class="form-label">Selected Image :</label>
                                                        <div class="row">
                                                            <?php
                                                                $technology_images = $users['technology_images']; {
                                                                    echo "<div>";
                                                                    echo "<img src='../images/portfolio/$technology_images' class='img-fluid' alt='$technology_images'>";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-9 d-flex">
                                                    <div class="d-flex align-items-center">
                                                        <div class="py-1">
                                                            <label for="image" class="form-label">Update Image</label>
                                                            <input class="form-control" type="file"
                                                                name="technology_images"
                                                                value="<?php echo $users['technology_images']; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="py-1">
                                                        <input type="text" class='d-none'
                                                            value='<?php echo $users['id']; ?>' name='id'>
                                                        <label for="name" class="form-label">Technology Name :</label>
                                                        <input type="text" name='technology'
                                                            value='<?php echo $users['technology']; ?>'
                                                            class="form-control" id="imgname"
                                                            placeholder="Enter the name">
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