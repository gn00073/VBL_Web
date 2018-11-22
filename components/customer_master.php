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



$sql = "SELECT * FROM customer_master";
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
		echo "Customer_Name";
		echo "</td>";


		echo "<td>";
		echo "Category";
		echo "</td>";

		
		echo "<td>";
		echo  "Channel";
		echo "</td>";

		

	echo "</tr>";

    while($row = $result->fetch_assoc()) {
		echo "<tr>";
		echo "<td>";
		echo  $row["Code"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Customer_Name"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Category"];
		echo "</td>";

		
		echo "<td>";
		echo  $row["Channel"];
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
