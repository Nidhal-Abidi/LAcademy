<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../computer_science/java/accordionstyle.css">
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
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_software.php" style="color:white;">Software Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Computer Science and Software Engineering Theory with Briana</li>

  </ol>
</nav>
<!-- the actual content of this course ( Computer Science and Software Engineering Theory with Briana )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Computer Basics
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_freecodecamp.php?video=1">&#10170  4 basic components of a laptop</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=2">&#10170  More Computer Hardware</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=3">&#10170  Intro to Binary Code</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=4">&#10170  Decoding a Binary Number</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=5">&#10170  How To Measure Data Size</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=6">&#10170  Measuring Data Speed</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=7">&#10170  Binary Bytes</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 :  Javascript
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_freecodecamp.php?video=21">&#10170  Value Types</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=22">&#10170  MDN and Documentation</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=23">&#10170  Variables & camelCase</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=24">&#10170  Arrays & Objects</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=25">&#10170  Finding and Indexing Data in Arrays</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=26">&#10170  Manipulating Data</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Chrome Dev Tools
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_freecodecamp.php?video=30">&#10170  Elements Tab</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=31">&#10170  Network Tab</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=32">&#10170  Sources Tab</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=33">&#10170  Timeline Tab</a><br>
        <a href="actualvideocontent_freecodecamp.php?video=34">&#10170  Memory Tab</a><br>
        </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
