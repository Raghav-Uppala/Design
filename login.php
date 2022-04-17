<?php 
include 'components/header.php';
?>
<style>
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
    margin-bottom:20px;
  }
  .button:hover {
    color: hsl(60, 3%, 46%);
    border: hsl(60, 3%, 46%) solid 3px;
  }
   .input {
    background-color: rgba(30,30,30,0.0);
    border:none;
    border-bottom:hsl(0, 0%, 57%) 2px solid;
    margin-bottom:50px;
  }
  .form-container {
    background-color: rgba(30,30,30,0.5);
    border:none;
    padding:50px 0;
    width: 500px;
    margin-top:20vh;
  }
  #error {
    margin-top:10px;
    color: hsl(0,0%,46%);
  }
</style>

<center>
  <div class="form-container">
    <form action="includes/login.inc.php" method="post">
      <input type="text" name="uid/email" placeholder="Username/Email...." class="input"><br>
      <input type="password" name="pwd" placeholder="Password...." class="input"><br>
      <button type="submit" name="submit" class="button">Login</button>
    </form>
    <p style="color:hsl(0, 0%, 46%);">Dont have an account? click <a href="signup.php" style="color:hsl(0, 0%, 46%);">here</a> to sign up</p>
    <?php
    $url = substr($_SERVER['REQUEST_URI'], 17); 
    if($url == "?Empty") {
      echo "<p id='error'>Please fill out all fields</p>";
    }elseif($url == "?invalidUid") {
      echo "<p id='error'>Invalid email/username</p>";
    }elseif($url == "?invalidPwd") {
      echo "<p id='error'>Invalid password</p>";
    }
    ?>
  </div>
</center>

<?php
include 'components/footer.php';    
?>
