<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
 <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" type="text/css" href="style.css">
  
  <script src="kpi_js.js">
  
  </script>
  <link rel="icon" href="../images/pepsi_lab_icon.png">
<title>RSM KPI</title>


</head>

<body>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
include 'kpi_functions.php';
include '../components/get_month_number.php';


?>
<br>

<div class="KPI_form" align="center"  style="font-family: 'serif';font-size: 32px;color: green; letter-spacing: 3px; vertical-align:center;" >


<form  name="KPI" id="KPI" action="<?php ?>" method="GET"> 

<img src="../images/kpi_logo.png" style="align:left;">



<table align="right">

<tr class="noBorder">
  <td>
<select Name="Year">

<option value="<?php echo $_GET['Year'];?>" selected> <?php echo $_GET['Year'];?></option>

<?php 
require '../components/years_combo.txt';
?>

</select>
</td>
<td>
<select Name="Month">

<option value="<?php echo $_GET['Month'];?>" selected><?php echo $_GET['Month'];?></option>
<?php 
require '../components/months_combo.txt';
?>
</select>
</td>

<td>

<select name="RSM">
<option value="<?php echo $_GET['RSM'];?>" selected><?php echo $_GET['RSM'];?></option>
<?php 
require '../components/rsm_combo.php';
?>
    
</select

</td>
<td >
<input type="submit" value="Generate Report" class="button" >
</td>
</tr>
<tr class="noBorder">
<td></td>
</tr>
<tr class="noBorder">
<td></td>
</tr>
<tr class="noBorder">
<td></td>
</tr>
<tr class="noBorder" style="font-family: 'Arial';font-size: 14px;color: green; letter-spacing: 1px;">
<td> <input type="radio" name="DayView" value="0" <?php if($_GET['DayView']==0) echo "checked" ;?>>(01st - 14th)</td><td><input type="radio" name="DayView" value="14"  <?php if($_GET['DayView']==14) echo "checked" ;?>>(15th - 28th)</td><td><input type="radio" name="DayView" value="17"  <?php if($_GET['DayView']==17) echo "checked" ;?>>(18th - 31st)</td>
</tr>
</form>
</table>
<?php


?>



    <?php

require '../System_Configuration/System_Config.php';
 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$Year_Selected=$_GET['Year'];
$Month_Selected=$_GET['Month'];
$RSM= mysqli_real_escape_string($conn,$_GET['RSM']);

$Filter = "WHERE Status='1'";

if (isset($_GET['RSM']))
{
	$Filter=$Filter . "AND RSM='$RSM'";
	
	
}



$sql = "SELECT RSM,ASM FROM asm $Filter";

$result = $conn->query($sql);
echo "";
 $Year_Selected . "";
 $Month_Selected . "";
 $RSM . "";
// Variable for Working Days................................................................................................
$TotalWorkingDays='25';
$CurrentWorkingDays='11';
$NetWorkingDays= $TotalWorkingDays - $CurrentWorkingDays;
$FMB01= "Dew";
$FMB02= "Zingo";
$FMP01= "345ml";
$FMP02= "300ml";

$Day_View=$_GET['DayView'];

if (isset($_GET['DayView'])){
	$Day_View=$_GET['DayView'];	
	}
else{	
if(date("d")<=14){
$Day_View='0';	
}
else if(date("d")<=28){
$Day_View='14';	
}
else if(date("d")<=31){
$Day_View='17';	
}
}


$YandM = $Year_Selected."-". getMonth_Number($Month_Selected)."-";
 echo $Year_Selected."-". strtoupper($Month_Selected);

//echo $DateKPI = $YandM. "10";
?>

 

