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

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '2':
            $lien="https://www.youtube.com/embed/hEgO047GxaQ";
            $nom_vid="Introduction to Python";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/mbryl4MZJms";
            $nom_vid="Python Installation | PyCharm";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/DWgzHbglNIo";
            $nom_vid="Getting Started with Python";
            $chapitre="1";
            break;
          case '71':
            $lien="https://www.youtube.com/embed/ECxZtt6n90E";
            $nom_vid="Comments";
            $chapitre="1";
            break;
          case '72':
            $lien="https://www.youtube.com/embed/0BhSWyDEDC4";
            $nom_vid="Is Python Compiled or Interpreted Language?";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/TqPzwenhMj0";
            $nom_vid="Variables in Python";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/Eaz5e6M8tL4";
            $nom_vid="List in Python";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/Mf7eFtbVxFM";
            $nom_vid="Tuple | Set in Python";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/2IsF7DEtVjg";
            $nom_vid="Dictionary in Python";
            $chapitre="2";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/_OZIAHg5i7M";
            $nom_vid="More on Variables in Python";
            $chapitre="2";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/gCCVsvgR2KU";
            $nom_vid="Data Types in Python";
            $chapitre="2";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/HZARImviDxg";
            $nom_vid="While Loop in Python";
            $chapitre="3";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/0ZvaDa8eT5s";
            $nom_vid="For Loop in Python";
            $chapitre="3";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/yCZBnjF4_tU";
            $nom_vid="Break Continue Pass in Python";
            $chapitre="3";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/JCRpVwtVL4I";
            $nom_vid="Break vs Continue vs Pass in Python part 2";
            $chapitre="3";
            break;
          case '28':
            $lien="https://www.youtube.com/embed/38svC3U7hVo";
            $nom_vid="For Else in Python";
            $chapitre="3";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/6a39OjkCN5I";
            $nom_vid="Array in Python";
            $chapitre="4";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/9c9qhIcB3NA";
            $nom_vid="Array values from User in Python | Search in Array";
            $chapitre="4";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/8LlXhtfNZEQ";
            $nom_vid="Why Numpy? Installing Numpy in Pycharm";
            $chapitre="4";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/NYPKbmE0H6E";
            $nom_vid="Ways of Creating Arrays in Numpy";
            $chapitre="4";
            break;
          case '35':
            $lien="https://www.youtube.com/embed/Blzp9iuhZqo";
            $nom_vid="Working with Matrix in Python";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/PqFKRqpHrjw";
            $nom_vid="If Elif Else Statement in Python";
            $chapitre="5";
            break;
          case '52':
            $lien="https://www.youtube.com/embed/gZwPdqC2Os0";
            $nom_vid="Object Oriented Programming | Introduction";
            $chapitre="6";
            break;
          case '53':
            $lien="https://www.youtube.com/embed/8O5kX73OkIY";
            $nom_vid="Class and Object";
            $chapitre="6";
            break;
          case '54':
            $lien="https://www.youtube.com/embed/WIP3-woodlU";
            $nom_vid="__init__ method";
            $chapitre="6";
            break;
          case '55':
            $lien="https://www.youtube.com/embed/ic6wdPxcHc0";
            $nom_vid="Constructor, Self and Comparing Objects";
            $chapitre="6";
            break;
          case '56':
            $lien="https://www.youtube.com/embed/RSQjxL5WRNM";
            $nom_vid="Types of Variables";
            $chapitre="6";
            break;
          case '57':
            $lien="https://www.youtube.com/embed/lVfGQOzzRCM";
            $nom_vid="Types of Variables";
            $chapitre="6";
            break;
          case '59':
            $lien="https://www.youtube.com/embed/Cn7AkDb4pIU";
            $nom_vid="Inheritance";
            $chapitre="6";
            break;
          case '60':
            $lien="https://www.youtube.com/embed/6P-P879BcHQ";
            $nom_vid="Constructor in Inheritance";
            $chapitre="6";
            break;
          case '61':
            $lien="https://www.youtube.com/embed/P1vH3Pfw6BI";
            $nom_vid="Introduction to Polymorphism";
            $chapitre="6";
            break;
          case '62':
            $lien="https://www.youtube.com/embed/CuK0g8OFzwo";
            $nom_vid="Duck Typing";
            $chapitre="6";
            break;
          case '63':
            $lien="https://www.youtube.com/embed/9wd50TKv_OQ";
            $nom_vid="Operator Overloading | Polymorphism";
            $chapitre="6";
            break;
          case '64':
            $lien="https://www.youtube.com/embed/CcTzTuIsoFk";
            $nom_vid="Method Overloading and Method Overriding";
            $chapitre="6";
            break;
          case '65':
            $lien="https://www.youtube.com/embed/UDmJGvM-OUw";
            $nom_vid="Abstract Class and Abstract Method in Python";
            $chapitre="6";
           break;
          case '68':
            $lien="https://www.youtube.com/embed/6SPDvPK38tw";
            $nom_vid="Exception Handling";
            $chapitre="7";
            break;
          case '73':
            $lien="https://www.youtube.com/embed/UldZOLylez4";
            $nom_vid="Linear Search using Python";
            $chapitre="8";
            break;
          case '74':
            $lien="https://www.youtube.com/embed/DE-ye0t0oxE";
            $nom_vid="Binary Search Using Python";
            $chapitre="8";
            break;
          case '75':
            $lien="https://www.youtube.com/embed/Vca808JTbI8";
            $nom_vid="Bubble Sort in python | List Sort";
            $chapitre="8";
            break;
          case '76':
            $lien="https://www.youtube.com/embed/5KjapFQNxUo";
            $nom_vid="Selection Sort using Python";
            $chapitre="8";
            break;
          case '77':
            $lien="https://www.youtube.com/embed/WDEyt2VHpj4";
            $nom_vid="MySQL Workbench Setup | Python Database Connection";
            $chapitre="9";
            break;
          case '78':
            $lien="https://www.youtube.com/embed/vR5utJvN4JY";
            $nom_vid="Python Database Connection | MySQL";
            $chapitre="9";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_python.php" style="color:white;">Python</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_python_telusko.php" style="color:white;">Python Tutorial for Beginners</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;"><?php echo $nom_vid ?></li>
  </ol>
