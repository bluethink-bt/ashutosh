<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
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
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
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
                    <li class="nav-item dropdown has-arrow">
                        <a href="#" class=" nav-link user-link" data-toggle="dropdown">

                            <!-- this is copy code  -->
                            <button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">Month</span></button>
                            <!-- <span>Month</span> -->
                            <!-- this is also copy for the button code -->
                        </a>

                        <div class="dropdown-menu">
                            <?php
                            include "config.php";
                            $sql = "SELECT * from month ";
                            $result = mysqli_query($conn, $sql);
                            foreach ($result as $key => $data) {
                            ?>
                                <a class="dropdown-item" href="recive_view.php?month=<?php echo $data['month']; ?>"><?php echo $data['month']; ?></a>
                            <?php } ?>
                           
                        </div>
                    </li>
                </ul>

            </div>
        </div>
                                                  <?php
                                                 
       
                                                if (isset($_GET['month'])) {
                                                    $month1 = $_GET['month'];
                                                } else {
                                                    $month1 = "All";
                                                }
                                                echo $month1;
                                               
                                                ?>

        <?php include "sidebar.php" ?>


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="row align-items-center">
                                    <div class="col-sm-6">
                                        <div class="page-title">
                                            Expence List
                                        </div>
                                    </div>
                                    <div class="col-sm-6 text-sm-right">
                                        <div class=" mt-sm-0 mt-2">
                                            <button class="btn btn-outline-primary mr-2"><img src="assets/img/excel.png" alt=""><span class="ml-2">Excel</span></button>
                                            <button class="btn btn-outline-danger mr-2"><img src="assets/img/pdf.png" alt="" height="18"><span class="ml-2">PDF</span></button>
                                            <button class="btn btn-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-ellipsis-h">test</i></button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table custom-table">
                                                <?php
                                                $limit = 25;
                                                if (isset($_GET['page'])) {
                                                    $page = $_GET['page'];
                                                    $month2=$_GET['month2'];
                                                } else {
                                                    $page = 1;
                                                }

                                                $offset = ($page - 1) * $limit;
                                               

                                                ?>


                                                <thead class="thead-light">
                                                    <tr>
                                                        <th>ID </th>
                                                        <th>amount </th>
                                                        <th>Type </th>
                                                        <th>Month </th>
                                                        <th class="text-right">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <?php
                                                    require('config.php');
                                                    if ($month1 == "All") {
                                                        $sql = "SELECT * from debit  limit $offset ,$limit ";

                                                        $sql_offset= "SELECT * from debit ";
                                                        $result_offset = mysqli_query($conn, $sql_offset);
                                                        if (mysqli_num_rows($result_offset) > 0) {
                                                            $count_record = mysqli_num_rows($result_offset);
                                                            $total_page = ceil($count_record / $limit);
                                                        }

                                                    } else {
                                                        $sql = "SELECT * from debit WHERE month = '$month1' limit $offset ,$limit ";

                                                        $sql_offset = "SELECT * from debit WHERE month = '$month1' ";
                                                        $result_offset = mysqli_query($conn, $sql_offset);
                                                        if (mysqli_num_rows($result_offset) > 0) {
                                                            $count_record = mysqli_num_rows($result_offset);
                                                            $total_page = ceil($count_record / $limit);
                                                        }

                                                    }
                                                   
                                                    $result = mysqli_query($conn, $sql);
                                                    foreach ($result as $key => $data) {
                                                    ?>
                                                        <tr>
                                                            <td>
                                                                <a href="" class="avatar bg-green"><?php echo $data['id']; ?></a>
                                                            </td>
                                                            <td><?php echo $data['amount']; ?></td>
                                                            <td><?php echo $data['type']; ?></td>
                                                            <td><?php echo $data['month']; ?></td>
                                                            <td class="text-right">
                                                                <a href="creadit_edit.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm mb-1">
                                                                    <i class="far fa-edit"></i>
                                                                </a>
                                                                <button type="submit" data-toggle="modal" data-target="#delete_employee" class="btn btn-danger btn-sm mb-1">
                                                                    <a href="backend/creadit_delete.php?id=<?php echo $data['id']; ?>">
                                                                        <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </td>
                                                        </tr>
                                                    <?php
                                                       
                                                    }

                                                    ?>
                                                </tbody>

                                            </table>
                                            <div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <div>
            <?php
            for($i=1;$i<=$total_page;$i++){
                ?>

                <button><a href="recive_view.php?page=<?php echo $i;?> &mont=<?php echo $month1 ?> "> <?php echo $i; ?> </a></button>


                <?php } ?>
            
            
        </div>
                        </div>


                        <script src="assets/js/jquery-3.6.0.min.js"></script>

                        <script src="assets/js/bootstrap.bundle.min.js"></script>
                        <!-- 
	<script src="assets/js/jquery.slimscroll.js"></script> -->

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
<?php
echo $i ;
$name=$_GET['name'];
echo $name;
?>