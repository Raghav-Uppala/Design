<?php
include 'components/header.php';
?>
<style>
  body {
    color:white;
  }
  table  {
    border-collapse: separate;
    border-spacing: 0 20px;
    margin-top:20px;
    width:90vw;
    margin:auto;
  }
  tr {
    background-color: rgba(30,30,30,0.8);
  }
  td, th {
    height: 10vh;
    line-height: 10vh;
    text-align: center;
  }
  .name {
    width:12vw;
  }
  .qual {
    width:6vw;
  }
  .deliv {
    width:12vw;
  }
</style>
<?php

require_once 'includes/order.inc.php';

$orders = orders();

if($orders == []) {
  echo '
  <table>
  <tr valign="middle">
    <th class="name">Name</th> 
    <th class="disc">Discription</th>
    <th class="qual">Quality</th>
    <th class="deliv">Delivery</th>
  </tr>
  </table>
  <center>No Orders</center>
  ';
}

else {
  echo '
  <table>
  <tr valign="middle">
    <th class="name">Name</th> 
    <th class="disc">Discription</th>
    <th class="qual">Quality</th>
    <th class="deliv">Delivery</th>
  </tr>
  ';
  foreach ($orders as $order) {
    $orderdetails = explode(":;:;:", $order['order']);
    $deliv;
    if($orderdetails[2] == '2B') {
      $deliv = "2 Business Days";
    } else if($orderdetails[2] == "1W") {
      $deliv = "1 Business Week";
    } else if($orderdetails[2] == "2W") {
      $deliv = "2 Business Weeks";
    }
    echo '
    <tr valign="middle">
      <td>' . $order['userFirstName'] . ' ' . $order['userLastName'] . '</td> 
      <td>' . $orderdetails[0] . '</td>
      <td>' . $orderdetails[1] . '</td>
      <td>' . $deliv . '</td>
    </tr>
    ';
  }
  echo '</table>';
}

?>

<?php
include 'components/footer.php'
?>