<?php
	
	// -- name of the server --
	$serverName = "localhost:3306";
	
	// -- username --
	$username = "root";
	
	// -- password --
	$password = "";
	
	// -- name of the database --
	$database = "abril";
	
	// -- try to connect --
	$connection = mysqli_connect("localhost","root","","abril","3306", null);

	// -- checks if the connection was successful --
	if($connection->connect_errno>0) {
		die('Unable to connect to database ['.$db->connect_error.']');
	}

?>