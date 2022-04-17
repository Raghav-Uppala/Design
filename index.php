<?php 
include 'components/header.php';
?>
<style>
  @import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap');
  .container {
    height:calc(100vh - 59px);
  }
  .cp {
    font-size:200px;
    font-family: 'Dancing Script', cursive;
  }
</style>
<?php 
// if (isset($_SESSION['userUid'])) {
//   echo '<p>hi ' . $_SESSION['userFirstName'] . '</p>';
// }
?>
<div class="container">
<center><h1 class="cp">Casualpro</h1></center>
</div>

<?php
include 'components/footer.php';
?>