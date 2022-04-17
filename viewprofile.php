<?php 
include 'components/header.php';
?>
<style>
  * {
    color:hsl(0, 0%, 57%);
  }
  #profile-container {
    border:none;
    padding:50px 0;
    width: 500px;
    margin-top:15vh;
    display:flex;
  }
  .profile-pic {
    width:200px;
    height:200px;
    border-radius:10%;
    margin-bottom:20px;
    background-color:rgba(30,30,30,0.8);
  }
  #profile-container-info {
    display: flex;
    justify-content: center;
    align-items: left;
    text-align: left;
    height: 200px;
    flex-direction:column;
    width:300px;
    margin:auto;
  }
  .wb {
    background-color:rgba(30,30,30,0.8);
    width:100%;
    height:30px;
    margin:10px;
    margin-left:0;
    text-align:center;
    display: flex;
    justify-content: center;
    align-content: center;
    flex-direction: column;
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
  }
  .button:hover {
    color: hsl(60, 3%, 46%);
    border: hsl(60, 3%, 46%) solid 3px;
  }
</style>

<center>
  <div id="profile-container">
    <div style="padding-right:100px;">
      <p style="padding-bottom:10px;">Profile Picture</p>
      <div class="profile-pic"></div>
    </div>
    <div id="profile-container-info">
      <div id="profile-name">
        <p>First and Last Name</p>
        <div class="wb" id="names">
          <p><?php echo $_SESSION["userFirstName"] . ' ' . $_SESSION["userLastName"] ?></p>
        </div>
      </div>
      <div class="profile-mail">
        <p>Email Address</p>
        <div class="wb" id="email-address">
          <p><?php echo $_SESSION["userEmail"] ?></p>
        </div>
      </div>
      <a href="editprofile.php" class="button">Edit Profile</a> 
    </div>
  </div>
</center>

<?php
include 'components/footer.php';
?>