<?php

	$hostname = "localhost";
	$username = "gn0007";
	$password = "*890660843gV";
	$database = "VBL_DB";


	$conn = mysql_connect("$hostname","$username","$password") or die(mysql_error());
	mysql_select_db("$database", $conn) or die(mysql_error());

?>