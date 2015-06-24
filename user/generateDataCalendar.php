<?php

header('Content-Type: application/json');
require( "../php/config.php" );
include "../php/check_access_user.php";
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if(isset($_GET['venue'])){
	$venue = $_GET['venue'];	
}else{
	$venue = "f01";
}
	
$View__query="SELECT * FROM `reservation` WHERE `facid` = '$venue' AND status = 'Diluluskan'";
							
// Check connection
$data_points = array();
$ViewRS = $connection->query($View__query);
	while($row = mysqli_fetch_assoc($ViewRS)){
        $point = array("title" => $row['eventname'] , "start" => date("Y-m-d h:i:s", strtotime($row['datetimefrom'])), "end" => date("Y-m-d h:i:s", strtotime($row['datetimeto'])));
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);




mysqli_close($connection);

?>