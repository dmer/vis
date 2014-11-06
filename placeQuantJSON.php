<?php
// This PHP script runs a query on a database and outputs the result as JSON

// get database credentials
include /outsideOfWebDir/dbconfig.php

// Connecting, selecting database this is using postgres but mysql would work just as well as would connecting to a live JSON feed from somewhere
$dbconn = pg_connect("host=$hostname dbname=$database user=$username password=$password")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT name,size,url FROM "placeNames" WHERE size>12;
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

    $data = array();
	//echo $result;
    for ($x = 0; $x < pg_num_rows($result); $x++) {
        $data[] = pg_fetch_assoc($result);
		}
	// write data as valid JSON	
		echo '{"name":"lib651a", "children":';
		echo json_encode($data);
		echo '}';

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
