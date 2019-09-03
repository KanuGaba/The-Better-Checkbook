<?php
    $db = new SQLite3('database.db');

	$username = $_REQUEST["username"];
	$operation = $_REQUEST["operation"];
	$changemoney = $_REQUEST["changemoney"];
	$reason = $_REQUEST["reason"];
	$item = $_REQUEST["item"];

    if($operation == "plus")
        $operation = "+";
        
    if($username == "" || $operation == "null"  || $changemoney == "" || $reason == "" || $item == "null")
	exit("Please complete the form.");

    $arr = [];
    $results = $db->query('SELECT Totalmoney FROM ' . $username . '');
    while ($row = $results->fetchArray()) {
        array_push($arr, $row);
    }
    $lastEl = array_pop((array_slice($arr, -1)));
    $totalmoney= $lastEl["Totalmoney"];

    if($operation == "+")
         $totalmoney = $totalmoney + $changemoney;
    if($operation == "-")
         $totalmoney = $totalmoney - $changemoney;

	$db->exec('INSERT INTO ' . $username . ' (Totalmoney, Operation, Changemoney, Reason, Item) VALUES (' . $totalmoney . ', "' . $operation . '", ' . $changemoney . ', "' . $reason . '", "' . $item . '")');
	echo "Submitted!";
?>