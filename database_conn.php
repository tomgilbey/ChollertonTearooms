<?php
	$dbConn = new mysqli('localhost', 'unn_w22002938', 'nVdDmUKY68jLwdWh', 'unn_w22002938');
	if ($dbConn->connect_error) {
		echo "<p>Connection failed: ".$dbConn->connect_error."</p>\n";
		exit;
		}
	?>
 <!- Above code is used to establish a connection to the database and if there is an error returned then display what the error was on the page. --->