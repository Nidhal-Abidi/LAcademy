<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="accordionstyle.css">
<link rel="stylesheet" href="../../../style.css">
<title>Learn Academy</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../../../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="../../profile.php" name="profile">Profile</a>
               <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Java Programs For Practice</li>

  </ol>
</nav>
<!-- the actual content of this course ( Java Programs For Practice )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Practice problems
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_alexlee.php?video=1">&#10170 Reverse String in Java </a><br>
        <a href="actualvideocontent_alexlee.php?video=2">&#10170 How To Make Pattern In Java Using For Loop </a><br>
        <a href="actualvideocontent_alexlee.php?video=3">&#10170 How To Detect Arrow Keys In Java </a><br>
        <a href="actualvideocontent_alexlee.php?video=4">&#10170 Add Two Numbers From a User </a><br>
        <a href="actualvideocontent_alexlee.php?video=5">&#10170 Simple Java Program Example For Beginners </a><br>
        <a href="actualvideocontent_alexlee.php?video=6">&#10170 How To Find Duplicate Characters In A String In Java </a><br>
        <a href="actualvideocontent_alexlee.php?video=7">&#10170 How To Calculate Age From Date of Birth in Java </a><br>
        <a href="actualvideocontent_alexlee.php?video=8">&#10170 Prime Numbers Program  </a><br>
        <a href="actualvideocontent_alexlee.php?video=9">&#10170 Palindrome Java Program </a><br>
        <a href="actualvideocontent_alexlee.php?video=10">&#10170 Factorial Program in Java with Recursion </a><br>
        <a href="actualvideocontent_alexlee.php?video=11">&#10170 Java Program For Beginners </a><br>
        <a href="actualvideocontent_alexlee.php?video=12">&#10170 Practice Java Program - Build your own Reaction Timer </a><br>
        <a href="actualvideocontent_alexlee.php?video=13">&#10170 Tic Tac Toe Java Game - Build a Tic Tac Toe Game in 30 Minutes </a><br>
        <a href="actualvideocontent_alexlee.php?video=14">&#10170 Java Currency Formatter - HackerRank Solution Practice Program </a><br>
        <a href="actualvideocontent_alexlee.php?video=15">&#10170 Fortune Cookie Java Program - Build a Fortune Program in 11 Minutes </a><br>
        <a href="actualvideocontent_alexlee.php?video=16">&#10170 This Program Predicts My Subscriber Count - Exponential Growth Java Program Tutorial </a><br>
        <a href="actualvideocontent_alexlee.php?video=17">&#10170 Capitalize The First Letter of a String in Java  </a><br>
        <a href="actualvideocontent_alexlee.php?video=18">&#10170 Java Encryption and Decryption Tutorial (Basic) </a><br>
        <a href="actualvideocontent_alexlee.php?video=19">&#10170 Java: Fart Generator (Easy Java Program For Beginners) </a><br>
        <a href="actualvideocontent_alexlee.php?video=20">&#10170 Put Your Java Program on a Website (Tutorial) </a><br>
        <a href="actualvideocontent_alexlee.php?video=21">&#10170 Typing Speed Java Program - Calculate WPM (Words Per Minute) </a><br>

      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
