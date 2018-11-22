<?php


require '../System_Configuration/System_Config.php';

 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

 
$RSM = mysqli_real_escape_string($conn, $_GET['RSM']);
$ASM = mysqli_real_escape_string($conn,$_GET['ASM']);
$KPI_Date = mysqli_real_escape_string($conn,$_GET['KPI_Date']);


$KPI_LRB_RD = mysqli_real_escape_string($conn, $_GET['KPI_LRB_RD']);
$KPI_CSD_RD = mysqli_real_escape_string($conn,$_GET['KPI_CSD_RD']);
$KPI_Water_RD = mysqli_real_escape_string($conn,$_GET['KPI_Water_RD']);
$KPI_BC = mysqli_real_escape_string($conn,$_GET['KPI_BC']);

$KPI_FMB01 = mysqli_real_escape_string($conn,$_GET['KPI_FMB01']);
$KPI_FMB02 = mysqli_real_escape_string($conn,$_GET['KPI_FMB02']);

$KPI_FMP01 = mysqli_real_escape_string($conn,$_GET['KPI_FMP01']);
$KPI_FMP02 = mysqli_real_escape_string($conn,$_GET['KPI_FMP02']);

//Crete KPI month and Date
$KPI_Year =strtotime($KPI_Date);
$KPI_Year =date('Y',$KPI_Year);

$KPI_Month =strtotime($KPI_Date);
$KPI_Month =date('M',$KPI_Month);



$sql = "INSERT INTO rsm_kpi (KPI_Year,KPI_Month,RSM, ASM, KPI_Date,KPI,KPI_Description,KPI_Value) VALUES 
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','LRB_RD','LRB_RD','$KPI_LRB_RD'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','CSD_RD','CSD_RD','$KPI_CSD_RD'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','Water_RD','Water_RD','$KPI_Water_RD'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','BC','BC','$KPI_BC'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','FMB01','Pepsi Black','$KPI_FMB01'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','FMB02','Zingo','$KPI_FMB02'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','FMP01','345ml','$KPI_FMP01'),
('$KPI_Year','$KPI_Month','$RSM', '$ASM', '$KPI_Date','FMP02','300ml','$KPI_FMP02')
";




if (mysqli_query($conn, $sql)) {
	
    echo "Successfully Uploaded";
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 


?>



 <script type="text/JavaScript">
               
                    setTimeout("location.href = 'kpi_form_actual.php';", 2000);
 </script>