</div>
<br>
<br>
<div class="RSM_KPI_Div">
  
  <table class="table_RSMKPI" id="main-table" align="center"> <!--  height="200px" -->

    <caption>
      
    </caption>
    
	<thead>
      <tr class="header">
        <th class="col1" width="125px">RSM</th><!-- width="120px" -->
        <th class="col2"  width="20px">ASM</th> <!-- width="20px" -->
        <th class="col3"  width="5px">No.PSR</th><!-- width="15px" -->
        <th class="col4" >Per Rep/Day </th><!-- width="5px" -->
        <th class="col5"  colspan="2" width="120px" >Monthly Target</th> <!-- width="10px" -->
        <th class="col7">Open Stock</th> <!-- width="25px" -->
        <th class="col8">Daily Target</th> <!-- width="15px" -->
        <th class="col9">Balance/Day</th><!-- width="15px" -->
        <th class="col10">Cumulative</th><!-- width="75px" -->
        <th ><?php echo($Day_View+1);?></th><!-- width="15px" -->
        <th ><?php echo($Day_View+2);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+3);?></th><!-- width="15px" -->
		
		
		<th ><?php echo($Day_View+4);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+5);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+6);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+7);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+8);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+9);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+10);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+11);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+12);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+13);?></th><!-- width="15px" -->
		<th ><?php echo($Day_View+14);?></th><!-- width="15px" -->
		<!--<th >11</th> width="15px" -->
		<!--<th >12</th><!-- width="15px" -->
		<!--<th >13</th><!-- width="15px" -->
		<!--th >14</th><!-- width="15px" -->
		<!--<th >15</th><!-- width="15px" -->
		<!--<th >16</th><!-- width="15px" -->
		<!--<th >17</th><!-- width="15px" -->
		<!--<th >18</th><!-- width="15px" -->
		<!--<th >19</th><!-- width="15px" -->
		<!--<th >20</th><!-- width="15px" -->
		<!--<th >21</th><!-- width="15px" -->
		<!--<th >22</th><!-- width="15px" -->
		<!--<th >23</th><!-- width="15px" -->
		<!--<th >24</th><!-- width="15px" -->
		<!--<th >25</th><!-- width="15px" -->
		<!--<th >26</th><!-- width="15px" -->
		<!--<th >27</th><!-- width="15px" -->
		<!--<th >28</th><!-- width="15px" -->
		<!--<th >29</th><!-- width="15px" -->
		<!--<th >30</th><!-- width="15px" -->
		<!--<th >31</th><!-- width="15px" -->
      </tr>
	  </thead>
	  <tbody>
	  <?php

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
	//KPI 1
		echo "<tr class='ro1'>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		echo "<td class='col2' rowspan='8'>"; // rowspan='8' nowrap
		echo  $row["ASM"];
		echo "</td>";
		
		echo "<td rowspan='8' class='col3' width='100px'>";
		echo  $PSRCount = getKPI_Values($row["ASM"],Target,PSR_Count,$Year_Selected,$Month_Selected,'');
		echo "</td>";
				
		echo "<td class='col4'>";
						$KPI1Actual = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,'');
					if ($CurrentWorkingDays >'0' AND $PSRCount >'0') {
						$actPdayPrep1 = $KPI1Actual / $CurrentWorkingDays / $PSRCount;
					}
						
		echo round($actPdayPrep1,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "LRB RD";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI1Target = getKPI_Values($row["ASM"],Target,LRB_RD,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		echo "<td rowspan='8' class='col7'>";
		echo  getKPI_Values($row["ASM"],Target,OpenStock,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		echo "<td class='col8'>";
		echo  $LRB_RD_DTarget = round(($KPI1Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday1 =($KPI1Target-$KPI1Actual)/$NetWorkingDays;
		echo round($balacePday1,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI1Actual;
		echo "</td>";
		
		$DateKPI = $YandM. ($Day_View+1);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";
		
		
			$DateKPI = $YandM. ($Day_View+2);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";
		
			$DateKPI = $YandM. ($Day_View+3);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+4);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+5);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+6);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+7);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+8);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+9);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+10);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+11);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+12);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+13);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";

			$DateKPI = $YandM. ($Day_View+14);
		$dLRB_RD = getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dLRB_RD<=$LRB_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dLRB_RD .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,LRB_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";
