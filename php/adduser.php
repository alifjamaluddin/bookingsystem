<?php
require( "config.php" );
require( "randomString.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$SUCCESS = "<script>alert('User registration success');window.location='../admin/admin-registration.php';</script>";
$FAILED = "<script>alert('User registration fail');window.history.back();</script>";
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
   $username=$_POST['nomatrik']; 
  $password=$_POST['noic']; 
  $nomatrik=$_POST['nomatrik']; 
  $noic=$_POST['noic']; 
  $fullname=$_POST['fullname']; 
  $email=$_POST['email']; 
  $notel= ""; //$_POST['notel']; 
  $role =$_POST['role'];
  // $confirmation = generateRandomString(20);

  $InsertRS__query="INSERT INTO `user` (`username`, `password`, `fullname`, `email`, `noic`, `nomatrik`, `role`,`notel`) 
VALUES ('$username', MD5('$password'), '$fullname', '$email', '$noic', '$nomatrik', '$role','$notel')";
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