<?php
require( "config.php" );
require( "randomString.php" );

$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno()){
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{

  	$REQUIRED = "<script>alert('Please fill all required fields');window.history.back();</script>";
$SUCCESS = "<script>window.location.href = 'validationsuccess.php';</script>";

 if(isset($_POST['submit'])){
 	if($_POST['email']!=""){
 		$email = $_POST['email'];
 		  $Validate__query="SELECT * FROM user WHERE email = '$email'";
		  $validateRS = $connection->query($Validate__query);
		  $numrow =  mysqli_num_rows($validateRS);
		  if($numrow == 1){
		  	send_email($email);
		  	echo $SUCCESS;
		  }

 	}else{
 		echo $REQUIRED;
 	}
 }

  }



function sendemail($email){
$secretkey = generateRandomString(20);

// multiple recipients
$to  = $email;

// the message
$msg = "Please go to this link to reset your password http://localhost/bookingsystem/resetpassword.php?secretkey=".$secretkey;

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail($to,"Password Reset",$msg);
 }
?>