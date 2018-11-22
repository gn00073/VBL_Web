
<?php
//include '../imports/import_functions.php';
?>

<?php

//session_start(); // Starting Session
  $RSM =$_SESSION["Name"];
//$RSM="Gihan";

 


if (isset($_POST['KPI_Date'])) {
	$KPI_Date =$_POST['KPI_Date'];
}
else{

	 $KPI_Date = date('Y-m-d',strtotime("-1 days"));
}


$KPI_Year =strtotime($KPI_Date);
$KPI_Year =date('Y',$KPI_Year);

$KPI_Month =strtotime($KPI_Date);
$KPI_Month =date('m',$KPI_Month);
 $KPI_YearAndMonth=$KPI_Year ."-".$KPI_Month ;








	 $KPI = "CSD_RD";

?>




<style type="text/css">
	

.weak{
	background-color:rgb(255, 199, 206 ); /*#db7867 */
	color: red;
	text-align: center;
}
.good{
	
	background-color:rgb(198, 239, 206 ); /*#72eaa6;*/
	color: green;
	text-align: center;
	
	
}

th, td{
	
	 border: 1px solid green;
	 text-align: center;
}
table{
border-collapse: collapse;

}
</style>
<?php
echo "<b>RSM : &nbsp;" . $_SESSION["Name"] . "</b> &nbsp;&nbsp;&nbsp;";
echo "<b>Date :" . $KPI_Date . " &nbsp;&nbsp;&nbsp; </b>&nbsp;&nbsp;&nbsp;" ;

 ?>
<table>
	<tr>
		<th>KPI</th>
		<th width="25px">01</th>
		<th width="25px">02</th>
		<th width="25px">03</th>
		<th width="25px">04</th>
		<th width="25px">05</th>
		<th width="25px">06</th>
		<th width="25px">07</th>
		<th width="25px">08</th>
		<th width="25px">09</th>
		<th width="25px">10</th>
		<th width="25px">11</th>
		<th width="25px">12</th>
		<th width="25px">13</th>
		<th width="25px">14</th>
		<th width="25px">15</th>
		<th width="25px">16</th>
		<th width="25px">17</th>
		<th width="25px">18</th>
		<th width="25px">19</th>
		<th width="25px">20</th>
		<th width="25px">21</th>
		<th width="25px">22</th>
		<th width="25px">23</th>
		<th width="25px">24</th>
		<th width="25px">25</th>
		<th width="25px">26</th>
		<th width="25px">27</th>
		<th width="25px">28</th>
		<th width="25px">29</th>
		<th width="25px">30</th>
		<th width="25px">31</th>
	</tr>
<tr>
	
	<?php $KPI = "CSD_RD"; ?>

		<td><?php echo $KPI ?></td>
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" .  $dKPI /*round($dKPI,0) */.  "</td>";
		?>

			<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
				?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

</tr>

<tr>
<?php $KPI= "Water_RD"; ?>



<td><?php echo $KPI ?></td>
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" .  $dKPI /*round($dKPI,0) */.  "</td>";
		?>

			<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
				?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

</tr>


<tr>
<?php $KPI= "Shedule_Calls"; ?>



<td><?php echo $KPI ?></td>
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" .  $dKPI /*round($dKPI,0) */.  "</td>";
		?>

			<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
				?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

</tr>


<tr>
<?php $KPI= "BC"; ?>



<td><?php echo $KPI ?></td>
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" .  $dKPI /*round($dKPI,0) */.  "</td>";
		?>

			<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
				?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

</tr>



<tr>
<?php $KPI= "FMB01"; ?>



<td><?php echo $KPI ?></td>
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" .  $dKPI /*round($dKPI,0) */.  "</td>";
		?>

			<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
				?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//	$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

		
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>


				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

				
		<?php
		echo "<td " ;
		$dKPI=getKPI_ValuesForRSM_KPI($RSM,'Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		echo "class='weak'";
		else 
		echo "class='good'";
		//		$dKPI=$dKPI/1000;
		echo ">" . $dKPI /*round($dKPI,0) */ .  "</td>";
		?>

</tr>

</table>
<P><b><!-- Figures are displayed in thousands (k) --> </b></P>
<?php
//echo $dKPI;
?>

