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

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/KD6VuIbfIew";
            $nom_vid="Introduction to Java Programming, Its History, Why Study it";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/fhfVkPpIwjk";
            $nom_vid="How Java Program Works, Compiler, Interpreter";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/9kLmgpBmNpk";
            $nom_vid="How To Download and Install Eclipse IDE for Java Programming";
            $chapitre="0";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/U034JnDiaJs";
            $nom_vid="My First Java Hello World Program";
            $chapitre="0";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/mXBIrwv-JY0";
            $nom_vid="Java Primitive Data Types, Variables";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/z85Vg9S3i-I";
            $nom_vid="Creating and using Variables.";
            $chapitre="1";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/LSxh_3y-Vco";
            $nom_vid="Strings in Java Programming";
            $chapitre="1";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/psQQLAosB84";
            $nom_vid="Arrays in Java Programming";
            $chapitre="2";
            break;
          case '27':
            $lien="https://www.youtube.com/embed/n2U6ZOhv8ng";
            $nom_vid="How to Declare and initialise Arrays in different ways";
            $chapitre="2";
            break;
          case '28':
            $lien="https://www.youtube.com/embed/RTvTcpvhcl4";
            $nom_vid="Array User Input using For Loop";
            $chapitre="2";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/_86FMWNfGOc";
            $nom_vid="Copying Array and its Elements";
            $chapitre="2";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/udHgmxK9oAI";
            $nom_vid="Two Dimensional ( 2 D ) Array with Example";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/d8x5Nciymjs";
            $nom_vid="Three Dimensional Array ( 3 D )";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/YvKnA5Bt0vc";
            $nom_vid="Basic and Compound Arithmetic Operators";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/igoEVH1dv-E";
            $nom_vid="Increment and Decrement Operators";
            $chapitre="3";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/rN_dt3BSRXo";
            $nom_vid="Comparison Operators";
            $chapitre="3";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/KTvZkBfFR8U";
            $nom_vid="IF ELSE Conditional Statements";
            $chapitre="4";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/cV3Qo1TJ6ns";
            $nom_vid="Nested IF ELSE Statements";
            $chapitre="4";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/qdudJfu2C04";
            $nom_vid="Ternary Opeartor in Java Programming";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/2o0jEUhOqaw";
            $nom_vid="Logical Operators in Java Programming";
            $chapitre="4";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/SYpEBREKJuI";
            $nom_vid="Switch Statement in Java Programming";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/AsRphSuU2OI";
            $nom_vid="Looping with While Loop";
            $chapitre="5";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/GNlXEBVkksg";
            $nom_vid="DO WHILE Loop";
            $chapitre="5";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/MHtLSle7YYg";
            $nom_vid="For Loop With Example";
            $chapitre="5";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/-WGZ96NPzNA";
            $nom_vid="BREAK Statement in Java";
            $chapitre="5";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/U0gWWEZTh1o";
            $nom_vid="Continue Statement in Java";
            $chapitre="5";
            break;/*breakpoint*/
          case '41':
            $lien="https://www.youtube.com/embed/0wGq6yZNn60";
            $nom_vid="Classes, Objects, Methods";
            $chapitre="6";
            break;
          case '43':
            $lien="https://www.youtube.com/embed/OArkHvK3gOk";
            $nom_vid="Public, Default Access Specifiers, Packages";
            $chapitre="6";
            break;
          case '44':
            $lien="https://www.youtube.com/embed/OkZtn36U6-w";
            $nom_vid="Method Overloading, Nesting";
            $chapitre="6";
            break;
          case '46':
            $lien="https://www.youtube.com/embed/QkepUID9F-U";
            $nom_vid="Java Data Types and Default Values";
            $chapitre="6";
            break;
          case '47':
            $lien="https://www.youtube.com/embed/1qLzmHoGLaQ";
            $nom_vid="Class Constructors with Example";
            $chapitre="6";
            break;
          case '48':
            $lien="https://www.youtube.com/embed/4wQFTtnxofY";
            $nom_vid="Static Keyword, Methods, Variables";
            $chapitre="6";
            break;
          case '49':
            $lien="https://www.youtube.com/embed/xtn6og_CEic";
            $nom_vid="Java Private Access Specifiers";
            $chapitre="6";
            break;
          case '50':
            $lien="https://www.youtube.com/embed/NbpfMe1YaCA";
            $nom_vid="Java this Keyword with Example";
            $chapitre="6";
            break;/*breakpoint*/

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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_java_learninglad.php" style="color:white;">Apprendre la programmation avec JAVA</a></li>
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
                  case '0':
                    echo '<!-- Détails chapitre 0 -->
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
                    </div>';
                    break;
                  case '1':
                    echo '<!-- Détails chapitre 1 -->
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            Chapter 1 : Manipulating data types
                          </button>
                        </h2>
                      </div>
                      <div id="collapseTwo" class="collapse show"  aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=7">&#10170  Java Primitive Data Types, Variables </a><br>
                          <a href="actualvideocontent_learninglad.php?video=8">&#10170  Creating and using Variables </a><br>
                          <a href="actualvideocontent_learninglad.php?video=13">&#10170  Strings in Java Programming</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '2':
                    echo '<!-- Détails chapitre 2 -->
                    <div class="card">
                      <div class="card-header" id="headingThree">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                            Chapter 2 : Manipulating Arrays
                          </button>
                        </h2>
                      </div>
                      <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=26">&#10170  Arrays in Java Programming </a><br>
                          <a href="actualvideocontent_learninglad.php?video=27">&#10170  How to Declare and initialise Arrays in different ways</a><br>
                          <a href="actualvideocontent_learninglad.php?video=28">&#10170  Array User Input using For Loop</a><br>
                          <a href="actualvideocontent_learninglad.php?video=29">&#10170  Copying Array and its Elements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=31">&#10170  Two Dimensional ( 2 D ) Array with Example</a><br>
                          <a href="actualvideocontent_learninglad.php?video=33">&#10170  Three Dimensional Array (3 D )</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '3':
                    echo '<!-- Détails chapitre 3 -->
                    <div class="card">
                      <div class="card-header" id="headingFour">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                             Chapter 3 : Operators
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=9">&#10170  Basic and Compound Arithmetic Operators</a><br>
                          <a href="actualvideocontent_learninglad.php?video=10">&#10170  Increment and Decrement Operators </a><br>
                          <a href="actualvideocontent_learninglad.php?video=15">&#10170  Comparison Operators </a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '4':
                    echo '<!-- Détails chapitre 4 -->
                    <div class="card">
                      <div class="card-header" id="headingFive">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                             Chapter 4 : Conditional statements
                          </button>
                        </h2>
                      </div>
                      <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_learninglad.php?video=16">&#10170  IF ELSE Conditional Statements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=17">&#10170  Nested IF ELSE Statements</a><br>
                          <a href="actualvideocontent_learninglad.php?video=18">&#10170  Ternary Opeartor in Java Programming</a><br>
                          <a href="actualvideocontent_learninglad.php?video=19">&#10170  Logical Operators in Java Programming</a><br>
                          <a href="actualvideocontent_learninglad.php?video=25">&#10170  Switch Statement in Java Programming</a><br>
                        </div>
                      </div>
                    </div>';
                    break;
                  case '5':
                    echo '<!-- Détails chapitre 5 -->
                   <div class="card">
                     <div class="card-header" id="headingSix">
                       <h2 class="mb-0">
                         <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                             Chapter 5 : Loops
                         </button>
                       </h2>
                     </div>
                     <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                       <div class="card-body">
                         <a href="actualvideocontent_learninglad.php?video=20">&#10170  Looping with While Loop </a><br>
                         <a href="actualvideocontent_learninglad.php?video=21">&#10170  DO WHILE Loop.</a><br>
                         <a href="actualvideocontent_learninglad.php?video=22">&#10170  For Loop With Example</a><br>
                         <a href="actualvideocontent_learninglad.php?video=23">&#10170  BREAK Statement in Java</a><br>
                         <a href="actualvideocontent_learninglad.php?video=24">&#10170  Continue Statement in Java</a><br>
                       </div>
                     </div>
                   </div>';
                    break;
                  case '6':
                    echo '<!-- Détails chapitre 6 -->
                    <div class="card">
                      <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                              Chapter 6 : Object Oriented Programming
                          </button>
                        </h2>
                      </div>
                      <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
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
                    </div>';
                    break;
                }
              }
          ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
