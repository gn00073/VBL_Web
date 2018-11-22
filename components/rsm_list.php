<?php

require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
//$MIS_User= mysqli_real_escape_string($conn,$_GET['User']);


$Super_RSM= mysqli_real_escape_string($conn,$_GET['Super_RSM']);

$Filter = "WHERE Status='1'";

if (isset($_GET['Super_RSM']))
{
	$Filter=$Filter . "AND Super_RSM='$Super_RSM'";
	
	
}




$sql = "SELECT RSM FROM rsm $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo  $row["RSM"];
		echo "</td>";
		echo "</tr>";
	}
}

else {
    echo "0 results";
}
$conn->close();
echo "</table>";
?>
