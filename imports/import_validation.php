

<?php
error_reporting(E_ALL & ~E_NOTICE);


function getKPI_Date_Validate($KPI_Date,$RSM){

require '../System_Configuration/System_Config.php';

	$conn = mysqli_connect($servername, $username, $password, $dbname);

												if (!$conn) {
													die("Connection failed: " . mysqli_connect_error());
															}
	

$response = "";


$mysql_qry = "select * from rsm_kpi where KPI_Date = '$KPI_Date' AND RSM='$RSM';";
$result = mysqli_query($conn ,$mysql_qry);

			if(mysqli_num_rows($result) == 1) {
				 while($row = $result->fetch_assoc()) {

			   		$response = "true";  
			    


			        


			    }

			}
			else {

				
			    $response= "false";  

			}


			 return $response;

	$conn->close();
}

?>