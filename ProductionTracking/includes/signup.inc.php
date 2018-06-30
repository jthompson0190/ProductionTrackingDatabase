<?php

if (isset($_POST['register'])){

	include_once 'dbh.inc.php';

	$first = mysqli_real_escape_string($conn, $_POST['first']);
	$last = mysqli_real_escape_string($conn, $_POST['last']); 
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$uid = mysqli_real_escape_string($conn, $_POST['uid']); 
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	//Error Handlers
    //Check for empty fields
    if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
        header("Location: ../RegisterPage.php?signup=empty");
        exit();
    } else {
        //Check if input characters are valid
        if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
			header("Location: ../RegisterPage.php?signup=invalid");
			exit();
        } else {
			//Check if email is valid
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				header("Location: ../RegisterPage.php?signup=invalidemail");
				exit();
			} else {
				$sqlcheck = "SELECT * FROM users WHERE user_uid='$uid'";
				$result = mysqli_query($conn, $sqlcheck);
				$resultcheck = mysqli_num_rows($result);

				if ($resultcheck > 0) {
					header("Location: ../RegisterPage.php?signup=usertaken");
					exit();
				} else {
					//Hashing the password
					$hashedpwd = password_hash($pwd, PASSWORD_DEFAULT);
					//Insert the user into the database
					$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) 
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
					
				
					
				}
			}
		}
	}
}	else {
		header("Location: ../index.php");
		exit();
	}