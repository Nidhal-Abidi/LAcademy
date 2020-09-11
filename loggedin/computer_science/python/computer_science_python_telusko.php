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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_python.php" style="color:white;">Python</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Python Tutorial for Beginners</li>

  </ol>
</nav>
<!-- the actual content of this course ( Python Tutorial for Beginners )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Introduction
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=2">&#10170  Introduction to Python</a><br>
        <a href="actualvideocontent_telusko.php?video=3">&#10170  Python Installation | PyCharm</a><br>
        <a href="actualvideocontent_telusko.php?video=4">&#10170  Getting Started with Python</a><br>
        <a href="actualvideocontent_telusko.php?video=71">&#10170  Comments</a><br>
        <a href="actualvideocontent_telusko.php?video=72">&#10170  Is Python Compiled or Interpreted Language?</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : Manipulating Data Types
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=5">&#10170  Variables in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=6">&#10170  List in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=7">&#10170  Tuple | Set in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=8">&#10170  Dictionary in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=11">&#10170  More on Variables in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=12">&#10170  Data Types in Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Loops
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=23">&#10170  While Loop in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=24">&#10170  For Loop in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=25">&#10170  Break Continue Pass in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=26">&#10170  Break vs Continue vs Pass in Python part 2</a><br>
        <a href="actualvideocontent_telusko.php?video=28">&#10170  For Else in Python</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Arrays
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=30">&#10170  Array in Python</a><br>
        <a href="actualvideocontent_telusko.php?video=31">&#10170  Array values from User in Python | Search in Array</a><br>
        <a href="actualvideocontent_telusko.php?video=32">&#10170  Why Numpy? Installing Numpy in Pycharm</a><br>
        <a href="actualvideocontent_telusko.php?video=33">&#10170  Ways of Creating Arrays in Numpy</a><br>
        <a href="actualvideocontent_telusko.php?video=35">&#10170  Working with Matrix in Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 5 : Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=22">&#10170  If Elif Else Statement in Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Chapter 6 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=52">&#10170  Object Oriented Programming | Introduction</a><br>
        <a href="actualvideocontent_telusko.php?video=53">&#10170  Class and Object</a><br>
        <a href="actualvideocontent_telusko.php?video=54">&#10170  __init__ method</a><br>
        <a href="actualvideocontent_telusko.php?video=55">&#10170  Constructor, Self and Comparing Objects</a><br>
        <a href="actualvideocontent_telusko.php?video=56">&#10170  Types of Variables</a><br>
        <a href="actualvideocontent_telusko.php?video=57">&#10170  Types of Variables</a><br>
        <a href="actualvideocontent_telusko.php?video=59">&#10170  Inheritance</a><br>
        <a href="actualvideocontent_telusko.php?video=60">&#10170  Constructor in Inheritance</a><br>
        <a href="actualvideocontent_telusko.php?video=61">&#10170  Introduction to Polymorphism</a><br>
        <a href="actualvideocontent_telusko.php?video=62">&#10170  Duck Typing</a><br>
        <a href="actualvideocontent_telusko.php?video=63">&#10170  Operator Overloading | Polymorphism</a><br>
        <a href="actualvideocontent_telusko.php?video=64">&#10170  Method Overloading and Method Overriding</a><br>
        <a href="actualvideocontent_telusko.php?video=65">&#10170  Abstract Class and Abstract Method in Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
           Chapter 7 : Exceptions
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=68">&#10170  Exception Handling</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 8 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
           Chapter 8 : Useful Algorithms
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=73">&#10170  Linear Search using Python</a><br>
        <a href="actualvideocontent_telusko.php?video=74">&#10170  Binary Search Using Python</a><br>
        <a href="actualvideocontent_telusko.php?video=75">&#10170  Bubble Sort in python | List Sort</a><br>
        <a href="actualvideocontent_telusko.php?video=76">&#10170  Selection Sort using Python</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre  9-->
  <div class="card">
    <div class="card-header" id="headingNine">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
           Chapter 9 : Databases
        </button>
      </h2>
    </div>
    <div id="collapseNine" class="collapse" aria-labelledby="headingNine" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_telusko.php?video=77">&#10170  MySQL Workbench Setup | Python Database Connection</a><br>
        <a href="actualvideocontent_telusko.php?video=78">&#10170  Python Database Connection | MySQL</a><br>
      </div>
    </div>
  </div>


</div>

<?php require "../../../footer.php" ?>
