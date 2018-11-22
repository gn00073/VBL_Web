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


$sql = "SELECT * FROM discount_base $Filter";
$result = $conn->query($sql);
?>


<?php
echo "<table>";
if ($result->num_rows > 0) {
    // output data of each row

echo "<tr>";
		
		echo "<td>";
		echo  "Outlet_Code";
		echo "</td>";

		
		echo "<td>";
		echo  "OUT_NO";
		echo "</td>";

		echo "<td>";
		echo  "Outlet_Name";
		echo "</td>";

		echo "<td>";
		echo "Area";
		echo "</td>";

		
		echo "<td>";
		echo "DB_Code";
		echo "</td>";


		echo "<td>";
		echo "DB_Name";
		echo "</td>";

		echo "<td>";
		echo  "Address";
		echo "</td>";

		echo "<td>";
		echo  "Discount_Glass_Per_Case";
		echo "</td>";

		echo "<td>";
		echo  "Discount_Glass_Percentage";
		echo "</td>";
	

		echo "<td>";
		echo  "Discount_PET_Per_Case";
		echo "</td>";
		

		echo "<td>";
		echo  "Discount_PET_Percentage";
		echo "</td>";
		

		echo "<td>";
		echo  "Outlet_Type";
		echo "</td>";
	

		echo "<td>";
		echo  "Contact_No";
		echo "</td>";

		
		echo "</tr>";



    while($row = $result->fetch_assoc()) {




		echo "<tr>";

		echo "<td>";
		echo  $row["Outlet_Code"];
		echo "</td>";

		echo "<td>";
		echo  $row["OUT_NO"];
		echo "</td>";

		echo "<td>";
		echo  $row["Outlet_Name"];
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
		echo  $row["Address"];
		echo "</td>";

		echo "<td>";
		echo  $row["Discount_Glass_Per_Case"];
		echo "</td>";

		echo "<td>";
		echo  $row["Discount_Glass_Percentage"];
		echo "</td>";

		echo "<td>";
		echo  $row["Discount_PET_Per_Case"];
		echo "</td>";

		echo "<td>";
		echo  $row["Discount_PET_Percentage"];
		echo "</td>";

		echo "<td>";
		echo  $row["Outlet_Type"];
		echo "</td>";

		echo "<td>";
		echo  $row["Contact_No"];
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
