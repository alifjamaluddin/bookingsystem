<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<meta content="initial-scale=1.0, width=device-width" name="viewport">
	<title>Booking system</title>

	<!-- css -->
	<link href="../css/base.min.css" rel="stylesheet">
	<link href="../css/custom.css" rel="stylesheet">
<link href='../css/fullcalendar.css' rel='stylesheet' />
<link href='../css/fullcalendar.print.css' rel='stylesheet' media='print' />
<script src='../js/moment.min.js'></script>
<script src='../js/jquery.min.js'></script>
<script src='../js/fullcalendar.min.js'></script>
<script src='../js/generateCalendar.js'></script>
	<!-- favicon -->
	<!-- ... -->

	<!-- ie -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
			<![endif]-->


<style>
	

</style>

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
				<a class="header-logo" href="index.php">Booking System</a>
				
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
						<h1 class="heading">Calendar</h1>
					</div>
				</div>
				<div class="container-inner searchbox">
					<div class="container">
						<div class="tile-wrap">
							<div class="tile">
								<form method="get" action="admin-calendar.php"> 
								<!-- <div class="pull-left tile-side">
									<div class="avatar avatar-blue avatar-sm">
										<span class="icon icon-search"></span>
									</div>
								</div> -->
								<div class="tile-action tile-action-show">
									<ul class="nav nav-list pull-right">
										<li>
											<div class="form-group-btn">
												<button class="btn btn-blue waves-button waves-light waves-effect" type="submit">View Calendar</button>
											</div>
										</li>
									</ul>
								</div>
								<div class="tile-inner">

									<select class="form-control" id="input-select" name="venue" onchange="" size="1">
								   <option value="f01">Bilik Persatuan 1</option>
								   <option value="f02">Bilik Persatuan 2</option>
								   <option value="f03">Bilik Persatuan 3</option>
								   <option value="f04">Bilik Persatuan 4</option>
								   <option value="f05">Bilik Persatuan 5</option>
								   <option value="f06">Bilik Persatuan 6</option>
								   <option value="f07">Bilik Seminar 1</option>
								   <option value="f08">Bilik Seminar 2</option>
								   <option value="f09">Pingpong table court</option>
								   <option value="f10">Futsal court</option>
								   <option value="f11">Basketball court</option>
								   <option value="f12">Volleyball court</option>
								   <option value="f13">Takraw court</option>
								   <option value="f14">Tennis court</option>
								   <option value="f15">Netball court</option>
								   <option value="f16">Football field</option>								
								   </select>
								    
								</select>
								</div>
							</form>
						</div>
					</div>
				</div>

			</div>
<div id='calendar'></div>
				
			</div>
			
			<!-- FOOTER -->
			<?php include "template/footer.php"; ?>

			<!-- // <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
			<script src="../js/base.min.js" type="text/javascript"></script>
		</body>
		</html>