</nav>


<div class="video_accordian_container">
    <div class="row">
        <div class="col-md-8">
          <!-- The actual video content -->
          <div class="iframe-container">
            <iframe width="950" height="550" src="<?php echo isset($lien)?$lien:''; ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-md-4">
          <!-- The lessons within the same chapter  -->
          <?php
            if (isset($chapitre)){
              switch ($chapitre) {
                case '1':
                  echo '<!-- Détails chapitre 1 -->
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
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 : Manipulating Data Types
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=5">&#10170  Variables in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=6">&#10170  List in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=7">&#10170  Tuple | Set in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=8">&#10170  Dictionary in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=11">&#10170  More on Variables in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=12">&#10170  Data Types in Python</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : Loops
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=23">&#10170  While Loop in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=24">&#10170  For Loop in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=25">&#10170  Break Continue Pass in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=26">&#10170  Break vs Continue vs Pass in Python part 2</a><br>
                        <a href="actualvideocontent_telusko.php?video=28">&#10170  For Else in Python</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Arrays
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=30">&#10170  Array in Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=31">&#10170  Array values from User in Python | Search in Array</a><br>
                        <a href="actualvideocontent_telusko.php?video=32">&#10170  Why Numpy? Installing Numpy in Pycharm</a><br>
                        <a href="actualvideocontent_telusko.php?video=33">&#10170  Ways of Creating Arrays in Numpy</a><br>
                        <a href="actualvideocontent_telusko.php?video=35">&#10170  Working with Matrix in Python</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo '<!-- Détails chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapter 5 : Conditional statements
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=22">&#10170  If Elif Else Statement in Python</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           Chapter 6 : Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
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
                  </div>';
                  break;
                case '7':
                  echo '<!-- Détails chapitre 7 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           Chapter 7 : Exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=68">&#10170  Exception Handling</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '8':
                  echo '<!-- Détails chapitre 8 -->
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                           Chapter 8 : Useful Algorithms
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=73">&#10170  Linear Search using Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=74">&#10170  Binary Search Using Python</a><br>
                        <a href="actualvideocontent_telusko.php?video=75">&#10170  Bubble Sort in python | List Sort</a><br>
                        <a href="actualvideocontent_telusko.php?video=76">&#10170  Selection Sort using Python</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '9':
                  echo '<!-- Détails chapitre  9-->
                  <div class="card">
                    <div class="card-header" id="headingNine">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseNine" aria-expanded="true" aria-controls="collapseNine">
                           Chapter 9 : Databases
                        </button>
                      </h2>
                    </div>
                    <div id="collapseNine" class="collapse show" aria-labelledby="headingNine" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_telusko.php?video=77">&#10170  MySQL Workbench Setup | Python Database Connection</a><br>
                        <a href="actualvideocontent_telusko.php?video=78">&#10170  Python Database Connection | MySQL</a><br>
                      </div>
                    </div>';
                  break;

              }
            }
           ?>
        </div>
    </div>
</div>
<?php require "../../../footer.php" ?>
