<?php
require( "config.php" );
include "../php/check_access_user.php";

// *** Validate request to login to this site.
// if (!isset($_SESSION)) {
//   session_start();
// }

$SUCCESS = "<script>alert('Cancellation success');window.location='../user/user-reservation-status.php';</script>";
$FAILED = "<script>alert('Cancellation failed);window.location='../user/user-reservation-status.php';</script>";





$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $id=$_GET['id'];
$DeleteRS__query="DELETE FROM `reservation` WHERE `id` = $id";
$DeleteRS = $connection->query($DeleteRS__query);

  if ($DeleteRS) {
  	echo $SUCCESS;
    }
  else {
  	echo $FAILED;
  }
?>