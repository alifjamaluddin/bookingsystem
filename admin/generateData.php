<?php

header('Content-Type: application/json');
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


$month = $_GET['month'];	
$View__query="SELECT count(r.id) as 'usage', p.name from reservation r, place p 
WHERE r.facid = p.facid 
AND month(datetimefrom) = $month 
AND ischeckin = 'true'
GROUP BY r.facid";
							
// Check connection
$data_points = array();
$ViewRS = $connection->query($View__query);
	while($row = mysqli_fetch_assoc($ViewRS)){
        $point = array("label" => $row['name'] , "y" => $row['usage']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);




mysqli_close($connection);

?>