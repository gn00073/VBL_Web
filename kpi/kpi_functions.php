<?php
error_reporting(E_ALL & ~E_NOTICE);
function getKPI_Values($ASM, $TA, $KPI, $Year, $Month, $Date) {


require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
//$ASM="Suhir";
//$KPI="OpenStock";

$Filter = "WHERE Status='1'";


	$Filter=$Filter . "AND ASM='$ASM' AND KPI='$KPI' AND TA='$TA'";
	

		
	if (!empty($Year)) {
		
	$Filter = $Filter ." AND KPI_Year='$Year' AND KPI_Month='$Month'";
	
	}
	if(!empty($Date)){
		$Filter = $Filter ." AND KPI_Date='$Date'";
	}


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
