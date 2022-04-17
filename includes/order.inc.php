<?php 


function orders() {
  require_once 'includes/dbh.inc.php';
  $orders = array();
  $session = "SELECT * FROM accounts WHERE OrderHist IS NOT NULL;";
  $resultses = mysqli_query($conn, $session) or die(mysqli_error($conn));
  if (mysqli_num_rows($resultses) > 0 ) {
    while($row = mysqli_fetch_assoc($resultses)) {
      $userId = $row['id'];
      $userFirstName = $row['FirstName'];
      $userLastName = $row['LastName'];
      $userEmail = $row['userEmail'];
      $userUid = $row['userUid'];
      $OrderHist = $row['OrderHist'];

      $OrderHistarray = explode(";L;;L::l;", $OrderHist);
      foreach ($OrderHistarray as $orderinh){
        $order = array(
          'userId' => $userId,
          'userFirstName' => $userFirstName,
          'userLastName' => $userLastName,
          'userEmail' => $userEmail,
          'userUid' => $userUid,
          // 'userBio' => $userBio,
          'order' => $orderinh
        );
        array_push($orders, $order);
      }
    }
  }
  return $orders;
}

?>