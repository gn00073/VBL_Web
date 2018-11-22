<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);


function getKPI_Values( $TA, $KPI, $Date) {


require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$Filter = "WHERE Status='1'";


	$Filter=$Filter . "AND TA='$TA' AND KPI='$KPI' AND KPI_Date='$Date'";
	

$sql = "SELECT SUM(KPI_Value) FROM db_kpi $Filter";

$result = $conn->query($sql);
?>


<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		
		
		$KPI_Val = $row["SUM(KPI_Value)"];
		    return $KPI_Val;
	}
}

else {
    echo "0 results";
}
$conn->close();
}



function getKPI_ValuesForRSM_KPI( $RSM,$TA, $KPI, $Date) {


require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$Filter = "WHERE Status='1'";


	$Filter=$Filter . "AND TA='$TA' AND KPI='$KPI' AND KPI_Date='$Date' AND RSM='$RSM'";
	

$sql = "SELECT SUM(KPI_Value) FROM rsm_kpi $Filter";

$result = $conn->query($sql);
?>


<?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		
		
		$KPI_Val = $row["SUM(KPI_Value)"];
		    return $KPI_Val;
	}
}

else {
    echo "0 results";
}
$conn->close();
}




?>
