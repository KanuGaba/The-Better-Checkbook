<?php
//Bash commands:
//DROP TABLE tablename; deletes table
//DELETE FROM tablename; deletes data in table
	$db = new SQLite3('database.db');

	$usercreate = $_REQUEST["usercreate"];
	$passcreate  = $_REQUEST["passcreate"];
	$moneycreate  = $_REQUEST["moneycreate"];
	
	if($usercreate == "" || $passcreate == "" || $moneycreate == "")
	exit("Account failed to create, try again.");
	
	if(!is_numeric($moneycreate))
	exit("Account failed to create, try again.");
	
	$db->exec('INSERT INTO users (Username, Password) VALUES ("' . $usercreate . '", "' . $passcreate . '")');
	$db->exec('CREATE TABLE IF NOT EXISTS ' . $usercreate . ' (Totalmoney int, Operation varchar(255), Changemoney int, Reason varchar(255), Item varchar(255))');
	$db->exec('INSERT INTO ' . $usercreate . ' (Totalmoney) VALUES (' . $moneycreate . ')');
	
	echo "Account Created!";
	
 // View tables: OR //SELECT * FROM users;	
 //   $result = $db->query('SELECT * FROM users');
 //   echo "<table width='800px' border='1'><tr><th>Username</th><th>Password</th></tr>";
 //   while($row = $result->fetchArray())
 //       echo "<tr><td>" . $row["Username"] . "</td><td>" . $row["Password"] . "</td></tr>";
 //   echo "</table>";
    
 //   $result = $db->query('SELECT * FROM ' . $usercreate . '');
 //   echo "<table width='800px' border='1'><tr><th>Totalmoney</th><th>Operation</th><th>Changemoney</th><th>Reason</th><th>Item</th></tr>";
 //   while($row = $result->fetchArray())
 //       echo "<tr><td>" . $row["Totalmoney"] . "</td><td>" . $row["Operation"] . "</td><td>" . $row["Changemoney"] . "</td><td>" . $row["Reason"] . "</td><td>" . $row["Item"] . "</td></tr>";
 //   echo "</table>";
?>