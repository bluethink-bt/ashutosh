<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preadmin-lite.dreamguystech.com/school/light/add-parent.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Jul 2022 11:01:07 GMT -->

<head>
    <meta charset="utf-8">
    <title>Preschool - Bootstrap Admin Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">

    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

    <link rel="stylesheet" href="assets/plugins/datetimepicker/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="assets/css/select2.min.css">

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
                            <form action="#">

                                <input class="form-control" type="text" placeholder="Search here">
                                <button class="btn" type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                    </li>
                    <li>
                        <a href="index.html" class="mobile-logo d-md-block d-lg-none d-block"><img src="assets/img/logo1.png" alt="" width="30" height="30"></a>
                    </li>
                </ul>

            </div>
        </div>
        <?php include "sidebar.php" ?>
        <div class="page-wrapper">
            <div class="content container-fluid">

                <!-- <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
                            <div class="dash-widget-info text-right">
                                <span>Recived rs </span>
                                <?php
                                include "config.php";
                                $sum_creadit = NULL;
                                $sql = "SELECT * from creadit";
                                $result = mysqli_query($conn, $sql);
                                foreach ($result as $key => $data) {
                                    $sum_creadit += $data['amount'];
                                }
                                ?>
                                <h5><?php echo $sum_creadit; ?>.00 </h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info text-left d-inline-block">
                                <span>You Gave rs </span>
                                <?php


                                include "config.php";
                                $sub_debit = NULL;
                                $sql = "SELECT * from debit";
                                $result = mysqli_query($conn, $sql);
                                foreach ($result as $key => $data1) {
                                    $sub_debit += $data1['amount'];
                                }
                                ?>
                                <h5><?php echo $sub_debit; ?>.00</h5>

                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-2.png" width="80" alt=""></span>
                        </div>
                    </div>

                    <?php
                    if ($sum_creadit - $sub_debit < 0) {
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
                                if ($sum_creadit - $sub_debit < 0) {
                                ?>
                                    <span><?php echo "Total Loss rs" ?></span>
                                <?php } else {
                                ?>
                                    <span><?php echo "Total Profit rs" ?></span>
                                <?php } ?>
                                <h5> <?php echo $sum_creadit - $sub_debit ?>.00</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget dash-widget5">
                            <div class="dash-widget-info d-inline-block text-left">
                                <span>Percentage</span>
                                <h5> % <?php $per = (($sum_creadit - $sub_debit) / $sum_creadit) * 100;
                                        $per = number_format($per, 2, '.', '');
                                        echo $per; ?></h5>
                            </div>
                            <span class="float-right"><img src="assets/img/dash/dash-4.png" alt="" width="80"></span>
                        </div>
                    </div>
                </div> -->
               
                <div class="page-content">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                <h6 class="text-uppercase mb-0 mt-0 page-title">add Creadit Amount</h6>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                            <form class="form-sample" action="backend/credit_backend.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label> Clint Amount</label>
                                                    <input type="text" class="form-control" name="amount">
                                                </div>

                                                <div class="form-group">
                                                    <label>Country</label>
                                                    <select class="form-control select" name="type">
                                                        <?php
                                                        $sql = "SELECT * from country ";
                                                        $result = mysqli_query($conn, $sql);
                                                        foreach ($result as $key => $data) {
                                                        ?>
                                                            <option><?php echo $data['country']; ?></option>

                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Month</label>

                                                    <select class="form-control select" name="month">
                                                        <?php

                                                        $sql = "SELECT * from month ";
                                                        $result = mysqli_query($conn, $sql);
                                                        foreach ($result as $key => $data) {
                                                        ?>
                                                            <option><?php echo $data['month']; ?></option>

                                                        <?php } ?>
                                                    </select>

                                                </div>
                                                <button class="btn btn-primary mr-2" type="submit" name="submit">Submit</button>
                                                <button class="btn btn-secondary" type="reset">Cancel</button>
                                            </form>
                                        </div>




                  
                                        <?php

if(true){


?>

<div class="col-lg-6 col-md-6 col-sm-6 col-12">
    <div class="card flex-fill">
        <div class="card-body">
        <h5> Last Inserted Value in Recived Payment </h5>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table custom-table">
                        <?php
                            // $limit=3;
                            // if(isset($_GET['page'])){
                            //     $page=$_GET['page'];
                            // }
                            // else{
                            //     $page=1;
                            // }
                            
                            // $offset=($page-1)*$limit;
                            // $sql = "SELECT * from creadit ";
                            // $result = mysqli_query($conn, $sql);
                            // if(mysqli_num_rows( $result )>0){
                            //     $count_record=mysqli_num_rows( $result );
                            //     $total_page= ceil($count_record / $limit);
                              
                            // }
                           
                        ?>


                            <thead class="thead-light">
                                <tr>
                                    
                                    <th>Amount </th>
                                    <th>Country </th>
                                    <th>Month </th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php
                                require('config.php');
                                
                                $sql = "SELECT * from creadit ORDER BY id DESC limit 1 ";
                                $result = mysqli_query($conn, $sql);
                                foreach ($result as $key => $data) {
                                ?>
                                    <tr>
                                       
                                        <td><?php echo $data['amount']; ?></td>
                                        <td><?php echo $data['clints']; ?></td>
                                        <td><?php echo $data['month'] ; ?></td>
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
                                    $count++;
                                }

                                ?>
                            </tbody>

                        </table>
                    
                </div
                <div>
            <?php
            // for($i=1;$i<=$total_page;$i++){
            //     ?>

                <!-- <button><a href="creadit.php?page=<?php echo $i;?>"> <?php echo $i; ?> </a></button> -->


          
            
            
        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php  }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                </div>
            </div>

        </div>
    </div>

    <!-- <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/jquery.slimscroll.js"></script>

    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>

    <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="assets/js/app.js"></script> -->
</body>

</html>