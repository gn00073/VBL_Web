<?php
session_start();
$success=$_SESSION["success"];
$User_Group=$_SESSION["User_Group"] ;

if ($success="true" and $User_Group="RSM" ) {
	
$Name=$_SESSION["Name"];
$Email=$_SESSION["Email"] ;	

}
else{
header('Location: ../login/index.php');


}
?>
