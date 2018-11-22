
<html>

<?php

require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 


$sql = "SELECT * FROM KPI";
$result = $conn->query($sql);
?>

<table name="KPI">
<tr>
<th>KPI Date</th><th>RSM</th><th>ASM</th><th>LRB RD</th><th>CSD RD</th><th>Water RD</th><th>JD RD</th><th>BC</th><th>N/AC</th><th>PET</th><th>M/Dew</th><th>FMO 1</th><th>FMO 2</th>
</tr>

<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo $row["KPI_Date"];
		echo "</td>";
		echo "<td>";
		echo $row["RSM"];
		echo "</td>";
		echo "<td>";
		echo $row["ASM"];
		echo "</td>";
		echo "<td>";
		echo $row["LRB_RD"];
		echo "</td>";
		echo "<td>";
		echo $row["CSD_RD"];
		echo "</td>";
		echo "<td>";
		echo $row["Water_RD"];
		echo "</td>";
		echo "<td>";
		echo $row["JD_RD"];
		echo "</td>";
		echo "<td>";
		echo $row["BC"];
		echo "</td>";
		echo "<td>";
		echo $row["NAC"];
		echo "</td>";
		echo "<td>";
		echo $row["PET"];
		echo "</td>";
 		echo "<td>";
		echo $row["MDew"];
		echo "</td>";     
    	echo "<td>";
		echo $row["FMO1"];
		echo "</td>";
		echo "<td>";
		echo $row["FMO2"];
		echo "</td>";

	echo "</tr>";
	}
}

else {
    echo "0 results";
}
$conn->close();


?>
</html>