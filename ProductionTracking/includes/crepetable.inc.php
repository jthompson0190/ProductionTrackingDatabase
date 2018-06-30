<?php

include_once 'dbh.inc.php';

$sql = 'SELECT * FROM crepedailyproduction LIMIT 10';
$result = mysqli_query($conn, $sql) or die("Bad Query: $sql");
?>



