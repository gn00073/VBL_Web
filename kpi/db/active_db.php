<?php

require '../../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
$RSM= mysqli_real_escape_string($conn,$_GET['RSM']);

$Filter = "WHERE Status='1'";

if (isset($_GET['RSM']))
{
	$Filter=$Filter . "AND RSM='$RSM'";
	
	
}


$sql = "SELECT * FROM db_master $Filter";

$result = $conn->query($sql);
?>


<?php
echo "<table>";
echo "<tr>";
echo "<th>RSM</th>";
echo "<th>ASM</th>";
echo "<th>Area</th>";
echo "<th>Code</th>";
echo "<th>Distributor</th>";
echo "<th>DB Type</th>";
echo "<th>Type</th>";
echo "<th>Status</th>";
echo "<th>CSD RD</th>";
echo "<th>Water RD</th>";
echo "<th>BC</th>";
echo "<th>Pepsi Black</th>";
echo "<th>FMO</th>";

echo "</tr>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		echo "<tr>";
		echo "<td>";
		echo  $row["RSM"];
		echo "</td>";
		echo "<td>";
		echo  $row["ASM"];
		echo "</td>";
		echo "<td>";
		echo  $row["Area"];
		echo "</td>";
		echo "<td>";
		echo  $row["Code"];
		echo "</td>";
		echo "<td>";
		echo  $row["Distributor"];
		echo "</td>";
		echo "<td>";
		echo  $row["DB Type"];
		echo "</td>";
		echo "<td>";
		echo  $row["Type"];
		echo "</td>";
		echo "<td>";
		echo  $row["Status"];
		echo "</td>";
		echo "<td>";
		echo  "";
		echo "</td>";
		echo "<td>";
		echo  "";
		echo "</td>";
		echo "<td>";
		echo  "";
		echo "</td>";
		echo "<td>";
		echo  "";
		echo "</td>";
		echo "<td>";
		echo  "";
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
