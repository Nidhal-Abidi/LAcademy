<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../../../style.css">
<link rel="stylesheet" href="accordionstyle.css">
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
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Learn Java Programming | Video Tutorial for Beginners</a></li>

  </ol>
</nav>
<!-- the actual content of this course ( apprendre a programmer avec java dominique liard )
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
        <a href="actualvideocontent_learninglad.php?video=1">&#10170  Introduction to Java Programming, Its History, Why Study it</a><br>
        <a href="actualvideocontent_learninglad.php?video=2">&#10170  How Java Program Works, Compiler, Interpreter</a><br>
        <a href="actualvideocontent_learninglad.php?video=4">&#10170  How To Download and Install Eclipse IDE for Java Programming</a><br>
        <a href="actualvideocontent_learninglad.php?video=5">&#10170  My First Java Hello World Program</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 1 : Manipulating data types
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=7">&#10170  Java Primitive Data Types, Variables </a><br>
        <a href="actualvideocontent_learninglad.php?video=8">&#10170  Creating and using Variables </a><br>
        <a href="actualvideocontent_learninglad.php?video=13">&#10170  Strings in Java Programming</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 2 : Manipulating Arrays
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=26">&#10170  Arrays in Java Programming </a><br>
        <a href="actualvideocontent_learninglad.php?video=27">&#10170  How to Declare and initialise Arrays in different ways</a><br>
        <a href="actualvideocontent_learninglad.php?video=28">&#10170  Array User Input using For Loop</a><br>
        <a href="actualvideocontent_learninglad.php?video=29">&#10170  Copying Array and its Elements</a><br>
        <a href="actualvideocontent_learninglad.php?video=31">&#10170  Two Dimensional ( 2 D ) Array with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=33">&#10170  Three Dimensional Array (3 D )</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 3 : Operators
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=9">&#10170  Basic and Compound Arithmetic Operators</a><br>
        <a href="actualvideocontent_learninglad.php?video=10">&#10170  Increment and Decrement Operators </a><br>
        <a href="actualvideocontent_learninglad.php?video=15">&#10170  Comparison Operators </a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 4 : Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=16">&#10170  IF ELSE Conditional Statements</a><br>
        <a href="actualvideocontent_learninglad.php?video=17">&#10170  Nested IF ELSE Statements</a><br>
        <a href="actualvideocontent_learninglad.php?video=18">&#10170  Ternary Opeartor in Java Programming</a><br>
        <a href="actualvideocontent_learninglad.php?video=19">&#10170  Logical Operators in Java Programming</a><br>
        <a href="actualvideocontent_learninglad.php?video=25">&#10170  Switch Statement in Java Programming</a><br>
      </div>
    </div>
  </div>
   <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
            Chapter 5 : Loops
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=20">&#10170  Looping with While Loop </a><br>
        <a href="actualvideocontent_learninglad.php?video=21">&#10170  DO WHILE Loop.</a><br>
        <a href="actualvideocontent_learninglad.php?video=22">&#10170  For Loop With Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=23">&#10170  BREAK Statement in Java</a><br>
        <a href="actualvideocontent_learninglad.php?video=24">&#10170  Continue Statement in Java</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
            Chapter 6 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=41">&#10170  Classes, Objects, Methods</a><br>
        <a href="actualvideocontent_learninglad.php?video=43">&#10170  Public, Default Access Specifiers, Packages</a><br>
        <a href="actualvideocontent_learninglad.php?video=44">&#10170  Method Overloading, Nesting</a><br>
        <a href="actualvideocontent_learninglad.php?video=46">&#10170  Java Data Types and Default Values</a><br>
        <a href="actualvideocontent_learninglad.php?video=47">&#10170  Class Constructors with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=48">&#10170  Static Keyword, Methods, Variables</a><br>
        <a href="actualvideocontent_learninglad.php?video=49">&#10170  Java Private Access Specifiers</a><br>
        <a href="actualvideocontent_learninglad.php?video=50">&#10170  Java this Keyword with Example</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
