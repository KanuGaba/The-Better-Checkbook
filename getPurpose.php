<?php
    $db = new SQLite3('database.db');

	$username = $_REQUEST["username"];
	$grocery = 0; //0
	$clothes = 0; //1
	$car_maintenance = 0; //2
	$gas = 0; //3
	$supplies = 0; //4
	$technology = 0; //5
	$pay_check = 0; //6
	$subscriptions = 0; //7
	$travel = 0; //8
	$gift = 0; //9
	$other = 0; //10
   
    $results = $db->query('SELECT Item FROM ' . $username . '');
    while ($row = $results->fetchArray()) {
        if($row["Item"] == "grocery")
            $grocery = $grocery + 1;
        if($row["Item"] == "clothes")
            $clothes = $clothes + 1;
        if($row["Item"] == "car_maintenance")
            $car_maintenance = $car_maintenance + 1;
        if($row["Item"] == "gas")
            $gas = $gas + 1;
        if($row["Item"] == "supplies")
            $supplies = $supplies + 1;
        if($row["Item"] == "technology")
            $technology = $technology + 1;
        if($row["Item"] == "pay_check")
            $pay_check = $pay_check + 1;
        if($row["Item"] == "subscriptions")
            $subscriptions = $subscriptions + 1;
        if($row["Item"] == "travel")
            $travel = $travel + 1;
        if($row["Item"] == "gift")
            $gift = $gift + 1;
        if($row["Item"] == "other")
            $other = $other + 1;
    }
    
    echo $grocery . ", " . $clothes . ", " . $car_maintenance . ", " . $gas . ", " . $supplies . ", " . $technology . ", " . $pay_check . ", " . $subscriptions . ", " . $travel . ", " . $gift . ", " . $other;
?>