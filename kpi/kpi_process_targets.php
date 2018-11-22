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
$KPI_Year = mysqli_real_escape_string($conn,$_GET['KPI_Year']);
$KPI_Month = mysqli_real_escape_string($conn,$_GET['KPI_Month']);

$PSR_Count = mysqli_real_escape_string($conn,$_GET['PSR_Count']);
$OpenStock = mysqli_real_escape_string($conn,$_GET['OpenStock']);


$KPI_LRB_RD = mysqli_real_escape_string($conn, $_GET['KPI_LRB_RD']);
$KPI_CSD_RD = mysqli_real_escape_string($conn,$_GET['KPI_CSD_RD']);
$KPI_Water_RD = mysqli_real_escape_string($conn,$_GET['KPI_Water_RD']);
$KPI_BC = mysqli_real_escape_string($conn,$_GET['KPI_BC']);

$KPI_FMB01 = mysqli_real_escape_string($conn,$_GET['KPI_FMB01']);
$KPI_FMB02 = mysqli_real_escape_string($conn,$_GET['KPI_FMB02']);

$KPI_FMP01 = mysqli_real_escape_string($conn,$_GET['KPI_FMP01']);
$KPI_FMP02 = mysqli_real_escape_string($conn,$_GET['KPI_FMP02']);


$sql = "INSERT INTO RSM_KPI (TA,RSM, ASM, KPI_Year,KPI_Month,KPI,KPI_Description,KPI_Value) VALUES 
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','LRB_RD','LRB_RD','$KPI_LRB_RD'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','CSD_RD','CSD_RD','$KPI_CSD_RD'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','Water_RD','Water_RD','$KPI_Water_RD'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','BC','BC','$KPI_BC'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','FMB01','Dew','$KPI_FMB01'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','FMB02','Zingo','$KPI_FMB02'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','FMP01','345ml','$KPI_FMP01'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','FMP02','300ml','$KPI_FMP02'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','PSR_Count','PSR_Count','$PSR_Count'),
('Target','$RSM', '$ASM', '$KPI_Year','$KPI_Month','OpenStock','OpenStock','$OpenStock')
";




if (mysqli_query($conn, $sql)) {
	
    echo "Successfully Uploaded";
	
	
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn); 


?>