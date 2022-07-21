<?php
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Pagination test</title>
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png"> -->
<!-- <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet"> -->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">

	<link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">

	<link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">

	<link rel="stylesheet" href="assets/css/select2.min.css">

	<link rel="stylesheet" href="assets/css/style.css">

</head>

<body>
	<div class="main-wrapper">
		
		<div class="page-wrapper">
			<div class="table-responsive">
				<table class="table custom-table datatable">
					<thead class="thead-light">
						<tr>
							<th>ID </th>
							<th>Amount </th>
							<th>Month </th>
							<th>Type</th>
							<th class="text-right">Action</th>
						</tr>
					</thead>
					<tbody>

						<?php
						require('config.php');
						$sql = "SELECT * from creadit ORDER BY
                                    id DESC ";
						$result = mysqli_query($conn, $sql);
						foreach ($result as $key => $data) {
						?>
							<tr>
								<td>
									<h2><a href="#" class="avatar text-white"><?php echo $data['id']; ?></a></h2>

								</td>
								<td><?php echo $data['amount']; ?></td>
								<td><?php echo $data['month']; ?></td>
								<td><?php echo $data['clints']; ?></td>
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




	<script src="assets/js/jquery-3.6.0.min.js"></script>

	<script src="assets/js/bootstrap.bundle.min.js"></script>
	<script src="assets/js/jquery.slimscroll.js"></script>

	<script src="assets/js/jquery.dataTables.min.js"></script>
	<!-- <script src="assets/js/dataTables.bootstrap4.min.js"></script> -->
<!-- 
	<script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script> -->

	<script src="assets/js/app.js"></script>
</body>

</html>