<?php
session_start();

function empty1($x) {
  if (strval($x) == "") {
    return true;
  }
  else {
    return false;
  }
}

if(isset($_POST["submit"])) {
  require_once 'dbh.inc.php';
	require_once 'functions.inc.php';

  $orderdisc = $_POST["o"];
  $select = $_POST["select"];
  $select2 = $_POST["select2"];
  $userid = $_SESSION['userUid'];

  if(empty1($orderdisc) || empty1($select) || empty1($select2)) {
    header("Location: ../makeorder.php?empty");
    exit();
  }
  elseif(!empty1($orderdisc) && !empty1($select) && !empty1($select2)) {
    $order = $orderdisc . ":;:;:" . $select . ":;:;:" . $select2;
    $order2 =  ";L;;L::l;" . $order;
    $sql = "UPDATE accounts SET OrderHist = (CASE WHEN OrderHist IS NULL THEN '$order' ELSE CONCAT(OrderHist, '$order2') END) WHERE userUid='$userid';";
    mysqli_query($conn, $sql);

    header("Location: ../makeorder.php?success");

    exit();
  }
}
?>