<?php
require( "config.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$SUCCESS = "<script>alert('User updated');window.location='../admin';</script>";
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

  $password=$_POST['password']; 
  $fullname=$_POST['fullname']; 
  $username=$_POST['username']; 
  $email=$_POST['email']; 
  $userid = $_SESSION['userid'];

if($password!="" && $fullname!="" && $username!="" && $email!=""){
  $InsertRS__query="UPDATE `admin` SET `username` = '$username', `password` = MD5('$password'), `name` = '$fullname', `email` = '$email' WHERE `id` = $userid  ";
// echo "<script>alert('$InsertRS__query');</script>";
$InsertRS = $connection->query($InsertRS__query);
  if ($InsertRS) {
    echo $SUCCESS;
    }
  else {
    echo $FAILED;
  }
}else{
  echo $REQUIRED;
}


}



?>