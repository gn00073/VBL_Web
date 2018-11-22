<?php

error_reporting(E_ALL & ~E_NOTICE);
$RSM=$_GET['RSM'];
$DB_Code=$_GET['DB_Code'];



require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 


$Filter = "WHERE Status='1'";

if (isset($_GET['RSM']))
{
	$Filter=$Filter . "AND RSM='$RSM'";
	
}
if (isset($_GET['DB_Code']))
{
	$Filter=$Filter . "AND DB_Code='$DB_Code'";
	
}


$sql = "SELECT * FROM distributor_base $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row

echo "<tr>";
		
		echo "<td>";
		echo  "DB_Code";
		echo "</td>";

		
		echo "<td>";
		echo  "Distributor";
		echo "</td>";

		echo "<td>";
		echo  "Area";
		echo "</td>";

		echo "<td>";
		echo "DB Type";
		echo "</td>";

		
		echo "<td>";
		echo "RSM";
		echo "</td>";


		echo "<td>";
		echo "ASM";
		echo "</td>";

		echo "<td>";
		echo  "Type";
		echo "</td>";

		echo "<td>";
		echo  "Budget_Glass";
		echo "</td>";

		echo "<td>";
		echo  "Budget_PET";
		echo "</td>";		

		echo "<td>";
		echo  "Budget_Water";
		echo "</td>";
		
		echo "</tr>";



    while($row = $result->fetch_assoc()) {




		echo "<tr>";

		echo "<td>";
		echo  $row["Code"];
		echo "</td>";

		echo "<td>";
		echo  $row["Distributor"];
		echo "</td>";

		echo "<td>";
		echo  $row["Area"];
		echo "</td>";

		echo "<td>";
		echo  $row["DB Type"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["RSM"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["ASM"];
		echo "</td>";
		

		echo "<td>";
		echo  $row["Type"];
		echo "</td>";

		echo "<td>";
		echo  $row["Budget_Glass"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Budget_PET"];
		echo "</td>";
		
		echo "<td>";
		echo  $row["Budget_Water"];
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
