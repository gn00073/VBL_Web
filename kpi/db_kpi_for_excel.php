<?php

error_reporting(E_ALL & ~E_NOTICE);
$Year_Selected=$_GET['Year'];
$Month_Selected=$_GET['Month'];



require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 


$Filter = "WHERE Status='1'";

if (isset($_GET['Year']))
{
	$Filter=$Filter . "AND KPI_Year='$Year_Selected'";
	
}
if (isset($_GET['Month']))
{
	$Filter=$Filter . "AND KPI_Month='$Month_Selected'";
	
}


$sql = "SELECT * FROM db_kpi $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row

echo "<tr>";
		echo "<td>";
		echo "KPI_Year";
		echo "</td>";

		
		echo "<td>";
		echo "KPI_Month";
		echo "</td>";


		echo "<td>";
		echo "KPI_Date";
		echo "</td>";

		
		echo "<td>";
		echo  "Area";
		echo "</td>";

		
		echo "<td>";
		echo  "DB_Code";
		echo "</td>";

		echo "<td>";
		echo  "DB_Name";
		echo "</td>";

		echo "<td>";
		echo  "KPI";
		echo "</td>";

		echo "<td>";
		echo  "KPI_Value";
		echo "</td>";

	echo "</tr>";

    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo  $row["KPI_Year"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["KPI_Month"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["KPI_Date"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Area"];
		echo "</td>";

		echo "<td>";
		echo  $row["DB_Code"];
		echo "</td>";

		echo "<td>";
		echo  $row["DB_Name"];
		echo "</td>";

		echo "<td>";
		echo  $row["KPI"];
		echo "</td>";

		echo "<td>";
		echo  $row["KPI_Value"];
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
