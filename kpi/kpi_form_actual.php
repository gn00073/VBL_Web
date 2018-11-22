
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT); ?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">
	
input{

	width: 200px;
	border-radius:5px 5px 5px 5px ; 
}
select{
width: 200px;
border-radius:5px 5px 5px 5px ;

}

td{
padding-top: 2px;

}

body{

	align-content: center;
	align-items: center;
	max-width: 300px;
    margin: auto;
    color: blue;
    background-color:#fff;
}

.container{
animation-fill-mode: forwards;


}
</style>

</head>

<body>
<div class="container">
<div class="btn-group btn-group-lg">
<table name="KPI_Submit" class="KPI_Submit" cellpadding="70">

<form action = "kpi_process_actuals.php" method="GET" class="form-inline">
	<tr><td align="center"><b>RSM KPI</b></td></tr>
<tr><td>RSM:</td></tr>
<tr><td>  <select name="RSM"><?php require '../components/rsm_combo.php';?> </select></td></tr>
<tr><td>ASM:</td></tr>
<tr><td><select name="ASM" >  <?php require '../components/asm_combo.php';?></select></td></tr>
<?php require '../components/date_picker.php';?>
<tr><td><input type="text" name="KPI_Date" id="datepicker" size="20" placeholder="KPI Date"></td></tr>
<tr><td><input type="text" name="KPI_LRB_RD" placeholder="LRB RD"></td></tr>
<tr><td><input type="text" name="KPI_CSD_RD" placeholder="CSD RD"></td></tr>
<tr><td><input type="text" name="KPI_Water_RD" placeholder="Water RD"></td></tr>
<tr><td><input type="text" name="KPI_BC" placeholder="Bills Cut"></td></tr>
<tr><td><input type="text" name="KPI_FMB01" placeholder="FMB 01(Mountain Dew)">	</td></tr>
<td><input type="text" name="KPI_FMB02" placeholder="FMB 02(Zingo)"></td></tr>
<tr><td><input type="text" name="KPI_FMP01" placeholder="FMP 01(345ml)"></td></tr>
<tr><td><input type="text" name="KPI_FMP02" placeholder="FMP 02(300ml)"></td></tr>
<tr><td><input type="submit" value="Submit" class="btn-success" ></td></tr>
</form>
</table>
</div>
</div>
</body>
</html>