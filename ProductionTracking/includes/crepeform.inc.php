<?php

include_once 'dbh.inc.php';


$machine = mysqli_real_escape_string($conn, $_POST['machine']);
$operator = mysqli_real_escape_string($conn, $_POST['operator']); 
$produtionOrder = mysqli_real_escape_string($conn, $_POST['productionOrder']);
$gradeCode = mysqli_real_escape_string($conn, $_POST['gradeCode']); 
$totalKgs = mysqli_real_escape_string($conn, $_POST['totalKgs']); 
$rate = mysqli_real_escape_string($conn, $_POST['rate']);


$sql = "SELECT FROM crepedailyproduction(user_first, user_last, user_email, user_uid, user_pwd) 
VALUES (?, ?, ?, ?, ?);";
$stmt = mysqli_stmt_init($conn);
if (!mysqli_stmt_prepare($stmt, $sql)){
    echo "SQL Error";
} else {
    mysqli_stmt_bind_param($stmt, "sssss",$first,$last, $email, $uid, $hashedpwd);
    mysqli_stmt_execute($stmt);
}
header("Location: ../index.php?RegisterSuccess");
exit();