/*/		
		echo "</tr>";
		
		//KPI 2
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI2Actual = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep2 = $KPI2Actual / $CurrentWorkingDays / $PSRCount;

		echo round($actPdayPrep2,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "CSD RD";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo $KPI2Target = getKPI_Values($row["ASM"],Target,CSD_RD,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $CSD_RD_DTarget = round(($KPI2Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday2 =($KPI2Target-$KPI2Actual)/$NetWorkingDays;
		echo round($balacePday2,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI2Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI,'');
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";
		
				
					$DateKPI = $YandM. ($Day_View+2);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+3);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+4);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+5);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+6);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+7);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+8);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+9);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+10);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+11);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+12);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+13);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+14);
		$dCSD_RD = getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dCSD_RD<=$CSD_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dCSD_RD .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,CSD_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		
		//KPI 3
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI3Actual = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep3 = $KPI3Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep3,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "Water RD";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo $KPI3Target =  getKPI_Values($row["ASM"],Target,Water_RD,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $Water_RD_DTarget =round(($KPI3Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday3 =($KPI3Target-$KPI3Actual)/$NetWorkingDays;
		echo round($balacePday3,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo $KPI3Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+2);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+3);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+4);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+5);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+6);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+7);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+8);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+9);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+10);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+11);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+12);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+13);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";

					$DateKPI = $YandM. ($Day_View+14);
		$dWater_RD = getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dWater_RD<=$Water_RD_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dWater_RD .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,Water_RD,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		
		//KPI 4
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI4Actual = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep4 = $KPI4Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep4,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "BC";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI4Target = getKPI_Values($row["ASM"],Target,BC,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $BC_DTarget = round(($KPI4Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday4 =($KPI4Target-$KPI4Actual)/$NetWorkingDays;
		echo round($balacePday4,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo   $KPI4Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+2);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+3);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+4);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+5);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+6);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+7);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+8);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+9);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+10);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+11);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+12);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+13);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";

					$DateKPI = $YandM. ($Day_View+14);
		$dBC = getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dBC<=$BC_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dBC .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,BC,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		//KPI 5
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI5Actual = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep5 = $KPI5Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep5,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "$FMB01";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI5Target = getKPI_Values($row["ASM"],Target,FMB01,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $FMB01_DTarget = round(($KPI5Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday5 =($KPI5Target-$KPI5Actual)/$NetWorkingDays;
		echo round($balacePday5,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI5Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+2);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+3);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+4);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+5);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+6);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+7);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+8);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+9);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+10);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+11);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+12);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+13);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+14);
		$dFMB01 = getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB01<=$FMB01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB01 .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,FMB01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		//KPI 6
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		 $KPI6Actual = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,'');
		 if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep6 = $KPI6Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep6,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "$FMB02";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI6Target = getKPI_Values($row["ASM"],Target,FMB02,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $FMB02_DTarget = round(($KPI6Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday6 =($KPI6Target-$KPI6Actual)/$NetWorkingDays;
		echo round($balacePday6,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI6Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";
		
				$DateKPI = $YandM. ($Day_View+2);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";
		
				$DateKPI = $YandM. ($Day_View+3);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+4);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+5);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+6);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+7);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+8);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+9);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+10);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+11);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+12);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+13);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+14);
		$dFMB02 = getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMB02<=$FMB02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMB02 .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,FMB02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		//KPI 7
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI7Actual = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep7 = $KPI7Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep7,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "$FMP01";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI7Target = getKPI_Values($row["ASM"],Target,FMP01,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $FMP01_DTarget = round(($KPI7Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday7 =($KPI7Target-$KPI7Actual)/$NetWorkingDays;
		echo round($balacePday7,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI7Actual;
		echo "</td>";
		
					$DateKPI = $YandM. ($Day_View+1);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+2);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";
		
					$DateKPI = $YandM. ($Day_View+3);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+4);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+5);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+6);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+7);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+8);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+9);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+10);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+11);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+12);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+13);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";

					$DateKPI = $YandM. ($Day_View+14);
		$dFMP01 = getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP01<=$FMP01_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP01 .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,FMP01,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
	/*/	
		
		echo "</tr>";
		
		
		//KPI 8
		
		echo "<tr>";
		
		echo "<td class='col1'>";
		echo  $row["RSM"];
		echo "</td>";
		
		//echo "<td>";
		//echo  $row["ASM"];
		//echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],PSR_Count);
		//echo "</td>";
				
		echo "<td class='col4'>";
		$KPI8Actual = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,'');
		if ($CurrentWorkingDays >'0' AND $PSRCount >'0') 
		$actPdayPrep8 = $KPI8Actual / $CurrentWorkingDays / $PSRCount;
		echo round($actPdayPrep8,'2');
		echo "</td>";
		
		
		echo "<td class='col5'>";
		echo  "$FMP02";
		echo "</td>";
		
		echo "<td class='col6'>";
		echo  $KPI8Target = getKPI_Values($row["ASM"],Target,FMP02,$Year_Selected,$Month_Selected,'');
		echo "</td>";
		
		//echo "<td>";
		//echo  getKPI_Values($row["ASM"],OpenStock);
		//echo "</td>";
		
		echo "<td class='col8'>";
		echo  $FMP02_DTarget = round(($KPI8Target / $TotalWorkingDays),'2');
		echo "</td>";
		
		echo "<td class='col9'>";
		$balacePday8 =($KPI8Target-$KPI8Actual)/$NetWorkingDays;
		echo round($balacePday8,'0');
		echo "</td>";
		
		echo "<td class='col10'>";
		echo  $KPI8Actual;
		echo "</td>";
		
				$DateKPI = $YandM. ($Day_View+1);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";
		
				$DateKPI = $YandM. ($Day_View+2);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";
		
				$DateKPI = $YandM. ($Day_View+3);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+4);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+5);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+6);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+7);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+8);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+9);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+10);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+11);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+12);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+13);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";

				$DateKPI = $YandM. ($Day_View+14);
		$dFMP02 = getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "<td " ;
		if($dFMP02<=$FMP02_DTarget)
		echo "class='weak'";
		else 
		echo "class='good'";
		echo ">" .  $dFMP02 .  "</td>";
/*
		echo "<td>";
		$DateKPI = $YandM. "15";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "16";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "17";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "18";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "19";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "20";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "21";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "22";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "23";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "24";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";	

		echo "<td>";
		$DateKPI = $YandM. "25";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "26";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "27";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "28";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "29";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "30";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";

		echo "<td>";
		$DateKPI = $YandM. "31";
		echo   getKPI_Values($row["ASM"],Actual,FMP02,$Year_Selected,$Month_Selected,$DateKPI);
		echo "</td>";		
		
		*/
		
		echo "</tr>";
	}
}

else {
    echo "0 results";
}
$conn->close();


?>


    

    </tbody>
	<tfoot>
	<!--
	<tr>
	<th colspan="12">
	
	</th>
	</tr>
	-->
	</tfoot>
  </table>




  
</div>
</body>
</html>