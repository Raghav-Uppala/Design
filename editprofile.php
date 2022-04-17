<?php
include 'components/header.php';
?>

<style>
  label {
    color:hsl(0, 0%, 57%);
  }
  .button {
    background-color: rgba(30,30,30,0.8);
    border: hsl(0, 0%, 57%) solid 3px;
    color: hsl(0, 0%, 57%);
    padding: 9px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin-top:10px;
    width: 20%;
  }
  .button:hover {
    color: hsl(60, 3%, 46%);
    border: hsl(60, 3%, 46%) solid 3px;
  }
  .form-container {
    background-color: rgba(30,30,30,0.5);
    border:none;
    margin:0;
    padding:0;
    padding:50px 0;
    width: 500px;
    margin-top:20vh;
  }
  .input {
    background-color: rgba(30,30,30,0.0);
    border:none;
    border-bottom:hsl(0, 0%, 57%) 2px solid;
    margin-bottom:50px;
    display:flex;
    justify-content:center;
  }

  .error {
    margin-bottom:30px;
    color:hsl(60, 3%, 46%);
  }

</style>

<center>
  <div class="form-container">
    <?php
    $url = str_replace('/School/editprofile.php?', '' ,$_SERVER['REQUEST_URI']);
    if($url == "Empty") {
      echo "<p class='error'>Fill out at least one field</p>";
    } elseif($url == "EmailTaken") {
      echo "<p class='error'>This email is taken</p>";
    }
    ?>
    <form action="includes/editprofile.inc.php" method="post">
      <label>First name</label>
      <input type="text" name="firstName" placeholder=<?php echo  $_SESSION["userFirstName"]; ?> class="input">
      <label>Last name</label>
      <input type="text" name="lastName" placeholder=<?php echo $_SESSION["userLastName"] ?> class="input">
      <label>Email</label>
      <input type="email" name="email" placeholder=<?php echo $_SESSION["userEmail"] ?> class="input">
      <button type="submit" name="submit" class="button">Save</button>
    </form>
  </div>
</center>

<?php
include 'components/footer.php'
?>