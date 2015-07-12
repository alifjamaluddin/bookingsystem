<?php
require( "config.php" );
include "../php/sendsms.php";

// *** Validate request to login to this site.
// if (!isset($_SESSION)) {
//   session_start();
// }

$SUCCESS = "<script>alert('Reservation approved');window.location='../admin/admin-reservation.php';</script>";
$FAILED = "<script>alert('Reservation approve failed');window.location='../admin/admin-reservation.php';</script>";


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

$ApproveRS__query="UPDATE `reservation` SET `status` = 'Diluluskan' WHERE `id` = $id";
$ApproveRS = $connection->query($ApproveRS__query);

  if ($ApproveRS) {
    $Select__Query = "SELECT r.id, r.eventname, r.datetimefrom, r.datetimeto, r.datecreated, p.name, u.fullname, u.nomatrik, u.notel FROM reservation r, place p, user u WHERE r.facid = p.facid AND r.userid = u.id AND r.id = $id";
    $SelectRS = $connection->query($Select__Query);
    $row = mysqli_fetch_assoc($SelectRS);
    $message = '
    Your reservation has been approved. 
    Details of the reservation: 
    Reserved by: '.$row['fullname'].'
    Event name : '.$row["eventname"].' 
    Facility : '.$row["name"].' 
    Start: '.date("d/m/Y  h:i A", strtotime($row["datetimefrom"])).'
    End: '.date("d/m/Y  h:i A", strtotime($row["datetimeto"])).'

    ';
    $notel = "6".$row['notel'];
    // echo $notel;
    // echo $message;
    gw_send_sms($notel, $message);
  	echo $SUCCESS;
    }
  else {
  	echo $FAILED;
  }





?>