<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>MDQ</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/multiple-select@1.5.2/dist/multiple-select.min.css">
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script> -->
    <style>
        .clrbtn {
            display: inline-block;
            font-weight: 400;
            line-height: 1.5;
            text-align: center;
            text-decoration: none;
            vertical-align: middle;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
            background-color: #1FBAED !important;
            color: #fff !important;
            border-radius: 20px;
            padding: .375rem .75rem;
            font-size: 1rem;
            border-radius: .25rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .inputpy {
            margin-top: 5px;
        }

        .platformpy {
            margin-top: 5px;
        }

        @media only screen and (min-width: 900px) {
            .inputpy {
                margin-left: -40%;
                width: 60%
            }

            .platformpy {
                margin-left: -40%;
                width: 40%
            }
        }
    </style>
</head>

<body>
    <div id="dashboard" class="container-fluid">
        <div class="row">
            <div class="col-auto px-0">
                <?php include 'sidebar.php'; ?>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5 py-5">
        <div class="row  justify-content-center">
            <div class="col-lg-12 cardshade">
                <div class="shadow px-3 py-3 mt-4 marq" style="border-radius:1rem">
                    <div class="row py-3 gy-3 table-responsive">
                        <form method="POST" action="uploadweb.php" enctype="multipart/form-data">
                            <div class="mt-4">
                                <label>Select Project Name:</label>
                                <select name='cilent_id'>
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
                            <div class="mt-4">
                                <label for="files">Project Title:</label>
                                <textarea class="form-control" id="text" cols="40" rows="1" name='project_title' placeholder="Say something about this project..."></textarea>

                            </div>
                            <div class="mt-4">
                                <label for="files">Project Logo Images</label>
                                <input type="file" class="text-clr" id="files" multiple="multiple" name="projectimages" height="100" width="100" />
                                <output id="result"></output>
                            </div>
                            <div class="mt-4">
                                <label>Select project points:</label>
                                <select name='projectpoints[]' class="multiple-select one" data-placeholder="Select" multiple>
                                    <?php
                                    $multiplesearch = mysqli_query($conn, "SELECT id, images, projectpoints FROM project_points");
                                    while ($multiicon = mysqli_fetch_array($multiplesearch)) {
                                        $points = $multiicon['projectpoints'];
                                        $id = $multiicon['id'];
                                    ?>
                                        <option value="<?php echo $id; ?>"><?php echo $points; ?></option>
                                    <?php

                                    } ?>
                                </select>

                            </div>
                            <div class="mt-2 py-4">
                                <label for="files">Banner Images</label>
                                <input type="file" class="text-clr" id="files" multiple="multiple" name="bannerimages" height="100" width="100" />
                                <output id="result"></output>
                            </div>
                            <!-- <div class="mt-2">
                                <label class="py-2 mb-2">Project Description:</label>
                                <textarea class="form-control" id="text" cols="40" rows="2" name='project_descriptions' placeholder="Say something about this project..." ></textarea>
                            </div> -->


                            <div class="mt-2">
                                <label class="py-2 mb-2">Project_Overview:</label>
                                <textarea class="form-control" id="text" cols="40" rows="4" name='project_overviews' placeholder="Say something about this project..."></textarea>
                            </div>
                            <div class="mt-4">
                                <label for="files">Select Multiple Slider Images</label>
                                <input type="file" class="text-clr" id="files" multiple="multiple" name="photos[]" accept="image/*" height="100" width="100" />
                                <output id="result"></output>
                            </div>

                            <div class="mt-4">
                                <label>Select technology:</label>
                                <select name='technology[]' class="multiple-select one" data-placeholder="Select" multiple>
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
                            <script>
                                $('.multiple-select.one').multipleSelect();

                                let tempMultipleSelect = $.fn.multipleSelect;

                                $.fn.multipleSelect = function() {
                                    this.removeAttr('multiple'); //remove attribute as per your logic
                                    return tempMultipleSelect.apply(this, arguments);
                                }
                            </script>


                            <div class="mt-2 py-4 d-flex justify-content-center">
                                <button class="clrbtn" type="submit" name="upload">Upload</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

</body>



</html>