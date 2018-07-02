<?php

$dbservername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

$conn = mysqli_connect($dbservername, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>