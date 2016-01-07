<?php
	


	//generate XML output
	header('Content-Type: text/xml');

	//generate XML header
	echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';

	//create <response> element
	echo '<response>';

	//get user name
	$name = $_GET['name'];

	//generate output depending on the user name received from client
	$userNames = array(
		'Richard','Victor','Frank','Tammy','Albert','Diana','Harold','Patrick','Christopher','Jennifer','Joan','Raymond','Gerald','Frances','Joan','Timothy','Arthur','Sean','Scott','Kevin',
		'Andrea','Barbara','Carolyn','Jose','Charles','Terry','Kathy','Anthony','Mildred','Emily','Joyce','Andrew','Ryan','Janet','Emily','Alice','Ruth','Billy','Donald','Jeffrey',
		'Shawn','Jesse','David','Daniel','Jessica','Margaret','Emily','Dennis','Denise','Lawrence','Ryan','Andrew','Carlos','Theresa','Randy','Brian','Norma','Gloria','Kathleen','Judith',
		'Lori','Willie','Matthew','Eric','Daniel','Joshua','Aaron','Judy','Kathryn','Doris','Harold','Ernest','Janice','Tammy','Larry','Deborah','Charles','Russell','Todd','Cheryl',
		'Julia','Steve','Howard','Margaret','Sandra','Evelyn','Richard','Christine','Wanda','Larry','Janet','Mildred','Peter','Martin','Jesse','Sara','Dennis','Aaron','Paul','Louise');

	if(in_array(strtolower($name), array_map('strtolower', $userNames)))

		echo 'Hello, master ' . htmlentities($name) . '!';

	else if (trim($name) == '')

		echo 'Stranger, please tell me your name!';

	else

		echo htmlentities($name) . ', I don\'t know you!';

	//close the <response> element
	echo '</response>';


		
















?>