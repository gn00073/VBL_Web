
<?php
error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);



require '../System_Configuration/System_Config.php';
require '../login/login_details.php';
include 'import_functions.php';





 
 // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}




$output = '';
if(isset($_POST["import"]))
{
 $extension = end(explode(".", $_FILES['excel']['name'])); // For getting Extension of selected file
 $allowed_extension = array("xls", "xlsx", "csv"); //allowed extension
 if(in_array($extension, $allowed_extension)) //check selected file extension is present in allowed extension array
 {
  $file = $_FILES["excel"]["tmp_name"]; // getting temporary source of excel file
  include("../classes/excel/PHPExcel/IOFactory.php"); // Add PHPExcel Library in this code
  $objPHPExcel = PHPExcel_IOFactory::load($file); // create object of PHPExcel library by using load() method and in load method define path of selected file

    

  $output .= "<label class='text-success'>Data Inserted</label><br /><table class='table table-bordered'>";
  $output .= "<tr>";
  $output .= "<th>DB Code</th><th>Distributor Name</th><th>Price</th>";
  $output .= "</tr>";
  foreach ($objPHPExcel->getWorksheetIterator() as $worksheet)
  {
   $highestRow = $worksheet->getHighestRow();




   for($row=1; $row<=$highestRow; $row++)
   {
    $output .= "<tr>";
   
    $DB_Code = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(0, $row)->getValue());
    $DB_Name = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(1, $row)->getValue());
    $Price = mysqli_real_escape_string($conn, $worksheet->getCellByColumnAndRow(2, $row)->getValue());
    $query = "INSERT INTO jar(Cust_Code,CustName,Price) VALUES ('".$DB_Code."', '".$DB_Name."', '".$Price."')";
    mysqli_query($conn, $query);
  
    $output .= '<td>'.$DB_Code.'</td>';
    $output .= '<td>'.$DB_Name.'</td>';
    $output .= '<td>'.$Price.'</td>';
    $output .= '</tr>';
   }
  } 
  $output .= '<tr>';
  $output .= '<th colspan="3">'.'Total</th>';
  $output .= '<th></th>';
  $output .= '</tr>';
  $output .= '</table>';

 }
 else
 {
  $output = '<label class="text-danger">Invalid File</label>'; //if non excel file then
 }
}
?>

<html>
 <head>
  <title>Import Customer Jar Details</title>
  <link rel="icon" href="../images/pepsi_lab_icon.png">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="imports.css">
  <style>
  
  
  </style>
 </head>

 <script type="text/javascript">

 $(document).ready(function() {

    $("#import").(function() {                

      $.ajax({    //create an ajax request to load_page.php
        type: "GET",
        url: "../kpi/db_kpi_summary.php?KPI_Date=2017-11-09&KPI=CSD_RD",             
        dataType: "html",   //expect html to be returned                
        success: function(response){                    
            $("#responsecontainer").html(response); 
            //alert(response);
        }

    });
});
});

</script>



 <body>

  <div class="container box">
    <img  style="float: right; padding-top: 10px;" src="../images/import_kpi_titile.png">
   <h3 align="center">  &nbsp; </h3><br />
   <div class="form_import" align="center">
   <form method="post" enctype="multipart/form-data">
   Select Date
    <?php require '../components/date_picker.php';?>
    <input style="display: inline;" type="text" name="KPI_Date" id="datepicker" size="20">
    
    Select KPI

<select style="display: inline;" name="KPI">
  <?php require '../components/kpi_combo.txt';?>   

</select> 
 
    Select Excel File    <input style="display: inline;" type="file" name="excel" />
    
    <input  type="submit" id="import" name="import" class="btn btn-info" value="Import" />
   </form>
   </div>
   <div align="center">


    <br>
   <?php

   echo "<b>Date :</b>" . $KPI_Date . " &nbsp;&nbsp;&nbsp; <b></b>&nbsp;&nbsp;&nbsp;" ;
   echo "<b> KPI :</b>" . $KPI_Description. "</b><br>";
echo "</div>";
?>

<div id="responsecontainer" align="center">


<?php
   echo $output;
   ?>
  </div>
 </body>
</html>