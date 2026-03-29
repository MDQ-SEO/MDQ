<?php include 'header.php'; ?>

<style>
    .body_color {
        background-color: #2d2e37 !important;
        color: #fc6703;
    }

    .table> :not(caption)>*>* {
        background-color: #111420 !important;
    }

    .table-striped>tbody>tr:nth-of-type(2n+1)>* {
        --bs-table-accent-bg: #2d2e37 !important;
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
            <div class="container-fluid px-5 py-5 mx-auto">
                <div class="row">
                    <p class="fs-4 card-text" style="color:#45C998">Change Password</p>
                    <div class="d-flex align-items-center justify-content-center">
                        <div class="card shadow px-3 py-3 marq"
                            style="border-radius:1rem; background-color: #111420">
                            <div>
                                <?php
                                $password = $_POST['password'];
                                $confirmPassword = $_POST['confirmPassword'];

                                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                    if ($password === $confirmPassword) {
                                        // Passwords match, you can proceed with further processing.
                                        echo "Password and Confirm Password match.";
                                    } else {
                                        // Passwords do not match, display an error message.
                                        echo "Password and Confirm Password do not match.";
                                    }
                                }
                                ?>
                                <form method="POST"  action="userupload.php" enctype="multipart/form-data">
                                    <div class="my-2">
                                        <input class="form-control py-2" id="text" cols="30" rows="1" name="name"
                                            placeholder="Password" required />
                                            <input class="form-control py-2 my-3" id="text" cols="30" rows="1" name="password"
                                            placeholder="Confirm Password" required />
                                            <button class="btn" style="background-color:#45C998 !important; width:100%" type="submit"
                                                name="upload">Change</button>

                                    </div>
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