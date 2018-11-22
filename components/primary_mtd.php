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
	$Filter=$Filter . "AND RSM-Retail='$Super_RSM'";
	
	
}




$sql = "SELECT * FROM primary_mtd $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo  $row["Date"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Category"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["LRB"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Pack-Manual"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Flavor-Manual"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Item"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Inc_Cat"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["RSM-Retail"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["ASM-Retail"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["ASM"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["DB Type"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["SOLD TO PARTY"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["Customer"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["Raw_Qty"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["8Oz_Qty"];
		echo "</td>";

				
		echo "<td>";
		echo  $row["PCI_Qty"];
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
