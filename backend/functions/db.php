<?php


	$db_host = "localhost";
	$db_username = "root";
	$db_password = "root";
	$db_name = "mealful_db";

	$conn = new mysqli ($db_host, $db_username, $db_password, $db_name);

	if ($conn->connect_error) {
		//-- Send a backend notification 
		die ();

		
	}

?>