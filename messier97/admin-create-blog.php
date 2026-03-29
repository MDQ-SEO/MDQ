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
                <div class="row">
                    <div class="d-flex align-items-center justify-content-between">
                        <p class="fs-4 card-text" style="color:#1C46A8; font-weight:600">Create Blog</p>
                        <div class="fw-bold">
                            <a href="table-blog.php" class="nav-link align-middle px-0">
                                <button class="btn" type="submit" name="switch">Switch to table</button>
                            </a>
                        </div>
                    </div>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow p-4 py-3 marq" style="border-radius:10px; background-color: white">
                            <form method="POST" action="upload-create-blog.php" enctype="multipart/form-data">
                                <div class="about_label">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <label for="">Image</label><br>
                                            <input type="file" class="form-control about_input py-2" id="text" cols="30" rows="1" name="image" placeholder="" required /><br>
                                        </div>
                                        <link href="https://cdn.jsdelivr.net/npm/froala-editor@3.2.7/css/froala_editor.pkgd.min.css" rel="stylesheet">
                                        <script src="https://cdn.jsdelivr.net/npm/froala-editor@3.2.7/js/froala_editor.pkgd.min.js"></script>

                                        <div class="col-lg-12">
                                            <label for="title">Title</label><br>
                                            <div id="titleEdit" name="titleEdit"></div>
                                            <input type="hidden" id="froalaTitle" name="froalaTitle" />
                                        </div>

                                        <div class="col-lg-12">
                                            <label for="content">Content</label><br>
                                            <div id="contentEdit" name="contentEdit"></div>
                                            <input type="hidden" id="froalaContent" name="froalaContent" />
                                        </div>

                                        <script>
                                            var titleEditor = new FroalaEditor('#titleEdit', {
                                                lineBreaker: false, // Disable automatic line breaks
                                            });

                                            var contentEditor = new FroalaEditor('#contentEdit', {
                                                lineBreaker: false, // Disable automatic line breaks
                                            });

                                            document.querySelector('form').addEventListener('submit', function() {
                                                var titleContent = titleEditor.html.get();
                                                var content = contentEditor.html.get();

                                                document.getElementById('froalaTitle').value = titleContent;
                                                document.getElementById('froalaContent').value = content;
                                            });
                                        </script>



                                        <span class="px-3">
                                            <button class="btn my-3" style="margin-left:-15px !important" type="submit" name="upload">Create</button>
                                        </span>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>