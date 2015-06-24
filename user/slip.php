<?php
require( "../php/config.php" );

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
			max-height: 200px;
		}

		.detail{
			margin-left: 30px;
		}

		.detail-inner{
			margin-left: 45px;
		}
	</style>
	<script type="text/javascript" src="../js/print.js"></script>
</head>
<body>
<div class="container">
<button onclick="printDiv('printable');">Print slip</button>
<div class="detail" id="printable">
<img id="header" src="../images/uitm_logo.jpg">
<div class="detail-inner">
	<p>Reference Id : <?php echo $row['id'] ?></p>
<p>Full name: <?php echo ucwords($row['fullname']) ?></p>
<p>Student/Staff ID : <?php echo strtoupper($row['nomatrik']) ?></p>
<p>Facility : <?php echo $row['name'] ?></p>
<p>Event Name: <?php echo $row['eventname'] ?></p>
<p>Start: <?php echo date("d/m/Y  h:i A", strtotime($row['datetimefrom']))?></p>
<p>End: <?php echo date("d/m/Y  h:i A", strtotime($row['datetimeto'])) ?></p>
</div>

</div>
</div>

</body>
</html>
