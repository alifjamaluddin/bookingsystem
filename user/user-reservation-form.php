<?php
require( "../php/config.php" );
include "../php/check_access_user.php";
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
			<?php include "../template/user-menu.php"; ?>
			<?php include "../template/user-profile.php"; ?>

			<div class="content">
				<div class="content-heading">
					<div class="container">
						<h1 class="heading">Reservation form</h1>
					</div>
				</div>
				<div class="content-inner">
					<div class="container">
						<form class="form" method="post" action="../php/addreservation.php" enctype="multipart/form-data">
							<fieldset>
								<legend class="col-lg-10 col-lg-offset-2 col-md-9 col-md-offset-3 col-sm-8 col-sm-offset-4">Reservation</legend>
								

								<div class="form-group">
									<div class="row">
										<div class="col-lg-2 col-md-3 col-sm-4">
											<label class="form-label" for="input-text">Event name</label>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-8">
											<input class="form-control" id="input-text" type="text" name="eventname" placeholder="Event name">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-lg-2 col-md-3 col-sm-4">
											<label class="form-label" for="input-text">Datetime from</label>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-8">
											<input class="form-control" id="input-text" type="datetime-local" name="datetimefrom">
										</div>
									</div>
								</div>

								<div class="form-group">
									<div class="row">
										<div class="col-lg-2 col-md-3 col-sm-4">
											<label class="form-label" for="input-text">Datetime to</label>
										</div>
										<div class="col-lg-4 col-md-6 col-sm-8">
											<input class="form-control" id="input-text" type="datetime-local" name="datetimeto">
										</div>
									</div>
								</div>

						<div class="form-group">
							<div class="row">
								<div class="col-lg-2 col-md-3 col-sm-4">
									<label class="form-label" for="input-text">Facilities</label>
								</div>
								<div class="col-lg-4 col-md-6 col-sm-8">
									<select class="form-control form-control-default" id="input-select" name="facid">

										<?php 
										$View__query="SELECT * FROM `place`";
										$ViewRS = $connection->query($View__query);
										while($row = mysqli_fetch_assoc($ViewRS)){
											echo '<option value="'.$row['facid'].'">'.$row['name'].'</option>';
										}
										?>
									</select>
								</div>
							</div>
						</div>


					</fieldset>



					<div class="form-group-btn">
						<div class="row">
							<div class="col-lg-4 col-lg-push-2 col-md-6 col-md-push-3 col-sm-8 col-sm-push-4">
								<button class="btn btn-blue waves-button waves-light waves-effect" type="submit" name="submit">Submit</button><a class="btn waves-button waves-effect" href="pengguna.php" >Cancel</a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- FOOTER -->
	<?php include "template/footer.php"; ?>

	<script src="../js/jquery.min.js"></script>
	<script src="../js/base.min.js" type="text/javascript"></script>
</body>
</html>