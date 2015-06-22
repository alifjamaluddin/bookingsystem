<?php
require( "config.php" );

// *** Validate request to login to this site.
// if (!isset($_SESSION)) {
//   session_start();
// }

$SUCCESS = "<script>alert('Reservation cancel');window.location='../admin/admin-reservation.php';</script>";
$FAILED = "<script>alert('Reservation cancel failed');window.location='../admin/admin-reservation.php';</script>";


// if(!isset($_SESSION['USER_ID']) && empty($_SESSION['USER_ID'])) {
// 	header("Location: " . $REDIRECT_LOGIN );
// }


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $id=$_GET['id'];

$CancelRS__query="UPDATE `reservation` SET `status` = 'Batal' WHERE `id` = $id";
$CancelRS = $connection->query($CancelRS__query);

  if ($CancelRS) {
  	echo $SUCCESS;
    // echo $CancelRS__query;
    }
  else {
  	echo $FAILED;
  }
?>