<?php 
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "root", "", "breachmender");

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname('C:/xampp/htdocs/breachmender/')));
	define('BASE_URL', 'http://localhost/breachmender/');
?>