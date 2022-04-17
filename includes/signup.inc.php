<?php 

if (isset($_POST['submit'])) {
	
	$firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
	$email = $_POST['email'];
	$uid = $_POST['Uid'];
	$pwd = $_POST['pwd']; 
	$pwd2 = $_POST['pwd2'];

	require_once 'dbh.inc.php';
	require_once 'functions.inc.php'; 

	if (required($firstname, $lastname, $email, $uid, $pwd, $pwd2) !== false) {
		header('Location: ../signup.php?error=Empty');
		exit();
	}

	elseif (invalidUid($uid) !== false) {
		header('Location: ../signup.php?error=InvalidUsername');
		exit();
	}
	elseif (invalidEmail($email) !== false) {
		header('Location: ../signup.php?error=InvalidEmail');
		exit();
	}
	elseif (pwdMatch($pwd, $pwd2) !== false) {
		header("Location: ../signup.php?error=PasswordsDontMatch");
		exit();
	}
	elseif (uidExists($conn, $uid) !== false) {
		header("Location: ../signup.php?error=UsernmaneTaken");
		exit();
	}

	elseif (emailExists($conn, $email) !== false) {
		header("Location: ../signup.php?error=EmailTaken");
		exit();
	}
	else {
	createUser($conn, $firstname, $lastname, $uid, $email, $pwd);
	}
}

else {
	header('Location: ../signup.php');
	exit();
}