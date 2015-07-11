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
				<h1 class="heading">Register User</h1>
			</div>
		</div>
				<div class="container-inner">
					<a class="btn btn-yellow waves-button waves-effect pull-right" href="form-user.php">User registration</a>
				</div>

				<div class="container-inner searchbox">
					<div class="container">
						<div class="tile-wrap">
							<div class="tile">
								<form method="post"> 
								<!-- <div class="pull-left tile-side">
									<div class="avatar avatar-blue avatar-sm">
										<span class="icon icon-search"></span>
									</div>
								</div> -->
								<div class="tile-action tile-action-show">
									<ul class="nav nav-list pull-right">
										<li>
											<div class="form-group-btn">
												<button class="btn btn-blue waves-button waves-light waves-effect" type="submit" name="search">Search</button>
											</div>
										</li>
									</ul>
								</div>
								<div class="tile-inner">

									<input class="form-control" id="input-text" type="text" name="carian" placeholder="Search using matric number">
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>


			<div class="container-inner">
				<div class="container">
					<?php 


					if(isset($_POST['search'])){
						$nomatrik = $_POST['carian'];

						$View__query="SELECT * FROM `user` where nomatrik = '$nomatrik'";
						$ViewRS = $connection->query($View__query);
						$row = mysqli_fetch_assoc($ViewRS);
						$rowNo = $ViewRS->num_rows;

						if($rowNo > 0){
						echo '
						<div class="col-lg-6 col-sm-6">
							<div class="card">
								<aside class="card-side card-side-img">
									<img alt="alt text" src="../images/samples/portrait.jpg">
								</aside>
								<div class="card-main">
									<div class="card-inner">
										<p class="card-heading">'.strtoupper($row['fullname']).'</p>
										<p>
											<small>Matrix number</small> '.strtoupper($row['nomatrik']).'<br>
											<small>IC number</small> '.$row['noic'].'<br>
											<small>Phone number</small> '.$row['notel'].'<br>
											<small>Email</small> '.$row['email'].'<br>
											<small>Role</small> '.strtoupper($row['role']).'<br>
											<a href="form-edit-user.php?id='.$row['id'].'" class="btn btn-flat btn-yellow waves-button waves-effect pull-left">Update User</a>
											<a href="../php/deleteuser.php?id='.$row['id'].'" class="btn btn-flat btn-red waves-button waves-effect pull-left">Delete User</a> 

										</p>
									</div>
								</div>
							</div>
						</div>
						';
					}else{
						echo '<p>Tiada dalam senarai</p>';
					}

					}
					?>



				</div>
			</div>


				
			</div>
			
			<!-- FOOTER -->
			<?php include "template/footer.php"; ?>

			<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
			<script src="../js/base.min.js" type="text/javascript"></script>
		</body>
		</html>