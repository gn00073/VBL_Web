<html>
<head>KPI Target Updating</head>

<body>
<form action = "kpi_process_targets.php" method="GET">

RSM:<br>

  <select name="RSM">
<?php 
require '../components/rsm_combo.php';
?>
  </select>
  
  
  <br>
ASM:<br>
  <select name="ASM">
  <?php 
require '../components/asm_combo.php';
?>
  </select>
  <br>
  
   
KPI_Year:<br>

<select Name="KPI_Year">
<?php 
require '../components/years_combo.txt';
?>
  
</select>
  
  <br>
KPI_Month:<br>

<select Name="KPI_Month">

<?php 
require '../components/months_combo.txt';
?>
</select>
  
  <br>
  

  
  <br>
  --------------------------------
  <br>
  No of PSR:<br>
  <input type="text" name="PSR_Count"><br>
  Open Stock:<br>
  <input type="text" name="OpenStock"><br>
  
  --------------------------------
  <br><br><br>
LRB RD:<br>
  <input type="text" name="KPI_LRB_RD"><br>
CSD RD:<br>
  <input type="text" name="KPI_CSD_RD"><br>
Water RD:<br>
  <input type="text" name="KPI_Water_RD"><br>
BC:<br>
  <input type="text" name="KPI_BC"><br>
FMB 01(Mountain Dew):<br>
  <input type="text" name="KPI_FMB01"><br>
FMB 02(Zingo):<br>
  <input type="text" name="KPI_FMB02"><br> 
FMP 01(345ml):<br>
  <input type="text" name="KPI_FMP01"><br>
FMP 02(300ml):<br>
  <input type="text" name="KPI_FMP02"><br> 
  
  
<input type="submit" value="Submit">

</form>
</body>
</html>