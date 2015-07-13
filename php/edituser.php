<?php
require( "config.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$SUCCESS = "<script>alert('User updated');window.location='../admin/admin-registration.php';</script>";
$FAILED = "<script>alert('User update failed');window.history.back();</script>";
$REQUIRED = "<script>alert('Please fill all required fields');window.history.back();</script>";


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

if($_POST['nomatrik']!="" && $_POST['noic']!="" && $_POST['fullname']!="" && $_POST['email']!=""){
 $nomatrik=$_POST['nomatrik']; 
  $password=$_POST['noic']; 
  $fullname=$_POST['fullname']; 
  $username=$_POST['nomatrik']; 
  $email=$_POST['email']; 
  $noic=$_POST['noic']; 
  $role=$_POST['role']; 
  // $notel=$_POST['notel']; 
  $id=$_POST['id'];


$InsertRS__query="UPDATE `user` SET `username` = '$username', `password` = MD5('$password'), `fullname` = '$fullname', `email` = '$email', `noic` = '$noic', `nomatrik` = '$nomatrik', `role` = '$role' WHERE `id` = $id ";
// echo "<script>alert('$InsertRS__query');</script>";
$InsertRS = $connection->query($InsertRS__query);
  if ($InsertRS) {
  	echo $SUCCESS;
    }
  else {
    // echo $FAILED;
  	echo $InsertRS__query;
  }
}else{
  echo $REQUIRED;
}
}



?>