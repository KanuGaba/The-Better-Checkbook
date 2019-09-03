<?php
    $db = new SQLite3('database.db');

	$username = $_REQUEST["username"];

    $result = $db->query('SELECT * FROM ' . $username . '');
    echo "<center>";
    echo "<table width='800px' border='1' style='color:white;font-family:EthRomainEthon'><tr><th>Total Money</th><th>Operation</th><th>Change in Money</th><th>Reason</th><th>Purpose</th></tr>";
    while($row = $result->fetchArray())
        echo "<tr style='text-align:center;'><td>" . $row["Totalmoney"] . "</td><td>" . $row["Operation"] . "</td><td>" . $row["Changemoney"] . "</td><td>" . $row["Reason"] . "</td><td>" . $row["Item"] . "</td></tr>";
    echo "</table>";
    echo "</center>";
?>