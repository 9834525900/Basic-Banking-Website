<?php

	$servername = "localhost";
	$username = "yashkale";
	$password = "9834525900";
	$dbname = "Maharashtrian_bank";
	$cfg['Servers'][$i]['AllowNoPassword'] = true;

	$conn = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>