<?php

error_reporting(E_ALL & ~E_NOTICE);
$Year_Selected=$_GET['Year'];
$Month_Selected=$_GET['Month'];
$RSM_Selected=$_GET['RSM'];
$ASM_Selected=$_GET['ASM'];
$KPI_Date_Selected=$_GET['KPI_Date'];
$KPI_Selected=$_GET['KPI'];
$TA_Selected=$_GET['TA'];



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

if (isset($_GET['RSM']))
{
	$Filter=$Filter . "AND RSM='$RSM_Selected'";
	
}
if (isset($_GET['ASM']))
{
	$Filter=$Filter . "AND ASM='$ASM_Selected'";
	
}
if (isset($_GET['KPI_Date']))
{
	$Filter=$Filter . "AND KPI_Date='$KPI_Date_Selected'";
	
}
if (isset($_GET['KPI']))
{
	$Filter=$Filter . "AND KPI='$KPI_Selected'";
	
}
if (isset($_GET['TA']))
{
	$Filter=$Filter . "AND TA='$TA_Selected'";
	
}




$sql = "SELECT * FROM RSM_kpi $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table border='1'>";
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
		echo "TA";
		echo "</td>";

		echo "<td>";
		echo "KPI_Date";
		echo "</td>";

		
		echo "<td>";
		echo  "RSM";
		echo "</td>";

		echo "<td>";
		echo  "ASM";
		echo "</td>";

		echo "<td>";
		echo  "KPI";
		echo "</td>";

		echo "<td>";
		echo  "KPI_Description";
		echo "</td>";

		echo "<td>";
		echo  "KPI_Value";
		echo "</td>";

	echo "</tr>";

    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		//echo  $row["KPI_Year"];
		echo "</td>";

		
		echo "<td>";
		//echo  $row["KPI_Month"];
		echo "</td>";

		
		echo "<td>";
		//echo  $row["TA"];
		echo "</td>";

		echo "<td>";
		//echo  $row["KPI_Date"];
		echo "</td>";

		echo "<td>";
		//echo  $row["RSM"];
		echo "</td>";

		echo "<td>";
		//echo  $row["ASM"];
		echo "</td>";

		echo "<td>";
		//echo  $row["KPI"];
		echo "</td>";

		echo "<td>";
		//echo  $row["KPI_Description"];
		echo "</td>";

		echo "<td>";
		//echo  $row["KPI_Value"];
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
