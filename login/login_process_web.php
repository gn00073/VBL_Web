

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

$_SESSION["success"]=$response["success"] ;
$_SESSION["Name"]=$response["Name"] ;
$_SESSION["User_Group"]=$response["User_Group"] ;
$_SESSION["Email"]=$response["Email"] ;


switch ($response["User_Group"]) {
    case "MIS_Level01":
        header('Location: ../imports/db_kpi.php');
        break;
    case "RSM":
        header('Location: ../imports/rsm_kpi.php');
        break;
    
    default:
         header('Location: index.php');
}






			        


			    }

			}
			else {

				
			    $response["success"] = false;  
			    header('Location: index.php');

			}


			// echo json_encode($response);	
	$conn->close();
?>