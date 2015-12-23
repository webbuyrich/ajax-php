<?php 
	

	// defines database connection data
	define('DB_HOST', 'localhost');
	define('DB_USER', 'ajaxuser');
	define('DB_PASSWORD', 'practical');
	define('DB_DATABASE', 'gitprojects_ajax');

	// connect to the database
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);
	// what SQL query you want executed?
	$query = 'SELECT user_id, user_name FROM users';
	// execute the query
	$result = $mysqli->query($query);
	// do something with the results...
	// ...
	// close the input stream
	$result->close();
	// close the database connection
	$mysqli->close();


?>