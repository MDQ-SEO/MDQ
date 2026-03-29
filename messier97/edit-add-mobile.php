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
    <style>
    .close-icon {
        background-color: #1C46A8;
        border: none;
        border-radius: 2px;
        width: 25px;
    }
    </style>
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
                        $postid = trim($_POST['postid']);
                        //echo $user_id;
                        // $result = mysqli_query($conn, "SELECT * FROM application_web WHERE id = '$postid'");
                        // while ($users = mysqli_fetch_array($result)) {
                            $stmt = $conn->prepare("SELECT p.id, p.cilent_id, p.logo_images, p.banner_images, p.project_overview, p.photos, p.technology, p.project_title, p.project_id FROM application_web p INNER JOIN project_list w ON w.id = p.cilent_id WHERE p.id = ?");
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
                                        <a href="table-add-mobile.php" class="nav-link align-middle px-0">
                                            <button class="btn" type="submit" name="switch"><img width="30" height="30"
                                                    src="https://img.icons8.com/ios-glyphs/200/ffffff/multiply.png"
                                                    alt="multiply" /></button>
                                        </a>
                                    </div>
                                </div>
                                <form action='edit-add-mobile-backend.php' method='post' enctype="multipart/form-data">
                                    <div style='border-radius:1rem' class="card shadow px-3 py-3">
                                        <div class="row gy-3">
                                            <div class="col-lg-12">
                                                <label>Select Project Name:</label>
                                                <br><select class="py-3" style="width:100%" name='cilent_id'>
                                                    <?php
                                                            $multiplesearch = mysqli_query($conn, "SELECT id, projectname FROM project_list");

                                                            while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                                $cilent_id = $multiicon['id'];
                                                                $project_name = $multiicon['projectname'];
                                                                $selected = ($cilent_id == $users['cilent_id']) ? 'selected' : '';

                                                                echo "<option value='$cilent_id' $selected>$project_name</option>";
                                                            }

                                                            echo "Default Value: " . $users['projectname'];
                                                            ?>
                                                </select>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="py-1">
                                                    <label for="gallery" class="form-label">Logo :</label>
                                                    <div class="row">
                                                        <?php
                                                                $logo_images = $users['logo_images']; {
                                                                    echo "<div>";
                                                                    echo "<img src='../images/portfolio/$logo_images' class='img-fluid' alt='$logo_images'>";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="py-1">
                                                        <label for="image" class="form-label">Update Logo Image</label>
                                                        <input class="form-control" type="file" name="logo_images"
                                                            value="<?php echo $users['logo_images']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2">
                                                <div class="py-1">
                                                    <label for="gallery" class="form-label">Banner Image :</label>
                                                    <div class="row">
                                                        <?php
                                                                $banner_images = $users['banner_images']; {
                                                                    echo "<div>";
                                                                    echo "<img src='../images/portfolio/$banner_images' class='img-fluid' alt='$banner_images'>";
                                                                    echo "</div>";
                                                                }
                                                                ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 d-flex">
                                                <div class="d-flex align-items-center">
                                                    <div class="py-1">
                                                        <label for="image" class="form-label">Update Banner
                                                            Image</label>
                                                        <input class="form-control" type="file" name="banner_images"
                                                            value="<?php echo $users['banner_images']; ?>">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="py-1">
                                                <hr>
                                                <label for="gallery" class="form-label">Slider Images :</label>
                                                <div class="row d-flex justify-content-center">
                                                    <div class="row " id="imageContainer">
                                                        <?php
$photoString = $users['photos'];
$photos = explode(',', $photoString);

foreach ($photos as $index => $photo) {
    $photo = trim($photo);
    if (!empty($photo)) {
        echo "<div style='width:160px; height:170px; border:1px solid black; border-radius:3px; margin-right:10px; margin-top:10px' class='col-lg-2 d-flex justify-content-center align-items-center position-relative' id='imageDiv'>";
        echo "<div><img src='../images/portfolio/$photo' class='img-fluid' alt='$photo' width='90px'>";
        echo "<button style='color:white; font-weight:500' type='button' class='close-icon position-absolute top-0 end-0' onclick='removeImage(this, $index)'>x</button></div>";
        echo "</div>";
    }
}
?>

                                                        <script>
                                                        function removeImage(button, index) {
                                                            var imageDiv = button.closest('#imageDiv');
                                                            imageDiv.remove();

                                                            // Update the value of the hidden input field and the file input after removing the image
                                                            updateHiddenInput();
                                                        }

                                                        function updateHiddenInput() {
                                                            var images = document.querySelectorAll('#imageDiv img');
                                                            var photoArray = [];

                                                            images.forEach(function(image) {
                                                                var fileName = image.alt;
                                                                photoArray.push(fileName);
                                                            });

                                                            var hiddenInput = document.getElementById('hiddenPhotos');
                                                            hiddenInput.value = photoArray.join(',');
                                                        }
                                                        </script>

                                                        <div class="col-lg-4 d-flex">
                                                            <div class="d-flex align-items-center">
                                                                <div class="py-1">
                                                                    <label for="files" class="form-label">Update Slider
                                                                        Image</label>
                                                                    <input type="file" class="form-control text-clr"
                                                                        id="files" multiple="multiple" name="photos[]"
                                                                        accept="image/*" />
                                                                    <!-- Hidden input field to store the image filenames -->
                                                                    <input type="hidden" id="hiddenPhotos"
                                                                        name="hiddenPhotos"
                                                                        value="<?php echo $users['photos']; ?>" />
                                                                    <!-- Display image names in a list -->
                                                                    <ul id="imageList"></ul>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="my-1">
                                                            <hr>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="py-1">
                                                                <input type="text" class='d-none'
                                                                    value='<?php echo $users['id']; ?>' name='id'>
                                                                <label for="name" class="form-label">Project Overview
                                                                    :</label>
                                                                <input type="text" name='project_overview'
                                                                    value='<?php echo $users['project_overview']; ?>'
                                                                    class="form-control" id="imgname"
                                                                    placeholder="Enter the name">

                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <label>Select technology:</label>
                                                            <select style="width: 100%;" name='technology[]'
                                                                class="multiple-select one py-2"
                                                                data-placeholder="Select" multiple
                                                                data-actions-box="true" size="3">
                                                                <?php
                                                            $multiplesearch = mysqli_query($conn, "SELECT `id`, `technology` FROM `technology_name`");
                                                            while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                                $technologyname = $multiicon['technology'];
                                                                $id = $multiicon['id'];
                                                            ?>
                                                                <option value="<?php echo $id; ?>">
                                                                    <?php echo $technologyname; ?></option>
                                                                <?php
                                                            } ?>
                                                            </select>
                                                        </div>
                                                        <div class="col-lg-12">
                                                            <div class="py-1">
                                                                <label for="name" class="form-label"> Project Title
                                                                    :</label>
                                                                <input type="text" name='project_title'
                                                                    value='<?php echo $users['project_title']; ?>'
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