<?php

require('./include/essentials.php');
require('./include/db_config.php');
adminLogin();
// seen
if (isset($_GET['seen'])) {
    // Include the filteration function code here

    $frm_data = filteration($_GET);
    if ($frm_data['seen'] == 'all') {
        $q = "UPDATE `user_message` SET `seen` = 1 ";

        if ($con->query($q) === TRUE) {
            echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Update Successful!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } else {
            echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Failed! Try Again Later.</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    } else {
        $sr_no = intval($frm_data['seen']); // Ensure it's an integer
        $q = "UPDATE `user_message` SET `seen` = 1 WHERE `sr_no` = $sr_no";

        if ($con->query($q) === TRUE) {
            echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Update Successful!</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } else {
            echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Update Failed! Try Again Later.</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    // $con->close();
}

// delete
if (isset($_GET['del'])) {

    $frm_data = filteration($_GET);
    if ($frm_data['del'] == 'all') {
        
        $q = "DELETE FROM `user_message`";

        if ($con->query($q) === TRUE) {
            echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
                    <strong>All Data Deleted</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } else {
            echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed! Try Again Later.</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    } else {
        $sr_no = $frm_data['del']; // Ensure it's an integer
        $q = "DELETE FROM `user_message` WHERE `sr_no` = $sr_no";

        if ($con->query($q) === TRUE) {
            echo '<div class="alert custom-alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Data Deleted</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        } else {
            echo '<div class="alert custom-alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Failed! Try Again Later.</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
        }
    }
    // $con->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Messages</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/adminstyle.css">
</head>

<body class="">


    <?php require('include/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-5 overflow-hidden">
                <h3 class="mb-4"> User Messages</h3>
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">
                        <div class ="text-end mb-4">
                            <a href="?seen=all" class="btn btn-primary rounded-pill shadow-none bnt-sm"><i class="bi bi-check-all fs-5 me-2"></i>Mark All as Read</a>
                            <a href="?del=all" class="btn btn-danger rounded-pill shadow-none bnt-sm"><i class="bi bi-trash-fill fs-5 me-2"></i>Delete All</a>
                        </div>
                        <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Messages</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php

                                    $q = "SELECT * FROM `user_message` ORDER BY `sr_no` DESC";
                                    $data = mysqli_query($con, $q);
                                    $i = 1;
                                    while ($row = mysqli_fetch_assoc($data)) {
                                        $seen = '';
                                        if ($row['seen'] != 1) {
                                            $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                        }
                                        $seen .= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                        echo <<<query
                                        <tr>
                                            <td>$i</td>
                                            <td>$row[name]</td>
                                            <td>$row[email]</td>
                                            <td>$row[subject]</td>
                                            <td>$row[message]</td>
                                            <td>$row[date]</td>
                                            <td>$seen</td>
                                        </tr>
                                    query;
                                        $i++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>












    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>