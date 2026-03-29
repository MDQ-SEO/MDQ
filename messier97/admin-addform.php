<?php include 'header.php'; 
$conn = mysqli_connect("localhost","u815853083_mdq_reader","+5GcVe6f0Q","u815853083_mdq_reader");

?>

<style>
    .body_color {
        background-color: #e5e8e8  !important;
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

    #fr-logo{
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
            <div class="container-fluid py-3 mx-auto">
            <div class="row py-2">
<!--------------------->
<div class="col-lg-12">
    <p class="fs-4" style="color:#1C46A8; font-weight:600">Contact</p>
    <!-- Filter Form -->
    <form method="GET" action="admin-addform.php" class="row mb-3">
        <!-- Date and Status Filters -->
        <div class="col-md-3">
            <label for="start_date" class="form-label">Start Date</label>
            <input type="date" name="start_date" id="start_date" class="form-control" value="<?php echo isset($_GET['start_date']) ? htmlspecialchars($_GET['start_date']) : ''; ?>">
        </div>
        <div class="col-md-3">
            <label for="end_date" class="form-label">End Date</label>
            <input type="date" name="end_date" id="end_date" class="form-control" value="<?php echo isset($_GET['end_date']) ? htmlspecialchars($_GET['end_date']) : ''; ?>">
        </div>
       
        <div class="col-md-3 d-flex align-items-end">
            <button type="submit" class="btn btn-primary">Filter</button>
            <a href="admin-addform.php" class="btn btn-secondary ms-2">Clear</a> <!-- Clear Button -->
        </div>
    </form>

    <div class="table-responsive">
        <div class="wrapper">
            <table class="table css-serial text-white" style="background-color: #111420;">
                <thead class="table-dark text-nowrap text-white">
                    <tr>
                        <th class="text-center">No</th>
                        <th class="text-center">Date</th>
                        <th class="text-center">First Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Phone</th>
                          <th class="text-center">Company Name</th>
                    </tr>
                </thead>
                <tbody id="post_search">
                    <?php
                    $num_per_page = 10;
                    $page = isset($_GET["page"]) ? (int)$_GET["page"] : 1;
                    $start_from = ($page - 1) * $num_per_page;

                        // Main query to fetch data with pagination and filters
                       // $query = "SELECT * FROM `free_trial` WHERE 1";
                        $query = "SELECT * FROM `ads_viewers` WHERE 1";

                        // Apply filters (start_date, end_date, status)
                        if (isset($_GET['start_date']) && !empty($_GET['start_date'])) {
                            $query .= " AND DATE(created_at) >= '" . mysqli_real_escape_string($conn, $_GET['start_date']) . "'";
                        }
                        if (isset($_GET['end_date']) && !empty($_GET['end_date'])) {
                            $query .= " AND DATE(created_at) <= '" . mysqli_real_escape_string($conn, $_GET['end_date']) . "'";
                        }
                        if (isset($_GET['status']) && !empty($_GET['status'])) {
                            $query .= " AND status = '" . mysqli_real_escape_string($conn, $_GET['status']) . "'";
                        }

                        // Append the LIMIT clause for pagination
                        $query .= " ORDER BY id DESC LIMIT $start_from, $num_per_page";

                        $sql = mysqli_query($conn, $query);

                                        // Check for SQL errors
                        if (!$sql) {
                            die("Error fetching contacts: " . mysqli_error($conn));
                        }

                        // Display results
                        if (mysqli_num_rows($sql) > 0) {
                        $record_number = $start_from + 1; // To show the correct record number
                        while ($data = mysqli_fetch_array($sql)) {
                            $created_at = $data['created_at'];
                            $fname = $data['name'];
                            $email = $data['email'];
                            $mobile = $data['phone'];
                            $feature = $data['business_name'];

                    ?>
                    
                    <tr id="<?php echo $data['id']; ?>" class="text-nowrap text-center">
                        <td><?php echo $record_number++; ?></td>
                        <td style="max-width: 150px; white-space: normal; word-wrap: break-word;"><?php echo htmlspecialchars($created_at); ?></td>
                        <td style="max-width: 150px; white-space: normal; word-wrap: break-word;"><?php echo htmlspecialchars($fname); ?></td>
                        <td style="word-wrap: break-word; white-space: normal;">
    <?php
        // Ensure the email is safe for output
        $email_safe = htmlspecialchars($email);

        // Split the email into two parts around the '@' symbol
        $email_wrapped = str_replace('@', '<wbr>@', $email_safe);

        echo $email_wrapped;
    ?>
</td>
                        <td><?php echo htmlspecialchars($mobile); ?></td>

                                               <td style="max-width: 150px; white-space: normal; word-wrap: break-word;"><?php echo htmlspecialchars($feature); ?></td>

                      
                    </tr>
                    <?php 
                        }
                     } else {
                            echo "<tr><td colspan='8' class='text-center'>No records found.</td></tr>";
                        }
                    ?>
                </tbody>
            </table>

            <!-- Updated Pagination Logic -->
            <?php 
            $pr_query = "SELECT * FROM ads_viewers WHERE 1";

            if (isset($_GET['start_date']) && !($_GET['start_date'])) {
                $pr_query .= " AND DATE(created_at) >= '" . mysqli_real_escape_string($conn, $_GET['start_date']) . "'";
            }
            if (isset($_GET['end_date']) && !($_GET['end_date'])) {
                $pr_query .= " AND DATE(created_at) <= '" . mysqli_real_escape_string($conn, $_GET['end_date']) . "'";
            }
            if (isset($_GET['status']) && !($_GET['status'])) {
                $pr_query .= " AND status = '" . mysqli_real_escape_string($conn, $_GET['status']) . "'";
            }

            $pr_result = mysqli_query($conn, $pr_query);

            if (!$pr_result) {
                die("SQL error: " . mysqli_error($conn));
            }

            $total_record = mysqli_num_rows($pr_result);
            $total_page = ceil($total_record / $num_per_page);

            if ($total_page > 1) { ?>
                <div class="text-center" style="background-color: #2d2e37;">
                    <?php
                    $base_url = "admin-addform.php?";

                    if (isset($_GET['start_date']) && !($_GET['start_date'])) {
                        $base_url .= "start_date=" . htmlspecialchars($_GET['start_date']) . "&";
                    }
                    if (isset($_GET['end_date']) && !($_GET['end_date'])) {
                        $base_url .= "end_date=" . htmlspecialchars($_GET['end_date']) . "&";
                    }
                    if (isset($_GET['status']) && !($_GET['status'])) {
                        $base_url .= "status=" . htmlspecialchars($_GET['status']) . "&";
                    }

                    if ($page > 1) {
                        echo "<a href='" . $base_url . "page=" . ($page - 1) . "' class='btn mx-2'>Previous</a>";
                    }

                    for ($i = 1; $i <= $total_page; $i++) {
                        echo "<a href='" . $base_url . "page=" . $i . "' class='btn mx-1'>$i</a>";
                    }

                    if ($i > $page) {
                        echo "<a href='" . $base_url . "page=" . ($page + 1) . "' class='btn mx-2'>Next</a>";
                    }
                    ?>
                </div>
            <?php } ?>
        </div>
    </div>
</div>

<!------------------>
            </div>
        </div>
            <script src="upload_image.js"></script>
        </div>
    </div>
</body>