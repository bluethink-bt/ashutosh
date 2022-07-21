<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>BlueThink</title>
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
                    <li>
                        <div class="top-nav-search">
                            <a href="javascript:void(0);" class="responsive-search">
                                <i class="fa fa-search"></i>
                            </a>
                            <form action="https://preadmin-lite.dreamguystech.com/school/light/search.html">
                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
                    </li>
                </ul>

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
                            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                            <a class="dropdown-item" href="settings.html">Settings</a>
                            <a class="dropdown-item" href="login.html">Logout</a>
                        </div>
                    </li>
                </ul>
                <div class="dropdown mobile-user-menu float-right">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="profile.html">My Profile</a>
                        <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                        <a class="dropdown-item" href="settings.html">Settings</a>
                        <a class="dropdown-item" href="login.html">Logout</a>
                    </div>
                </div>
            </div>
        </div>


        <?php include "sidebar.php" ?>


        <div class="page-wrapper">
            <div class="content container-fluid">

                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6">
                            <h3 class="page-title mb-0">Country</h3>
                        </div>
                        <div class="col-md-6">
                            <ul class="breadcrumb mb-0 p-0 float-right">
                                <li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
                                </li>
                                <li class="breadcrumb-item"><span>Month</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <form method="POST" action="backend/country_backend.php">
                                                <div class="form-group">
                                                    <label>Add New Country</label>
                                                    <input type="text" class="form-control" name="country">
                                                </div>


                                                <div class="form-group text-center custom-mt-form-group">
                                                    <button class="btn btn-primary mr-2" type="submit" name="submit">Submit</button>
                                                    <button class="btn btn-secondary" type="reset">Cancel</button>
                                                </div>
                                            </form>
                                           
                                        </div>


                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <div class="card flex-fill">
                                                <div class="card-header">
                                                    <div class="row align-items-center">

                                                        <div class="col-auto">
                                                            <div class="page-title">
                                                                Country List
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
                                                                            <th>Country </th>
                                                                            <th class="text-right">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>

                                                                        <?php
                                                                       
                                                                        require('config.php');
                                                                       $serial=1;
                                                                        $sql = "SELECT * from country ";
                                                                        $result = mysqli_query($conn, $sql);
                                                                        foreach ($result as $key => $data) {   
                                                                        ?>
                                                                            <tr>
                                                                                <td>
                                                                                    <a href="" class="avatar bg-green"><?php echo $serial; ?></a>
                                                                                </td>
                                                                                <td><?php echo $data['country']; ?></td>
                                                                                

                                                                                <td class="text-right">

                                                                                    <a href="country_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm mb-1">
                                                                                        <i class="far fa-edit"></i>
                                                                                    </a>
                                                                                    
                                                                                    <button type="submit"  class="btn btn-danger btn-sm mb-1">
                                                                                    <a href="backend/country_delete.php?id=<?php echo $data['id']; ?>" >
                                                                                        <i class="far fa-trash-alt"></i>
                                                                                    </button>
                                                                                </td>
                                                                            </tr>
                                                                        <?php
                                                                       $serial++; }
                                                                       
                                                                        ?>
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
                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->
    <script src="assets/js/apexcharts.js"></script>
    <script src="assets/js/chart-data.js"></script>

    <!-- <script src="assets/js/jquery.slimscroll.js"></script> -->

    <!-- <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script> -->

    <!-- <script src="assets/js/fullcalendar.min.js"></script> -->
    <!-- <script src="assets/js/jquery.fullcalendar.js"></script> -->

    <!-- <script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/plugins/raphael/raphael-min.js"></script> -->


    <!-- <script src="assets/js/app.js"></script> -->
</body>


</html>