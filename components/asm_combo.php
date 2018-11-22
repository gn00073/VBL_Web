<?php

require '../System_Configuration/System_Config.php';
 
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


$sql = "SELECT ASM FROM asm $Filter";

$result = $conn->query($sql);
?>


<?php
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	
		echo "<option>". $row["ASM"]."</option>";
		//echo ",";
	}
}

else {
    echo "0 results";
}
$conn->close();


?>
