<?php
include "../php/check_access_user.php";
include "../php/config.php";
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
						<h1 class="heading">Term and Conditions</h1>
					</div>
				</div>
				
				<div class="container">
<li><p>	Reservation must be done at least 3 days before.</p></li>
<li><p>	Reservation can be cancel within only 2days after approval.</p></li>
<li><p>	Users who have made an online reservation required submitting printed slip from a computer for delivery to a supervisor or staff councilas proof of reservation.</p></li>
<li><p>	User must update their personal details (Phone no).</p></li>
<li><p>	First come first serve basis.</p></li>
<li><p>	User is advised to come on time according to reservation.</p></li>
<li><p>	User must be responsible on the decision of reservation that have been made.</p></li>
<li><p>	User must maintain the cleanliness of the facility.</p></li>
<li><p>	All of the Student Activity Center, or any portion thereof, may be closed and/or may have reservations cancelled, at the discretion of the University or building administration. Such occurrences may include, but are not limited to emergency or scheduled maintenance, special events, repairs or interruption of utility services, dangerous conditions, etc.</p></li>
<h5>	Hours of operation:</h5>



<div class="table-responsive">
							<table class="table" title="Default Tabl">
								<thead>
									<tr>
										<th>Venue</th>
										<th>Time</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Bilik Persatuan Pelajar</td>
										<td>8.00am to 6.30pm<br>8.00pm to 10.00pm</td>
									</tr>
									<tr>
										<td>Courts</td>
										<td>4.00pm to 6.45pm</td>
									</tr>
									
								</tbody>
							</table>
						</div>
				</div>




			</div>
			
			<!-- FOOTER -->
			<?php include "template/footer.php"; ?>

			<script src="../js/jquery.min.js"></script>
			<script src="../js/base.min.js" type="text/javascript"></script>
		</body>
		</html>