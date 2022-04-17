<?php
session_start();

if(isset($_POST["submit"])) {
  require_once 'dbh.inc.php';
	require_once 'functions.inc.php';
  
  $fn = $_POST["firstName"];
  $ln = $_POST["lastName"];
  $email = $_POST["email"];
  $userid = $_SESSION['userUid'];
  
  if(empty($fn) && empty($ln) && empty($email)) {
    header("Location: ../editprofile.php?Empty");
    exit();
  }
  if(empty($fn) != true){
    $sql = "UPDATE accounts SET FirstName = '$fn' WHERE userUid='$userid';";
    mysqli_query($conn, $sql);
    $_SESSION['userFirstName'] = $fn;
  }
  if(empty($ln) != true){
    $sql = "UPDATE accounts SET LastName = '$ln' WHERE userUid='$userid';";
    mysqli_query($conn, $sql);
    $_SESSION['userLastName'] = $ln;
  }
  if(empty($email) != true){
    if(emailExists($conn, $email) === true) {
      header("Location: ../editprofile.php?EmailTaken");
      exit();
    } else {
      $sql = "UPDATE accounts SET userEmail = '$email' WHERE userUid='$userid';";
      mysqli_query($conn, $sql);
      $_SESSION['userEmail'] = $email;
    }
  }
  header("Location: ../viewprofile.php");
}