<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">C++ Programming Tutorials</li>

  </ol>
</nav>
<!-- the actual content of this course (  C++ Programming Tutorials  )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 0 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 0 : Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=1">&#10170  Installing CodeBlocks</a><br>
        <a href="actualvideocontent_thenewboston.php?video=2">&#10170  Understanding a Simple C++ Program</a><br>
        <a href="actualvideocontent_thenewboston.php?video=3">&#10170  More on Printing Text</a><br>
        <a href="actualvideocontent_thenewboston.php?video=4">&#10170  Variables </a><br>
        <a href="actualvideocontent_thenewboston.php?video=6">&#10170  Variables Memory Concepts</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 1 : Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=8">&#10170  If Statement</a><br>
        <a href="actualvideocontent_thenewboston.php?video=17">&#10170  If / else Statement</a><br>
        <a href="actualvideocontent_thenewboston.php?video=25">&#10170  Switch Statement</a><br>
        <a href="actualvideocontent_thenewboston.php?video=26">&#10170  Logical Operators</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 2 :  Procedural Programming
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=9">&#10170  Functions</a><br>
        <a href="actualvideocontent_thenewboston.php?video=11">&#10170  Functions That Use Multiple Parameters</a><br>
        <a href="actualvideocontent_thenewboston.php?video=28">&#10170  Default Arguments / Parameters</a><br>
        <a href="actualvideocontent_thenewboston.php?video=30">&#10170  Function Overloading</a><br>
        <a href="actualvideocontent_thenewboston.php?video=31">&#10170  Recursion</a><br>
        <a href="actualvideocontent_thenewboston.php?video=38">&#10170  Introduction to Pointers</a><br>
        <a href="actualvideocontent_thenewboston.php?video=39">&#10170  Pass by Reference with Pointers</a><br>
        <a href="actualvideocontent_thenewboston.php?video=41">&#10170  Pointers and Math</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 3 : Loops
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=18">&#10170  While Loops</a><br>
        <a href="actualvideocontent_thenewboston.php?video=19">&#10170  Simple Program Using a Loop</a><br>
        <a href="actualvideocontent_thenewboston.php?video=22">&#10170  For Loops</a><br>
        <a href="actualvideocontent_thenewboston.php?video=24">&#10170  Do While Loops</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Arrays
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=32">&#10170  Arrays</a><br>
        <a href="actualvideocontent_thenewboston.php?video=33">&#10170  Create an Array Using Loops</a><br>
        <a href="actualvideocontent_thenewboston.php?video=36">&#10170  Multidimensional Arrays</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
           Chapter 5 : Data Types
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=71">&#10170  String Class and String Functions</a><br>
        <a href="actualvideocontent_thenewboston.php?video=72">&#10170  String Substrings, Swapping, and Finding</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseFour">
           Chapter 6 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=42">&#10170  Arrow Member Selection Operator</a><br>
        <a href="actualvideocontent_thenewboston.php?video=43">&#10170  Deconstructors</a><br>
        <a href="actualvideocontent_thenewboston.php?video=44">&#10170  Const Objects</a><br>
        <a href="actualvideocontent_thenewboston.php?video=45">&#10170  Member Initializers</a><br>
        <a href="actualvideocontent_thenewboston.php?video=46">&#10170  Composition</a><br>
        <a href="actualvideocontent_thenewboston.php?video=47">&#10170  Composition Part 2</a><br>
        <a href="actualvideocontent_thenewboston.php?video=48">&#10170  Friend</a><br>
        <a href="actualvideocontent_thenewboston.php?video=49">&#10170  This keyword</a><br>
        <a href="actualvideocontent_thenewboston.php?video=50">&#10170  Operator Overloading</a><br>
        <a href="actualvideocontent_thenewboston.php?video=51">&#10170  More on Operator Overloading</a><br>
        <a href="actualvideocontent_thenewboston.php?video=52">&#10170  Inheritance</a><br>
        <a href="actualvideocontent_thenewboston.php?video=53">&#10170  Protected Members</a><br>
        <a href="actualvideocontent_thenewboston.php?video=54">&#10170  Derived Class Constructors and Destructors</a><br>
        <a href="actualvideocontent_thenewboston.php?video=55">&#10170  Introduction to Polymorphism</a><br>
        <a href="actualvideocontent_thenewboston.php?video=56">&#10170  Virtual Functions</a><br>
        <a href="actualvideocontent_thenewboston.php?video=57">&#10170  Abstract Classes and Pure virtual Functions</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseFour">
           Chapter 7 : Exceptions
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewboston.php?video=62">&#10170  Exceptions</a><br>
        <a href="actualvideocontent_thenewboston.php?video=63">&#10170  More Exceptions Examples</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
