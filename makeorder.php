<?php 
include 'components/header.php';
?>

<style>
  .button {
    background-color: rgba(30,30,30,0.8);
    border: hsl(0, 0%, 36%) solid 3px;
    color: hsl(0, %, 46%);
    padding: 9px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    margin-top:10px;
    width: 20%;
  }
  .button:hover {
    color: hsl(0, 0%, 60%);
  }
  .textarea {
    background-color: rgba(30,30,30,0.0);
    border:none;
    border-bottom:hsl(0, 0%, 57%) 2px solid;
    margin-bottom:50px;
    display:flex;
    justify-content:center;
    width:60%;
    height:20vh;
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
  
  .error {
    margin-bottom:30px;
    color:hsl(0, 0%, 46%);
  }

  .select {
    background: rgba(30,30,30,0);
    border:none;
    border-bottom:hsl(300, 0%, 57%) 2px solid;
    display:flex;
    color: hsl(0, 0%, 46%);
    justify-content:center;
    margin-bottom:50px;
  }
  .option {
    background: rgba(30,30,30,1);
    border:none;
    color:hsl(0, 0%, 46%);
  }
  .input[type='textarea']::placeholder{ 
    text-align: center;
  }

</style>
<center>
  <div class="form-container">
    <?php
    $url = str_replace('/School/makeorder.php?', '' ,$_SERVER['REQUEST_URI']);
    if($url == "success") {
      echo "<p class='error'>Order placed successfully</p>";
    } elseif($url == "empty") {
      echo "<p class='error'>Please fill in all fields</p>";
    }
    ?>
    <form action="includes/makeorder.inc.php" method="post">
      <textarea type="textarea" name="o" class="textarea" placeholder="Order discription"></textarea>
      <select name="select" class="select">
        <option value="" class="option">Select the resolution of the picture</option>
        <option value="HD" class="option">HD</option>
        <option value="FHD" class="option">Full HD</option>
        <option value="4K" class="option">4K</option>
        <option value="8K" class="option">8K</option>  
      </select>
      <select name="select2" class="select">
        <option value="" class="option">Select when you want the picture</option>
        <option value="2B" class="option">2 Business days</option>
        <option value="1W" class="option">1 Business Week</option>
        <option value="2W" class="option">2 Business Weeks</option>
      </select>
      <button type="submit" name="submit" class="button">Submit</button>
    </form>
  </div>
</center>


<?php
include 'components/footer.php';
?>