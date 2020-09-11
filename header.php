<?php
  session_start();
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="style.css">
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
 integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
 <link rel="stylesheet" href="styleloggedin.css">

 <title>Learn Academy</title>
 </head>
  <body>
    <div class="topnav" id="myTopnav">
    <a href="loggedin.php" class="active">Home</a>
        <?php
        if (isset($_SESSION['userId'])){
          echo '<a href="loggedin/profile.php" name="profile">Profile</a>
                <a href="includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
        }else{
          echo '<a href="#aboutus">ABOUT US</a>
          <a href="#contact">CONTACT</a>
          <a href="javascript:void(0);" class="icon" onclick="myFunction()">
            <i class="fa fa-bars"></i>
          </a>
          <a href="signup.php">SIGN UP</a>';
          echo '<a href="signin.php">SIGN IN</a>';
        }
         ?>

       </div>

  </header>
