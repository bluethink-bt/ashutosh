<?php $month1 = "All"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Ashutosh</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/css/fullcalendar.min.css">

    <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="assets/plugins/morris/morris.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/mycss.css">
  
</head>

<body>
    <div class="main-wrapper">
        <div class="header-outer">
            <div class="header">
                <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fas fa-bars" aria-hidden="true"></i></a>
                <a id="toggle_btn" class="float-left" href="javascript:void(0);">
                    <img src="assets/img/sidebar/icon-21.png" alt="">
                </a>

                <ul class="nav float-left">
                    <form  action="" method="POST" >

                        <div >
                            <select name="month"   >
                                <option>All</option>

                                <?php
                                include "config.php";
                                $sql = "SELECT * from month ";
                                $result = mysqli_query($conn, $sql);
                                foreach ($result as $key => $data) {
                                ?>
                                    <option><?php echo $data['month']; ?></option>
                                <?php } ?>
                            </select>
                            <button class="btn btn-primary mr-2" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                </ul>

                <?php
                if (isset($_POST['submit'])) {

                    $month1 = $_POST['month'];
                }

                ?>

                <ul class="nav user-menu float-right">
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                            <img src="assets/img/sidebar/icon-22.png" alt="">
                        </a>

                    </li>
                    <li class="nav-item dropdown d-none d-sm-block">
                        <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><img src="assets/img/sidebar/icon-23.png" alt=""> </a>
                    </li>
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">
                            <span class="user-img"><img class="rounded-circle" src="assets/img/user-06.jpg" width="30" alt="Admin">
                                <span class="status online"></span></span>
                            <span>Admin</span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="profile.html">My Profile</a>

                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <?php
        require('config.php');
        // $month1 = "feb";
        if ($month1 == "All") {
            $sql = "SELECT * from creadit ";
        } else {
            $sql = "SELECT * from creadit where month ='$month1'";
        }
        $c_sum = NULL;
        $result = mysqli_query($conn, $sql);
        foreach ($result as $key => $data) {
            $c_sum += $data['amount'];
        }
        ?>
        <?php
        require('config.php');
        if ($month1 == "All") {
            $sql = "SELECT * from debit ";
        } else {
            $sql = "SELECT * from debit where month ='$month1'";
        }
        $d_sum = NULL;
        $result = mysqli_query($conn, $sql);
        foreach ($result as $key => $data) {
            $d_sum += $data['amount'];
        }
        ?>
        <?php include "sidebar.php" ?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h5 class="page-title mb-0">POETFOLIO</h5>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Recived </span>
                                <h5>Rs <?php echo $c_sum ?>.00 </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>You Gave</span>

                                <h5>Rs <?php echo "rs".$d_sum ?>.00</h5>

                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-2.png" width="80" alt=""></span>
                        </div>
                    </div>

                    <?php
                    if ($c_sum - $d_sum < 0) {
                    ?>
                        <style>
                            #f {
                                background-color: lightcoral;
                            }
                        </style>
                    <?php } else {
                    ?>
                        <style>
                            #f {
                                background-color: lightgreen;
                            }
                        </style>
                    <?php } ?>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5" id="f">
                            <span class="float-left"><img src="assets/img/dash/dash-3.png" alt="" width="80" background color></span>
                            <div class="dash-widget-info text-right">


                                <?php
                                if ($c_sum - $d_sum < 0) {
                                ?>
                                    <span><?php echo "Total Loss" ?></span>
                                <?php } else {
                                ?>
                                    <span><?php echo "Total Profit" ?></span>
                                <?php } ?>

                                <h5>Rs <?php echo $c_sum - $d_sum ?>.00</h5>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                                <span>Percentage</span>
                                <h5> % <?php echo ($c_sum - $d_sum) / 100 ?></h5>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">

                                    <div class="col-auto">
                                        <div class="page-title">
                                            RECIVED LIST
                                        </div>

                                    </div>

                                    <ul class="nav float-left">
                                        <li>
                                            <div class="top-nav-search">
                                            </div>
                                        </li>
                                        <li>
                                            <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID </th>
                                                        <th>Amount </th>
                                                        <th>Clint</th>
                                                        <th>Month</th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    // $month1=$_POST['month'];
                                                    require('config.php');
                                                    if ($month1 == "All") {
                                                        $sql = "SELECT * from creadit ";
                                                    } else {
                                                        $sql = "SELECT * from creadit where month ='$month1'";
                                                    }
                                                    $c_sum = NULL;
                                                    $result = mysqli_query($conn, $sql);
                                                    foreach ($result as $key => $data) {
                                                        $c_sum += $data['amount'];
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <a href="" class="avatar bg-green"><?php echo $data['id']; ?></a>
                                                            </td>
                                                            <td><?php echo $data['amount']; ?></td>
                                                            <td><?php echo $data['clints']; ?></td>
                                                            <td><?php echo $data['month']; ?></td>

                                                            <td class="text-right">
                                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php
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

                    <div class="col-lg-6 d-flex">
                        <div class="card flex-fill">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="page-title">
                                            EXPENCE LIST
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table">
                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID </th>
                                                        <th>Amount </th>
                                                        <th>Type</th>
                                                        <th>Month</th>

                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    require('config.php');

                                                    if ($month1 == "All") {
                                                        $sql = "SELECT * from debit ";
                                                    } else {
                                                        $sql = "SELECT * from debit where month ='$month1'";
                                                    }
                                                    $d_sum = NULL;
                                                    $result = mysqli_query($conn, $sql);
                                                    foreach ($result as $key => $data) {
                                                        $d_sum += $data['amount'];
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <a href="" class="avatar bg-green"><?php echo $data['id']; ?></a>
                                                            </td>
                                                            <td><?php echo $data['amount']; ?></td>
                                                            <td><?php echo $data['type']; ?></td>
                                                            <td><?php echo $data['month']; ?></td>

                                                            <td class="text-right">
                                                                <a href="edit-exam.html" class="btn btn-primary btn-sm mb-1">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php } ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <!-- <script src="assets/js/jquery.slimscroll.js"></script> -->

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/fullcalendar.min.js"></script>
    <script src="assets/js/jquery.fullcalendar.js"></script>
    <script src="assets/plugins/morris/morris.min.js"></script>
    <script src="assets/plugins/raphael/raphael-min.js"></script>
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/chart-data.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>