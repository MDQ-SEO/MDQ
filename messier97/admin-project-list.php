<?php include 'header.php'; ?>

<style>
    .body_color {
        background-color: #e5e8e8  !important;
    }

    .table> :not(caption)>*>* {
        background-color: #111420 !important;
    }

    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #2d2e37 !important;
    }

    .vision_button {
        margin-left: -15px;
    }

    #edit .fr-box {
        height: 500px;
        /* Set the desired height */
        border-radius: 0;
        /* Set border radius to 0 */
        border: 1px solid #ccc;
        /* Optional: Add border for visualization */
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
            <div class="container-fluid px-5 py-4 mx-auto">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-between">
                    <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600"> Project List</p>
                        <div class="fw-bold">
                            <a href="table-project-list.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to table</button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-2 marq" style="border-radius:1rem;width:100%; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="upload-project-list.php" enctype="multipart/form-data">
                                            <label for="">Project Name</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" cols="30" rows="1" name="projectname" placeholder="" required />
                                            <label class="mt-3" for="">About Project</label><br>
                                            <input type="text" class="form-control about_input py-2" id="text" cols="30" rows="1" name="aboutproject" placeholder="" required />
                                            <div class="row my-3">
                                                <div class="col-lg-6">
                                            <label  for="">Project Image</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" cols="30" rows="1" name="image" placeholder="" required />
                                                </div>
                                            <div class="col-lg-6">
                                            <label for="">Second Image</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" cols="30" rows="1" name="sec_image" placeholder="" required />
                                            </div>
                                            </div>
                                            <label for="">Project Type</label><br>
                                            <select class="py-2 mb-3" style="width:100%" name="type_project">
                                                    <?php
                                                    $multiplesearch = mysqli_query($conn, "SELECT id, projecttype FROM web_application");
                                                    while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                        $cilent_id = $multiicon['id'];
                                                        $project_name = $multiicon['projecttype'];
                                                    ?>
                                                        <option value="<?php echo $cilent_id; ?>"><?php echo $project_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            <span class="d-flex justify-content-end">
                                    <button class="btn" style="width:100%; margin-left:-15px !important" type="submit" name="upload">Add</button>
                                </span>

                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>