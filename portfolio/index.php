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

				<!-- <ul class="nav float-left">
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
				</ul> -->

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
							<h3 class="page-title mb-0">Dashboard</h3>
						</div>
						<!-- <div class="col-md-6">
							<ul class="breadcrumb mb-0 p-0 float-right">
								<li class="breadcrumb-item"><a href="index.html"><i class="fas fa-home"></i> Home</a>
								</li>
								<li class="breadcrumb-item"><span>Dashboard</span></li>
							</ul>
						</div> -->
					</div>
				</div>

				<div class="row">
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget dash-widget5">
							<span class="float-left"><img src="assets/img/dash/dash-1.png" alt="" width="80"></span>
							<div class="dash-widget-info text-right">
								<span>Recived </span>
								<?php
								include "config.php";
								$sum_creadit = NULL;
								$sql = "SELECT * from creadit";
								$result = mysqli_query($conn, $sql);
								foreach ($result as $key => $data) {
									$sum_creadit += $data['amount'];
								}
								?>
								<h5>Rs <?php echo $sum_creadit; ?>.00 </h5>

							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
						<div class="dash-widget dash-widget5">
							<div class="dash-widget-info text-left d-inline-block">
								<span>You Gave</span>
								<?php


								include "config.php";
								$sub_debit = NULL;
								$sql = "SELECT * from debit";
								$result = mysqli_query($conn, $sql);
								foreach ($result as $key => $data1) {
									$sub_debit += $data1['amount'];
								}
								?>
								<h5>Rs <?php echo $sub_debit; ?>.00</h5>

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
									<span><?php echo "Total Loss" ?></span>
								<?php } else {
								?>
									<span><?php echo "Total Profit" ?></span>
								<?php } ?>
								<h5>Rs <?php echo $sum_creadit - $sub_debit ?>.00</h5>
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
				</div>


				<!-- chart start  -->
				<div>
					<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
					<script type="text/javascript">
						google.charts.load('current', {
							'packages': ['bar']
						});
						google.charts.setOnLoadCallback(drawChart);

						function drawChart() {
							var data = google.visualization.arrayToDataTable([
								['month', 'Sales', 'Expenses', 'Profit'],
								<?php
								include "config.php";
								$sql = "SELECT * from month ";
								$result = mysqli_query($conn, $sql);
								while ($data = $result->fetch_assoc()) {
									$month = $data["month"];

								?>['<?php echo $month ?>',
										<?php
										$sql = "SELECT * from creadit where month='$month' ";
										$result1 = mysqli_query($conn, $sql);
										$sum = NULL;
										foreach ($result1 as $key => $data) {
											$sum += $data['amount'];
										}
										echo $sum ?>,
										<?php
										$sql1 = "SELECT * from debit where month='$month' ";
										$result1 = mysqli_query($conn, $sql1);
										$sum1 = NULL;
										foreach ($result1 as $key => $data) {
											$sum1 += $data['amount'];
										}
										echo $sum1 ?>,

										<?php echo $sum - $sum1 ?>
									],
								<?php } ?>
							]);

							var options = {
								chart: {
									title: 'Company Performance',
									subtitle: 'Sales, Expenses, and Profit: january-December',
								},
								bars: 'vertical' // Required for Material Bar Charts.
							};

							var chart = new google.charts.Bar(document.getElementById('barchart_material'));

							chart.draw(data, google.charts.Bar.convertOptions(options));
						}
					</script>
					<div id="barchart_material" style="width: 100%; height: 500px;"> </div>
				</div>
				<!-- chart end-->


				<!-- sechond chart is start here  -->
				<div>

					<script type="text/javascript">
						google.charts.load('current', {
							'packages': ['corechart']
						});
						google.charts.setOnLoadCallback(drawChart);

						function drawChart() {
							var data = google.visualization.arrayToDataTable([
								['Month', 'Profit'],

								<?php
								include "config.php";
								$sql = "SELECT * from month ";
								$result = mysqli_query($conn, $sql);
								while ($data = $result->fetch_assoc()) {
									$month = $data["month"];

								?>['<?php echo $month ?>',
										<?php
										$sql = "SELECT * from creadit where month='$month' ";
										$result1 = mysqli_query($conn, $sql);
										$sum = NULL;
										foreach ($result1 as $key => $data) {
											$sum += $data['amount'];
										}
										
										$sql1 = "SELECT * from debit where month='$month' ";
										$result1 = mysqli_query($conn, $sql1);
										$sum1 = NULL;
										foreach ($result1 as $key => $data) {
											$sum1 += $data['amount'];
										}
										echo $sum-$sum1 ?>
										
									],
								<?php } ?>

							]);

							var options = {
								title: 'Company Performance',
								hAxis: {
									title: 'Year',
									titleTextStyle: {
										color: '#333'
									}
								},
								vAxis: {
									minValue: 0
								}
							};

							var chart = new google.visualization.AreaChart(document.getElementById('chart_div'));
							chart.draw(data, options);
						}
					</script>

					<div id="chart_div" style="width: 100%; height: 500px;"></div>

				</div>
				<!-- second chart end here -->

				<div class="content container-fluid">
					<div class="content-page">
						<div class="row">
							<div class="col-md-12 mb-3">
								<div class="table-responsive">
									<table class="table custom-table datatable">
										<thead class="thead-light">
											<tr>
												<th>Id</th>
												<th>Month name </th>
												<th>Sale </th>
												<th>Expence</th>
												<th>Profit/Loss</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<?php
												$count = 1;
												$sql = "SELECT DISTINCT month from month ";
												$result = mysqli_query($conn, $sql);
												foreach ($result as $key => $data) {
													$value = $data['month']; //this loop echo the month name in the $value variable .
												?>
											<tr>
												<td>
													<h2><a href="#" class="avatar text-white"><?php echo $count ?></a><a href="exam-detail.html"> </a></h2>

												</td>
												<td><?php echo $value ?></td>
												<!--this is print the month value in table by loop -->

												<?php
													$sql = "SELECT * from creadit where month='$value' ";
													$result1 = mysqli_query($conn, $sql);
													$sum = NULL;
													foreach ($result1 as $key => $data) {
														$sum += $data['amount']; // the creadit value in the variable sum.
													} ?>

												<td><?php echo $sum ?></td>
												<!--this is print the amount in table by loop -->

												<?php
													$sql = "SELECT * from debit where month='$value' ";
													$result1 = mysqli_query($conn, $sql);
													$sum1 = NULL;
													foreach ($result1 as $key => $data) {
														$sum1 += $data['amount']; //the debit value in the variable sum1.
													} ?>

												<td><?php echo $sum1 ?></td>

												<td><?php echo $sum - $sum1 ?></td>
											</tr>
										<?php
													$count++;
												} ?>
										</tr>

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


	<script src="assets/js/jquery-3.6.0.min.js"></script>
	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/apexcharts.js"></script>
	<script src="assets/js/chart-data.js"></script>

	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>

	<script src="assets/js/fullcalendar.min.js"></script>
	<script src="assets/js/jquery.fullcalendar.js"></script>

	<script src="assets/plugins/morris/morris.min.js"></script>
	<script src="assets/plugins/raphael/raphael-min.js"></script>


	<script src="assets/js/app.js"></script>
</body>


</html>