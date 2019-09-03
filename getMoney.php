<?php
    $db = new SQLite3('database.db');

	$username = $_REQUEST["username"];
	
   
    $results = $db->query('SELECT Totalmoney FROM ' . $username . '');
    while ($row = $results->fetchArray()) {
        echo $row["Totalmoney"] . ",";
    }
?>