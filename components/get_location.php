<?php

$user_IP = getenv('REMOTE_ADDR');
$geo=unserialize(file_get_contents(http://www.geoplugin.net/php.gp?ip=$user_IP));

	echo $geo["geoplugin_city"] . "<br>";
	echo $geo["geoplugin_regionName"]. "<br>";
	echo $geo["geoplugin_contryName"]. "<br>";

?>