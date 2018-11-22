
</!DOCTYPE html>
<html>
<head>
  <title>Balance Stock</title>
  <link rel="icon" href="../images/pepsi_lab_icon.png">
  <meta charset="utf-8">
</head>
<body>
<?php 
error_reporting(E_ALL & ~E_NOTICE);
//include 'kpi_functions.php';
include '../components/get_month_number.php';

?>

<form  name="stock" id="stock" action="<?php ?>" method="GET"> 

<img src="../images/stock_report.png" style="align:left;">



<table align="right">

<tr class="noBorder">
  <td>
<select Name="Year">

<option value="<?php echo $_GET['Year'];?>" selected> <?php echo $_GET['Year'];?></option>

<?php 
include '../components/years_combo.txt';
?>

</select>
</td>
<td>
<select Name="Month">

<option value="<?php echo $_GET['Month'];?>" selected><?php echo $_GET['Month'];?></option>
<?php 
include '../components/months_combo.txt';
?>
</select>
</td>

<td>

<select name="RSM">
<option value="<?php echo $_GET['RSM'];?>" selected><?php echo $_GET['RSM'];?></option>
<?php 
include '../components/rsm_combo.php';
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
</table>


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

$Filter = "WHERE  Active='1' AND Channel='Retail'";

if (isset($_GET['RSM']))
{
  $Filter=$Filter . "AND RSM='$RSM'";
  
  
}



$sql = "SELECT * FROM customers $Filter ORDER BY RSM_Code,ASM_Code ASC";

$result = $conn->query($sql);
echo "";
 $Year_Selected . "";
 $Month_Selected . "";
 $RSM . "";










?>

 

</div>
<br>
<br>
<div class="stock_Div">
  
  <table class="table_stock" align="center"> 
    <caption>
      
    </caption>
    
  <thead>
      <tr class="header">
        <th class="col1" width="150px">RSM</th>
        <th class="col2"  width="150px">ASM</th> 
        <th class="col3"  width="250px">Area</th>
        <th class="col3"  width="250px">Distributor</th>
        <th class="col4" width="100px">Open Stock</th>
        <th class="col4" width="100px" >Primary</th>
        <th class="col9" width="100px">RD</th><!-- width="15px" -->
        <th class="col10" width="100px">Current Stcok</th><!-- width="75px" -->
        
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
    
    echo "<td class='col2'>"; 
    echo  $row["ASM"];
    echo "</td>";


   echo "<td class='col2'>"; 
    echo  $row["Current_Area"];
    echo "</td>";
  

    echo "<td class='col2'>"; 
    echo  $row["Customer"];
    echo "</td>";
   echo "</tr>";
}

}
?>

</body>
</html>