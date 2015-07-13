<?php
require( "../php/config.php" );
include "../php/check_access_user.php";
// *** Validate request to login to this site.
// if (!isset($_SESSION)) {
//   session_start();
// }


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$id = $_GET['id'];
$View__query="SELECT r.id, r.eventname, r.datetimefrom, r.datetimeto, r.datecreated, p.name, u.fullname, u.nomatrik FROM reservation r, place p, user u WHERE r.facid = p.facid AND r.userid = u.id AND r.id = $id";
$ViewRS = $connection->query($View__query);
$row = mysqli_fetch_assoc($ViewRS);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Reservation Slip</title>
	<style type="text/css">
		#header{
			max-height: 150px;
		}

		.slip-content{
			width: 100%;
			margin-left: auto;
			margin-right: auto;
		}

		.detail-inner{
			padding-left: 25%;
			text-align: left;
			width: 50%;
			margin: 0 auto;
		}

		.printbtn{
			text-align: center;
			width: 50%;
			 margin: 0 auto;
		}

		.logo{
			text-align: center;
		}
	</style>
	<script type="text/javascript" src="../js/print.js"></script>
</head>
<body>
	<div class="container">
		<div class="detail" >
		<div class="slip-content" id="printable">
			<div class="logo">
			<img id="header" src="../images/uitm_logo.jpg">
</div>
			<div class="detail-inner" >
				<h1>Reservation Slip</h1>
				<p>Reference Id : <?php echo $row['id'] ?></p>
				<p>Full name: <?php echo ucwords($row['fullname']) ?></p>
				<p>Student/Staff ID : <?php echo strtoupper($row['nomatrik']) ?></p>
				<p>Facility : <?php echo $row['name'] ?></p>
				<p>Event Name: <?php echo $row['eventname'] ?></p>
				<p>Start: <?php echo date("d/m/Y  h:i A", strtotime($row['datetimefrom']))?></p>
				<p>End: <?php echo date("d/m/Y  h:i A", strtotime($row['datetimeto'])) ?></p>
			

			</div>
		</div>
		<div class="printbtn">
				<button onclick="printDiv('printable');">Print slip</button>
				<button onclick="window.close()">Close</button>
			</div>
			

		</div>

	</div>

</body>
</html>
