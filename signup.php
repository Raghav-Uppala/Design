<?php
include 'components/header.php';
?>
<style>
  .form-container {
    background-color: rgba(30,30,30,0.5);
    border:none;
    padding:50px 0;
    width: 500px;
    margin-top:20vh;
  }
  .input {
    background-color: rgba(30,30,30,0.0);
    border:none;
    border-bottom:hsl(0, 0%, 57%) 2px solid;
    margin-bottom:50px;
  }
  .inputright {
    margin-left:50px;
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
    margin-bottom:20px;
  }
  .button:hover {
    color: hsl(60, 3%, 46%);
    border: hsl(60, 3%, 46%) solid 3px;
  }
  #error {
    margin-top:-20px;
    margin-bottom:10px;
    color: hsl(0,0%,46%);
  }
</style>
<center>
  <div class="form-container">
    <form action="includes/signup.inc.php" method="post">
      <div><input class="input" type="text" name="fname" placeholder="First name">
      <input class="input inputright" type="text" name="lname" placeholder="Last name"></div>
      <div><input class="input" type="text" name="Uid" placeholder="Username">
      <input class="input inputright" type="email" name="email" placeholder="Email"></div>
      <div><input class="input" type="password" name="pwd" placeholder="Password">
      <input class="input inputright" type="password" name="pwd2" placeholder="Repeat password"></div>
      <?php
      if (isset($_GET['error'])) {
        if ($_GET['error'] == "Empty") {
          echo "<p id='error'>fill out all the fields</p>";
        }
        if ($_GET['error'] == "InvalidUsername") {
          echo "<p id='error'>Invalid username</p>";
        }
        elseif($_GET['error'] == "InvalidEmail") {
          echo "<p id='error'>Invalid email</p>";
        }
        elseif($_GET['error'] == "PasswordsDontMatch") {
          echo "<p id='error'>Passwords don't match</p>";
        }
        elseif($_GET['error'] == "UsernmaneTaken") {
          echo "<p id='error'>Username is taken</p>";
        }
        elseif($_GET['error'] == "EmailTaken"){
          echo "<p id='error'>Email is in use</p>";
        }
        elseif ($_GET['error'] == "none") {
          header("location: login.php");
        }
      }
      ?>
      <button class="button" type="submit" name="submit">Sign Up</button>
    </form>
  </div>
</center>
<?php
include 'components/footer.php';
?>