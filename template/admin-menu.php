<?php

$conn = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$noti__query = "SELECT COUNT(*) as noti from reservation where isread = 0";
$notiRS = $conn->query($noti__query);
$row = mysqli_fetch_assoc($notiRS);
$notinumber = $row['noti'];
?>	
	<nav class="menu" id="menu">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-content">
					<a class="menu-logo" data-toggle="menu" href="#menu">Menu</a>
					<ul class="nav">
						<li>
							<a href="admin-calendar.php">Calendar</a>
						</li>
						<li>
							<a href="admin-reservation.php">Reservation <span class="notification" style="-moz-border-radius: 30px; /* or 50% */border-radius: 30px; /* or 50% */background-color: black;color: white;text-align: center;"><?php if($notinumber > 0){echo $row['noti'];} ?></span></a>
						</li>
						<li>
							<a href="admin-checkin.php">Check In</a>
						</li>
						<li>
							<a href="admin-registration.php">Registration</a>
						</li>
						<li>
							<a href="admin-report.php">Statistic</a>
						</li>
					</ul>

				</div>
			</div>
		</div>
	</nav>