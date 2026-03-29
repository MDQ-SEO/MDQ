<?php include 'header.php'; ?>

<style>
    .col-height {
        height: 80px;
    }

    .body_color {
        background-color: #e5e8e8 !important;
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
            <div class="container-fluid px-5 pt-1 pb-3 mx-auto">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600">Create Portfolio - App</p>
                        <div class="fw-bold">
                            <a href="table-add-mobile.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to table</button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq" style="border-radius:10px; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="upload-add-mobille.php" enctype="multipart/form-data">
                                    <div class="row my-2">
                                        <div class="col-lg-6 col-height">
                                            <div class="">
                                                <label>Select Project Name:</label>
                                                <br><select class="py-3" style="width:100%" name='cilent_id'>
                                                    <?php
                                                    $multiplesearch = mysqli_query($conn, "SELECT id, projectname, aboutproject,image FROM project_list WHERE type_project=2");
                                                    while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                        $cilent_id = $multiicon['id'];
                                                        $project_name = $multiicon['projectname'];
                                                    ?>
                                                        <option value="<?php echo $cilent_id; ?>"><?php echo $project_name; ?></option>
                                                    <?php
                                                    } ?>
                                                </select>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-height">

                                            <label for="files">Project Title:</label>
                                            <textarea class="form-control" id="text" cols="0" rows="1" name='project_title' placeholder="Say something about this project..."></textarea>
                                        </div>

                                        <div class="col-lg-6 col-height ">
                                            <label for="">Project Logo</label><br>
                                            <input type="file" class="form-control py-2" id="text" rows="1" name="projectimages" placeholder="" required /><br>
                                        </div>

                                        <div class="col-lg-6 col-height ">
                                            <label for="files">Banner Images</label><br>
                                            <input type="file" class="form-control" id="files" multiple="multiple" name="bannerimages" />
                                            <output id="result"></output>
                                        </div>
                                        <div class="col-lg-6 col-height">
                                            <label for="files">Select Multiple Slider Images</label><br>
                                            <input type="file" class="form-control text-clr" id="files" multiple="multiple" name="photos[]" accept="image/*" />
                                            <output id="result"></output>
                                        </div>
                                        <div class="col-lg-12 col-height mt-2">
                                            <label>Select technology:</label>
                                            <select style="width: 100%;" name='technology[]' class="multiple-select one py-2" data-placeholder="Select" multiple data-actions-box="true" size="3">
                                                <?php
                                                $multiplesearch = mysqli_query($conn, "SELECT `id`, `technology` FROM `technology_name`");
                                                while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                    $technologyname = $multiicon['technology'];
                                                    $id = $multiicon['id'];
                                                ?>
                                                    <option value="<?php echo $id; ?>"><?php echo $technologyname; ?></option>
                                                <?php
                                                } ?>
                                            </select>

                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <label>Project_Overview:</label>
                                            <textarea class="form-control" id="text" cols="40" rows="2" name='project_overviews' placeholder="Say something about this project..."></textarea>
                                        </div>
                                    </div>
                                    <span class="d-flex justify-content-end">
                                        <button class="btn" style="width:100%; margin-left:-15px !important" type="submit" name="upload">Add</button>
                                    </span>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div class="d-flex pt-5 align-items-center justify-content-between">
                        <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600">Create Portfolio - Web</p>
                        <div class="fw-bold">
                            <a href="table-add-web.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to table</button>
                            </a>
                        </div>
                    </div>


                    <div class="d-flex  align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq" style="border-radius:10px; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="upload-add-web.php" enctype="multipart/form-data">
                                    <div class="row my-2">
                                        <div class="col-lg-6 col-height">
                                            <div class="">
                                                <label>Select Project Name:</label>
                                                <br><select class="py-3" style="width:100%" name='cilent_id'>
                                                    <?php
                                                    $multiplesearch = mysqli_query($conn, "SELECT id, projectname, aboutproject,image FROM project_list WHERE type_project=1");
                                                    while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                        $cilent_id = $multiicon['id'];
                                                        $project_name = $multiicon['projectname'];

                                                    ?>

                                                        <option value="<?php echo $cilent_id; ?>"><?php echo $project_name; ?></option>
                                                    <?php

                                                    } ?>
                                                </select>
                                            </div>
                                            <div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-height">

                                            <label for="files">Project Title:</label>
                                            <textarea class="form-control" id="text" cols="0" rows="1" name='webproject_title' placeholder="Say something about this project..."></textarea>
                                        </div>
                                        <div class="col-lg-6 col-height">
                                            <label for="">Project Logo</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" rows="0" name="weblogo_images" placeholder="" required /><br>
                                        </div>
                                        <div class="col-lg-6 col-height">
                                            <label for="files">Banner Images</label><br>
                                            <input type="file" class="form-control text-clr" id="files" multiple="multiple" name="webbannerimages" />
                                            <output id="result"></output>
                                        </div>
                                        <div class="col-lg-6 col-height">
                                            <label for="files">Select Multiple Slider Images</label><br>
                                            <input type="file" class="form-control text-clr" id="files" multiple="multiple" name="webphotos[]" accept="image/*" />
                                            <output id="result"></output>
                                        </div>
                                        <div class="col-lg-12 col-height mt-2">
                                            <label>Select technology:</label>
                                            <select style="width: 100%;" name='technology[]' class="multiple-select one py-2" data-placeholder="Select" multiple data-actions-box="true" size="3">
                                                <?php
                                                $multiplesearch = mysqli_query($conn, "SELECT `id`, `technology` FROM `technology_name`");
                                                while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                                    $technologyname = $multiicon['technology'];
                                                    $id = $multiicon['id'];
                                                ?>
                                                    <option value="<?php echo $id; ?>"><?php echo $technologyname; ?></option>
                                                <?php
                                                } ?>
                                            </select>

                                        </div>
                                        <div class="col-lg-12 mt-5">
                                            <label>Project_Overview:</label>
                                            <textarea class="form-control" id="text" cols="40" rows="2" name='webproject_overviews' placeholder="Say something about this project..."></textarea>
                                        </div>
                                    </div>
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