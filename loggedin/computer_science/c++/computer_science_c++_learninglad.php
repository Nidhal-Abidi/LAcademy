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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;font-size:bold;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"> Learn C++ Programming | Video Tutorial for Beginners</li>

  </ol>
</nav>
<!-- the actual content of this course (  Learn C++ Programming | Video Tutorial for Beginners)
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
        <a href="actualvideocontent_learninglad.php?video=1">&#10170  What is C++, Its Introduction and History</a><br>
        <a href="actualvideocontent_learninglad.php?video=2">&#10170  Where CPP is Used, Why Learn C++ Programming Language</a><br>
        <a href="actualvideocontent_learninglad.php?video=3">&#10170  C++ Source Code to Executable | Compilation, Linking, Pre Processing | Build Process Explained</a><br>
        <a href="actualvideocontent_learninglad.php?video=4">&#10170  Tool Set, Tool Chain and IDE </a><br>
        <a href="actualvideocontent_learninglad.php?video=5">&#10170  Installing Code Blocks IDE with Compiler for C and C++</a><br>
        <a href="actualvideocontent_learninglad.php?video=6">&#10170  C++ First Hello World Program</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 1 : Manipulating Data types
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=7">&#10170  C++ Constants, Variables, Data types, Keywords</a><br>
        <a href="actualvideocontent_learninglad.php?video=8">&#10170  Creating and Using C++ Variables</a><br>
        <a href="actualvideocontent_learninglad.php?video=9">&#10170  C++ Console Output with Cout</a><br>
        <a href="actualvideocontent_learninglad.php?video=10">&#10170  Cin in C++ for Receiving User, Console Input </a><br>
        <a href="actualvideocontent_learninglad.php?video=53">&#10170  Introduction to Strings in C++</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 2 :  Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=16">&#10170  C++ Nested IF ELSE and IF ELSEIF</a><br>
        <a href="actualvideocontent_learninglad.php?video=17">&#10170  C++ Logical and Comparison Operators</a><br>
        <a href="actualvideocontent_learninglad.php?video=18">&#10170  C++ Ternary Operator (Conditional Operator)</a><br>
        <a href="actualvideocontent_learninglad.php?video=31">&#10170  C++ Switch Statement with Example </a><br>
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
        <a href="actualvideocontent_learninglad.php?video=19">&#10170  While Loop</a><br>
        <a href="actualvideocontent_learninglad.php?video=20">&#10170  Do While Loop with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=21">&#10170  For Loop with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=29">&#10170  C++ Break Statement with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=30">&#10170  C++ Continue Statement with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=52">&#10170  For Each Loop | Range Based For Loop </a><br>
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
        <a href="actualvideocontent_learninglad.php?video=22">&#10170  Introduction to ARRAYS in CPP</a><br>
        <a href="actualvideocontent_learninglad.php?video=23">&#10170  Two Dimensional ( 2D ) and Multidimensional Arrays in CPP</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseFour">
           Chapter 5 : Procedural Programming
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_learninglad.php?video=24">&#10170  Introduction to CPP Functions</a><br>
        <a href="actualvideocontent_learninglad.php?video=25">&#10170  CPP Function Parameters | Returning Values from Functions </a><br>
        <a href="actualvideocontent_learninglad.php?video=26">&#10170  C++ Default Function Parameters</a><br>
        <a href="actualvideocontent_learninglad.php?video=35">&#10170  Introduction to C++ Pointers </a><br>
        <a href="actualvideocontent_learninglad.php?video=39">&#10170  Const Keyword with Functions and Arrays in C++ with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=48">&#10170  New and Delete Operators in C++ | Dynamic Memory Allocation</a><br>
        <a href="actualvideocontent_learninglad.php?video=49">&#10170  Dynamically Allocating Arrays Depending on User Input in C++</a><br>
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
        <a href="actualvideocontent_learninglad.php?video=56">&#10170  C++ Object Oriented Programming Video Tutorial</a><br>
        <a href="actualvideocontent_learninglad.php?video=57">&#10170  C++ OOPS Video Tutorials for Beginners | Class Properties, Methods, Members</a><br>
        <a href="actualvideocontent_learninglad.php?video=58">&#10170  Creating Objects from a Class in Different Ways </a><br>
        <a href="actualvideocontent_learninglad.php?video=60">&#10170  Private Access Specifier </a><br>
        <a href="actualvideocontent_learninglad.php?video=61">&#10170  Class Constructors </a><br>
        <a href="actualvideocontent_learninglad.php?video=62">&#10170  Overloading Class Constructors</a><br>
        <a href="actualvideocontent_learninglad.php?video=64">&#10170  Destructors in a Class </a><br>
        <a href="actualvideocontent_learninglad.php?video=65">&#10170  C++ Destructors to Release Resources with example</a><br>
        <a href="actualvideocontent_learninglad.php?video=66">&#10170  C++ Static Variables and Members in Class </a><br>
        <a href="actualvideocontent_learninglad.php?video=67">&#10170  C++ Static Methods in Classes</a><br>
        <a href="actualvideocontent_learninglad.php?video=68">&#10170  Friend Function</a><br>
        <a href="actualvideocontent_learninglad.php?video=69">&#10170  Inheritance, Poly Morphism | Introduction</a><br>
        <a href="actualvideocontent_learninglad.php?video=76">&#10170  Order of Execution of Constructors and Destructors in Inheritance in C++</a><br>
        <a href="actualvideocontent_learninglad.php?video=81">&#10170  C++ this Keyword </a><br>
        <a href="actualvideocontent_learninglad.php?video=84">&#10170  C++ Virtual Function | Inherited Attributes, Hierarchical Nature </a><br>
        <a href="actualvideocontent_learninglad.php?video=85">&#10170  C++ Pure Virtual Functions, Abstract Classes</a><br>
        <a href="actualvideocontent_learninglad.php?video=86">&#10170  C++ Diamond problem in OOPS, Solution using Virtual Inheritance with Example</a><br>
        <a href="actualvideocontent_learninglad.php?video=106">&#10170  CPP Copy Constructor with Example</a><br>
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
        <a href="actualvideocontent_learninglad.php?video=98">&#10170  Introduction to Exception Handling | try, catch and throw </a><br>
        <a href="actualvideocontent_learninglad.php?video=101">&#10170  Functions Throwing Exceptions</a><br>
        <a href="actualvideocontent_learninglad.php?video=103">&#10170  Creating Custom, User Defined Exception Class</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
