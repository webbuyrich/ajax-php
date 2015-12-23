<?php 
	

	// defines database connection data
	define('DB_HOST', 'localhost');
	define('DB_USER', 'ajaxuser');
	define('DB_PASSWORD', 'practical');
	define('DB_DATABASE', 'gitprojects_ajax');

	// connect to the database
	$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

	// Check connection
	if ($mysqli->connect_error) {
	    die("Connection failed: " . $mysqli->connect_error);
	} 
	echo "Connected successfully<br />";

	// what SQL query you want executed?
	$query = 'SELECT firstname, lastname FROM users';
	// execute the query
	$result = $mysqli->query($query);
	// do something with the results...
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	        $users[] = "'".$row['firstname']. " " . $row['lastname']."',<br >";
	        
	    }
	} else {
	    echo "0 results";
	}
	$mysqli->close();
	
	// ...
	// close the input stream
	$result->close();
	// close the database connection
	


?>