<?php

if (isset($_POST['submit'])) {

	$uid = $_POST['uid/email'];
	$pwd = $_POST['pwd'];


	require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
  
	if(required1($uid, $pwd) === true) {
		header('Location: ../login.php?Empty');
		exit();
	}
  if(emailExists($conn, $uid) === true && uidCheck($conn, $uid) === true) {
    header('location: ../login.php?invalidUid');
    exit();
  }

	$session = "SELECT * FROM accounts WHERE userUid  = '$uid' OR userEmail = '$uid';";
	$resultses = mysqli_query($conn, $session) or die(mysqli_error($conn));
	if (mysqli_num_rows($resultses) > 0 ) {
		while($row = mysqli_fetch_assoc($resultses)) {
			$userId = $row['id'];
			$userFirstName = $row['FirstName'];
      $userLastName = $row['LastName'];
			$userEmail = $row['userEmail'];
			$userUid = $row['userUid'];
			$userPwd = $row['userPwd'];
      $IsAdmin = $row['Admin'];
      $CurrentOrder = $row['CurrentOrder'];

		}
	}

	if(pwdCheck($conn, $pwd, $userPwd) === false) {
		header('location: ../login.php?invalidPwd');
		exit();
	}


	session_start();
	$_SESSION['userId'] = $userId;
	$_SESSION['userUid'] = $userUid;
	$_SESSION['userEmail'] = $userEmail;
  $_SESSION['userFirstName'] = $userFirstName;
  $_SESSION['userLastName'] = $userLastName;
  $_SESSION['userUid'] = $userUid;
  $_SESSION['userPwd'] = $userPwd;
  $_SESSION['IsAdmin'] = $IsAdmin;
  $_SESSION['CurrentOrder'] = $CurrentOrder;

	header("Location: ../index.php");
}

else {
	header ('location: ../login.php');
}