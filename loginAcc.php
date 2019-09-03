<?php
    $db = new SQLite3('database.db');

	$username = $_REQUEST["username"];
	$password  = $_REQUEST["password"];
	
	$result = $db->query('SELECT * FROM users WHERE username="' . $username . '"');
    while($row = $result->fetchArray()) {
        if($row["Password"] == $password)
            exit("Logged in!");
        else
            exit("Password is incorrect.");
    }
    echo("Username does not exist.");
?>