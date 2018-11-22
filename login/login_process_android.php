

<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start(); // Starting Session
require '../System_Configuration/System_Config.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);

												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
															}
								
$response = array();
$username = $_POST["username"];
$password = $_POST["password"];
$mysql_qry = "select * from users where Email = '$username' and Password = '$password';";
$result = mysqli_query($conn ,$mysql_qry);

			if(mysqli_num_rows($result) == 1) {
				 while($row = $result->fetch_assoc()) {

			   		$response["success"] = true;  
			        $response["Name"] = $row["Name"];
			        $response["User_Group"] = $row["User_Group"];
			        $response["Email"] = $row["Email"];
			        $response["Password"] = $row["Password"];
			    }

			}
			else {

				
			    $response["success"] = false;  

			}
			 echo json_encode($response);	
	$conn->close();
?>