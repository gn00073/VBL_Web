<?php

require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
 
//$MIS_User= mysqli_real_escape_string($conn,$_GET['User']);
/*

$Super_RSM= mysqli_real_escape_string($conn,$_GET['Super_RSM']);

$Filter = "WHERE Status='1'";

if (isset($_GET['Super_RSM']))
{
	$Filter=$Filter . "AND RSM-Retail='$Super_RSM'";
	
	
}
*/



$sql = "SELECT * FROM item_master";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row

echo "<tr>";
		echo "<td>";
		echo "Code";
		echo "</td>";

		
		echo "<td>";
		echo "SAP_Name";
		echo "</td>";


		echo "<td>";
		echo "Item";
		echo "</td>";

		
		echo "<td>";
		echo  "Type";
		echo "</td>";

		
		echo "<td>";
		echo "Brand";
		echo "</td>";

		
		echo "<td>";
		echo "Promo";
		echo "</td>";

		
		echo "<td>";
		echo "Act_Multi";
		echo "</td>";

		
		echo "<td>";
		echo "PCI_Mult";
		echo "</td>";
		
		
		echo "<td>";
		echo "08Oz";
		echo "</td>";

		
		echo "<td>";
		echo "LRB";
		echo "</td>";

				
		echo "<td>";
		echo "FOC";
		echo "</td>";

				
		echo "<td>";
		echo "Pack";
		echo "</td>";

				
		echo "<td>";
		echo "Flavor";
		echo "</td>";

				
		echo "<td>";
		echo "ml";
		echo "</td>";

				
		echo "<td>";
		echo  "BPC";
		echo "</td>";

	echo "</tr>";

    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo  $row["Code"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["SAP_Name"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Item"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Type"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Brand"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Promo"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Act_Multi"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["PCI_Mult"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["08Oz"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["LRB"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["FOC"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["Pack"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["Flavor"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["ml"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["BPC"];
		echo "</td>";

	

	}
}

else {
    echo "0 results";
}
$conn->close();
echo "</table>";
?>
