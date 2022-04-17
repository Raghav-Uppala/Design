<!DOCTYPE html>
<html lang="en">
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/x-icon" href="./images/Logo.png">
  <link rel="stylesheet" href="./style.css">
  <title>Casual Pro</title>
  <link rel="apple-touch-icon" sizes="180x180" href="images/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon-16x16.png">
  <link rel="manifest" href="images/site.webmanifest">
</head>
<style>
  #login-Button {
    background-color: #111111;
    border: white solid 1px;
    color: white;
    padding: 9px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 20px;
    margin-right:30px;
  }
  * {
    color: hsl(360, 0%, 90%);
  }

  body {
    background-image: url(images/bg3.png);
  }

  #nav-ul {
    list-style-type: none;
    margin: 0;
    padding: 0px;
    overflow: hidden;
  }

  #nav-ul li {
    float: left;
  }

  #nav-ul li a {
    display: block;
    color: white;
    font-size: 20px;
    text-align: center;
    padding: 10px 20px;
    text-decoration: none;
  }

  #nav-ul li a:hover {
    font-weight: bold;
  }

</style>
<?php
$pagename = str_replace('.php', '', str_replace('/School/', '' ,$_SERVER['REQUEST_URI']));
$styleOfPageInNav = "class='nav-link active'"
?>
<body>
  <?php 
  session_start();
  if($pagename == "contact"){ $contact = $styleOfPageInNav;} else {$contact = "class='nav-link'";}
  if($pagename == "viewprofile"){ $viewprofile = $styleOfPageInNav;} else {$viewprofile = "class='nav-link'";}
  if($pagename == "orders"){ $orders = $styleOfPageInNav;} else {$orders = "class='nav-link'";}
  if($pagename == "makeorder"){ $makeorders = $styleOfPageInNav;} else {$makeorders = "class='nav-link'";}
  // if($pagename == "chat"){ $chat = $styleOfPageInNav;} else {$chat = "class='nav-link'";}
  if($pagename == "viewfeedback"){ $viewfeedback = $styleOfPageInNav;} else {$viewfeedback = "class='nav-link'";}
  if($pagename == "login"){ $login = $styleOfPageInNav;} else {$login = "class='nav-link'";}
  // if($pagename == "viewfeedback"){ $viewfeedback = $styleOfPageInNav;} else {$viewfeedback = "class='nav-link'";}
  // if($pagename == "viewfeedback"){ $viewfeedback = $styleOfPageInNav;} else {$viewfeedback = "class='nav-link'";}
  if($pagename == "index") { $index = $styleOfPageInNav;} else {$index = "class='nav-link'";}
  if($pagename == "hireUs") { $hireus = $styleOfPageInNav;} else {$hireus = "class='nav-link'";}
  ?>
  <nav class="navbar navbar-expand-lg navbar-dark bg-transparent" style="background: linear-gradient(to bottom, black, transparent);">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./images/Logo.png" alt="" width="40" height="40">
    </a>
    <?php
    if(isset($_SESSION['userUid']) == false){
      echo '
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a '.$index.' aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a '.$contact.' aria-current="page" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a '.$hireus.' aria-current="page" href="hireUs.php">Hire Us</a>
        </li>
        '.
        // <li class="nav-item" id="nav-login">
        //   <a '.$login.' aria-current="page" href="login.php">login</a>
        // </li>
        '
      </ul>
      <a class="navbar-text" id="login-Button" href="login.php">
        Login
      </a>';
    } elseif($_SESSION['IsAdmin'] != 1){
      echo '
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a '.$index.' aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a '.$contact.' aria-current="page" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">
          <a '.$viewprofile.' aria-current="page" href="viewprofile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a '.$makeorders.' aria-current="page" href="makeorder.php">Make an Order</a>
        </li>
        '
        // <li class="nav-item">
        //   <a '.$chat.' aria-current="page" href="chat.php">Chat</a>
        // </li>
        .'
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="includes/logout.inc.php">Logout</a>
        </li>
      </ul>';
    } elseif($_SESSION['IsAdmin'] == 1){
      echo '
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a '.$index.' aria-current="page" href="index.php">Home</a>
        </li>
        </li>
        <li class="nav-item">
          <a '.$viewprofile.' aria-current="page" href="viewprofile.php">View Profile</a>
        </li>
        <li class="nav-item">
          <a '.$orders.' aria-current="page" href="orders.php">Orders</a>
        </li>
        '
        // <li class="nav-item">
        //   <a '.$chat.' aria-current="page" href="chat.php">Chat</a>
        // </li>
        
        // <li class="nav-item">
        //   <a '.$viewfeedback.' aria-current="page" href="viewfeedback.php">View Feedback</a>
        // </li>
        .'
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="includes/logout.inc.php">Logout</a>
        </li>
      </ul>';
    }
    ?>
  </div>
</nav>