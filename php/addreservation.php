<?php
require( "config.php" );
require( "randomString.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$SUCCESS = "<script>alert('Reservation success');window.location='../user/user-reservation-status.php';</script>";
$FAILED = "<script>alert('Reservation fail');window.history.back();</script>";

// if(!isset($_SESSION['USER_ID']) && empty($_SESSION['USER_ID'])) {
// 	header("Location: " . $REDIRECT_LOGIN );
// }


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  

if (isset($_POST['submit'])) {
  $eventname=$_POST['eventname']; 
  $datetimefrom=$_POST['datetimefrom']; 
  $datetimeto=$_POST['datetimeto']; 
  $facid=$_POST['facid']; 
  $userid=$_SESSION['userid'];


$InsertRS__query="INSERT INTO `reservation` (`eventname`, `datetimefrom`, `datetimeto`, `userid`, `facid`) 
VALUES ('$eventname', '$datetimefrom', '$datetimeto', '$userid', '$facid');";

$InsertRS = $connection->query($InsertRS__query);
  if ($InsertRS) {
  	echo $SUCCESS;
    }
  else {
  	echo $FAILED;
  }
}

?>