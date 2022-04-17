<?php

function required($firstname, $lastname, $email, $uid, $pwd, $pwd2) {
	$return;
	if ($firstname === '' || $lastname === '' || $email === '' || $uid === '' || $pwd === '' || $pwd2 === '') {
		$return = true;
	}
	else {
		$return =  false;
	}
	return $return;
}

function required1($uid, $pwd) {
	$return = false;
	if ($uid === '' || $pwd === '') {
		$return = true;
	}
	return $return;
}


function invalidUid($uid) {
	$result;
	if (!preg_match("/^[a-zA-Z0-9]*$/", $uid )) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function invalidEmail($email) {
	$result;
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function pwdMatch($pwd, $pwd2) {
	$result;
	if ($pwd !== $pwd2) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}

function uidExists($conn, $uid) {
	$sql = "SELECT * FROM accounts WHERE userUid LIKE'$uid';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) != 1){
		$return = false;
	}
	else{
		$return = true;
	}
	return $return;
}

function emailExists($conn, $email) {
	$sql = "SELECT * FROM accounts WHERE userEmail LIKE'$email';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) != 1){
		$return = false;
	}
	else{
		$return = true;
	}
	return $return;
	/*$sql = "SELECT userUid FROM accounts;";
	$result1 = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result1) > 0 ) {
		$result = false;
		while($row = mysqli_fetch_assoc($result1)) {
			if ($row === $email) {
				 $result = true;
			}
		}
	} 

	else {
	  $result = false;
	}

	return $result;*/
}

function createuser ($conn, $firstname, $lastname, $uid, $email, $pwd) {
	$uid = stripcslashes($uid);
	$uid = mysqli_real_escape_string($conn, $uid);
	$email = mysqli_real_escape_string($conn, $email);
	$pwd = mysqli_real_escape_string($conn, $pwd);
	$name = mysqli_real_escape_string($conn, $name);

	$sql = "INSERT INTO accounts(FirstName, LastName, userEmail, userUid, userPwd) VALUES('$firstname', '$lastname', '$email', '$uid', '$pwd');";

	if (mysqli_query($conn, $sql)) {
		header('Location: ../signup.php?error=none');
		$result = true;
	} 

	else {
	 	$result = false;
	}
	return $result;
}



function uidCheck($conn, $uid) {
	$sql2 = "SELECT * FROM accounts WHERE userUid LIKE'$uid';";
	$result2 = mysqli_query($conn, $sql2);
	$sql = "SELECT * FROM accounts WHERE userEmail LIKE'$uid';";
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result) != 1 && mysqli_num_rows($result2) != 1){
		$return = true;
	}
	else{
		$return = false;
	}
	return $return;
} 

function pwdCheck($conn, $pwd, $userPwd) {
	if ($pwd === $userPwd) {
		$result = true;
	}
	else {
		$result = false;
	}
	return $result;
}





#if ($row['userEmail'] === $uid || $row['userUid'] === $uid)*/