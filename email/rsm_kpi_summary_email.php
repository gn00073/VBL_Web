
<?php
include '../imports/import_functions.php';
?>

<?php




 


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

$message .= "<h4> Please find the below mentioned status of RSM KPI Uploaded as of " .  $KPI_Date . "</h4>";

$subject .="RSM KPI Uploaded as of " .  $KPI_Date ;


if (isset($_POST['KPI'])) {
	$KPI =$_POST['KPI'];
}
else{

	 $KPI = "CSD_RD";
}

?>


<?php

$message .="<style type='text/css'>";
	

$message .=".weak{";
	$message .="background-color:rgb(255, 199, 206 );"; /*#db7867 */
	$message .="color: red;";
	$message .="text-align: center;";
$message .="}";
$message .=".good{";
	
	$message .="background-color:rgb(198, 239, 206 );"; /*#72eaa6;*/
	$message .="color: green;";
	$message .="text-align: center;";
	
	
$message .="}";

$message .="th, td{";
	
	$message .=" border: 1px solid green;";
	$message .=" text-align: center;";
$message .="}";
$message .="table{";
$message .="border-collapse: collapse;";

$message .="}";
$message .="</style>";

$message .="<table>";
	$message .="<tr>";
		$message .="<th>KPI</th>";
		$message .="<th width='25px'>01</th>";
		$message .="<th width='25px'>02</th>";
		$message .="<th width='25px'>03</th>";
		$message .="<th width='25px'>04</th>";
		$message .="<th width='25px'>05</th>";
		$message .="<th width='25px'>06</th>";
		$message .="<th width='25px'>07</th>";
		$message .="<th width='25px'>08</th>";
		$message .="<th width='25px'>09</th>";
		$message .="<th width='25px'>10</th>";
		$message .="<th width='25px'>11</th>";
		$message .="<th width='25px'>12</th>";
		$message .="<th width='25px'>13</th>";
		$message .="<th width='25px'>14</th>";
		$message .="<th width='25px'>15</th>";
		$message .="<th width='25px'>16</th>";
		$message .="<th width='25px'>17</th>";
		$message .="<th width='25px'>18</th>";
		$message .="<th width='25px'>19</th>";
		$message .="<th width='25px'>20</th>";
		$message .="<th width='25px'>21</th>";
		$message .="<th width='25px'>22</th>";
		$message .="<th width='25px'>23</th>";
		$message .="<th width='25px'>24</th>";
		$message .="<th width='25px'>25</th>";
		$message .="<th width='25px'>26</th>";
		$message .="<th width='25px'>27</th>";
		$message .="<th width='25px'>28</th>";
		$message .="<th width='25px'>29</th>";
		$message .="<th width='25px'>30</th>";
		$message .="<th width='25px'>31</th>";
	$message .="</tr>";

$message .="<tr>";
	?>
		 <?php $message .= "<td>".  $KPI . "</td>" ?>
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-01');

		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI;  //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

			<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-02');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>


		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-03');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
				?>


		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-04');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-05');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-06');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-07');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-08');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>


		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-09');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
		$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-10');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
			$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-11');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
			$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-12');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-13');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-14');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-15');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-16');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-17');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .="<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-18');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

		
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-19');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-20');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-21');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-22');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-23');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-24');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>


				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-25');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-26');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-27');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-28');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-29');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-30');
		if($dKPI=='')
		$message .="class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";
		?>

				
		<?php
		$message .= "<td " ;
		$dKPI=getKPI_Values('Actual',$KPI,$KPI_YearAndMonth .'-31');
		if($dKPI=='')
		$message .= "class='weak'";
		else 
		$message .= "class='good'";
				$dKPI; //$dKPI=$dKPI/1000;
		$message .= ">" .  $dKPI /*round($dKPI,0)  */.  "</td>";

		$message .= "</tr>";
		$message .= "</table>";
		?>



<?php
//echo $dKPI;

$message .= "<P><b>Figures are displayed in thousands (k) </b></P>";
?>



<?php
$message .="<h4>Note: This is a system generated E-mail. Please do not reply.</h4> ";

echo "$message";
$header = "From:gihan.kumara@varunlanka.com \r\n";
         $header .= "Cc:gihan.kumara@varunlanka.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";

$to="prasath.sinniah@varunlanka.com";



   $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }

?>