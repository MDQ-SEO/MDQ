<?php include 'header.php'; ?>

<style>
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
            <div class="container-fluid px-5 py-4 mx-auto">
                <div class="row">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600"> Hiring Form</p>
                        <div class="fw-bold">
                            <a href="table-hire-form.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to table</button>
                            </a>
                        </div>
                    </div>

                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq" style="border-radius:1rem; width:80%; background-color: white">
                            <div class="about_label">
                                <form method="POST" action="upload-hire-form.php" enctype="multipart/form-data">
                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM hire_position");
                                    ?>
                                    <label class="mt-3" for="technology">Technology Name</label><br>
                                    <select class="form-control about_input py-2" id="technology" name="technology" required>
                                        <option value="" disabled selected>Select a Technology</option>
                                        <?php
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $position = $data['position'];
                                            echo "<option value=\"$position\">$position</option>";
                                        }
                                        ?>
                                    </select>


                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM hire_description");
                                    ?>
                                    <label class="mt-3" for="technology">Job description</label><br>
                                    <select class="form-control about_input py-2" id="technology" name="description[]" multiple required>
                                        <option value="" disabled>Select descriptions</option>
                                        <?php
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $description = $data['description'];
                                            echo "<option value=\"$description\">$description</option>";
                                        }
                                        ?>
                                    </select>

                                    <?php
                                    $sql = mysqli_query($conn, "SELECT * FROM hire_requirement");
                                    ?>
                                    <label class="mt-3" for="technology">Requirements</label><br>
                                    <select class="form-control about_input py-2" id="technology" name="requirement[]" multiple required>
                                        <option value="" disabled>Select requirements</option>
                                        <?php
                                        while ($data = mysqli_fetch_array($sql)) {
                                            $requirement = $data['requirement'];
                                            echo "<option value=\"$requirement\">$requirement</option>";
                                        }
                                        ?>
                                    </select>


                                    <span class="d-flex justify-content-end mt-4">
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