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

              
                
            </div>
        </div>


      
		<?php include "sidebar.php" ?>

        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <h6 class="text-uppercase mb-0 mt-0 page-title">Add Expences Amount</h6>
                        </div>
                        <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                            <ul class="breadcrumb float-right p-0 mb-0">
                                <li class="breadcrumb-item"><a href="index.html"><I class="fas fa-home"></i> Home</a></li>
                                <li class="breadcrumb-item"><a href="index.html">Parents</a></li>
                                <li class="breadcrumb-item"><span> Add parent</span></li>
                            </ul>
                        </div> -->
                    </div>
                </div>

               

                <div class="page-content">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
                                        <form class="form-sample" action="backend/debit_backend.php" method="post" enctype="multipart/form-data">
                                                <div class="form-group">
                                                    <label>Amount</label>
                                                    <input type="text" class="form-control" name="amount">
                                                </div>
                                                <div class="form-group">
                                                   
                                                    <label>Type of Expence</label>
                                                    <select class="form-control select" name="type">
                                                    <?php                
                                                   include"config.php";
                                                   $sql = "SELECT * from exp_type ";
                                                   $result = mysqli_query($conn, $sql);
                                                   foreach ($result as $key => $data) {  
                                                   ?>
                                                       <option><?php echo $data['exp_type']; ?></option>

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
                                                <div class="form-group">
                                                    <label>Year</label>
                                                    <select class="form-control select" name="year">
                                                    
                                                       <option> 2022</option>

                                                     
                                                    </select>
                                                </div>
                                               

                                                
                                                <button class="btn btn-primary mr-2" type="submit" name="submit">Submit</button>
                                                    <button class="btn btn-secondary" type="reset">Cancel</button>
                                            </form>


                                        </div>

                                       
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card flex-fill">
                
                <div class="card-body">
                <h5>Last inserted expence data</h5>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table custom-table">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Amount </th>
                                            <th>Type </th>
                                            <th>Month </th>
                                            <th class="text-right">Action</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                        
                                        require('config.php');
                                        
                                            $sql = "SELECT * from debit ORDER BY
                                            id DESC limit 1";

                                        $result = mysqli_query($conn, $sql);
                                        foreach ($result as $key => $data) {
                                            
                                        ?>
                                            <tr>
                                                
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
    </div>

    <!-- <script src="assets/js/jquery-3.6.0.min.js"></script> -->

    <!-- <script src="assets/js/bootstrap.bundle.min.js"></script> -->

<!-- 
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script> -->

    <!-- <script src="assets/plugins/datetimepicker/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="assets/js/app.js"></script> -->
</body>



</html>