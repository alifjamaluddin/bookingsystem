<?php
require( "../php/config.php" );
include "../php/check_access_admin.php";

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Student Activity Center Reservation System</title>

	<!-- css -->
	<link href="../css/base.min.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">

	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body class="avoid-fout">
			<div class="avoid-fout-indicator avoid-fout-indicator-fixed">
				<div class="progress-circular progress-circular-alt progress-circular-center">
					<div class="progress-circular-wrapper">
						<div class="progress-circular-inner">
							<div class="progress-circular-left">
								<div class="progress-circular-spinner"></div>
							</div>
							<div class="progress-circular-gap"></div>
							<div class="progress-circular-right">
								<div class="progress-circular-spinner"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<header class="header">

			<ul class="nav nav-list pull-left">
			<li>
				<a data-toggle="menu" href="#menu">
					<span class="access-hide">Menu</span>
					<span class="icon icon-menu icon-lg"></span>
				</a>
			</li>
		</ul>
				<a class="header-logo" href="index.php">Student Activity Center Reservation System</a>
				
				<ul class="nav nav-list pull-right">
					<li>
						<a data-toggle="menu" href="#profile">
							<span class="access-hide">Sign In</span>
							<span class="avatar avatar-sm"><img alt="alt text for John Smith avatar" src="../images/users/avatar-001.jpg"></span>
						</a>
					</li>
				</ul>
			</header>
			<?php include "../template/admin-menu.php"; ?>
			<?php include "../template/admin-profile.php"; ?>

						<div class="content">
				<div class="content-heading">
					<div class="container">
						<h1 class="heading">Reservation Status</h1>
					</div>
				</div>
				<div class="content-inner">
					<div class="container">
						<div class="card-wrap">
							<div class="row">

								<?php 
								$View__query="SELECT r.id, r.eventname, r.datetimefrom, r.datetimeto, r.datecreated, p.name FROM reservation r, place p WHERE r.facid = p.facid AND `status` = 'Dalam proses' ORDER BY  datecreated DESC";
								$ViewRS = $connection->query($View__query);

								while($row = mysqli_fetch_assoc($ViewRS)){
									echo '
									<div class="col-lg-3 col-md-4 col-sm-6">
										<div class="card card-alt">
											<div class="card-main">
												<div class="card-inner">
												<p class="card-heading text-alt">'.$row['eventname'].'</p>
													<p>
														<small>Place : </small>' .$row['name'].' <br>
														<small>From : </small> '.date("d/m/Y  h:i A", strtotime($row['datetimefrom'])).'<br>
														<small>To : </small> '.date("d/m/Y  h:i A", strtotime($row['datetimeto'])).' <br>
														<small>Submit date : '.date("d/m/Y  h:i A", strtotime($row['datecreated'])).'</small>  <br><br>
														
														<a href="../php/approvereserve.php?id='.$row['id'].'" class="btn btn-green">Approve</a>
														<a href="../php/cancelreserve.php?id='.$row['id'].'" class="btn btn-red">Cancel</a>
													</p>
												</div>

											</div>
										</div>
									</div>
									';

								}
								?>

							</div>
						</div>
					</div>
				</div>
				
			</div>
			
			<!-- FOOTER -->
			<?php include "template/footer.php"; ?>

			<script src="../js/jquery.min.js"></script>
			<script src="../js/base.min.js" type="text/javascript"></script>
		</body>
		</html>