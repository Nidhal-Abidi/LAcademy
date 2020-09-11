<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>Learn Academy</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Software Engineering</li>

  </ol>
</nav>

<div class="java-container">

  <div class="card" >
      <img src="img16.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Computer Science Crash Course</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : CrashCourse</p>

      </div>
      <a href="engineering/software/description_crashcourse.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_crashcourse.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img17.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Computer Science and Software Engineering Theory with Briana</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : freeCodeCamp.org </p>
      </div>
      <a href="engineering/software/description_freecodecamp.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_freecodecamp.php" class="btn btn-primary">View Course !</a>
  </div>

</div>

 <?php
    require "../footer.php";
  ?>
