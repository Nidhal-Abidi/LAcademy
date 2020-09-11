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
          case '1':
            $lien="https://www.youtube.com/embed/SQHREey_Yuc";
            $nom_vid="What is C++, Its Introduction and History";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/brqRL_t0RmM";
            $nom_vid="Where CPP is Used, Why Learn C++ Programming Language";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/ZTu0kf-7h08";
            $nom_vid="C++ Source Code to Executable | Compilation, Linking, Pre Processing | Build Process Explained";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/SezbHFe-jy4";
            $nom_vid="Tool Set, Tool Chain and IDE ";
            $chapitre="0";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/MDJ9uEHDhfU";
            $nom_vid="Installing Code Blocks IDE with Compiler for C and C++";
            $chapitre="0";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/e840YAaK620";
            $nom_vid="C++ First Hello World Program";
            $chapitre="0";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/z600MQdQ9lg";
            $nom_vid="C++ Constants, Variables, Data types, Keywords";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/5kjOhtniLOs";
            $nom_vid="Creating and Using C++ Variables";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/c7foOFAYqbk";
            $nom_vid="C++ Console Output with Cout";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/lW_ZT_OZD1A";
            $nom_vid="Cin in C++ for Receiving User, Console Input";
            $chapitre="1";
            break;
          case '53':
            $lien="https://www.youtube.com/embed/3-v_RigflHs";
            $nom_vid="Introduction to Strings in C++";
            $chapitre="1";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/oMrt_87aW-U";
            $nom_vid="Nested IF ELSE and IF ELSEIF";
            $chapitre="2";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/HLv2gVg6Xtc";
            $nom_vid="Logical and Comparison Operators";
            $chapitre="2";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/-QVc_fGSJAw";
            $nom_vid="Ternary Operator (Conditional Operator)";
            $chapitre="2";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/AqV9_7c9X7s";
            $nom_vid="C++ Switch Statement with Example";
            $chapitre="2";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/kcd2FAxC5Ms";
            $nom_vid="While Loop";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/IqKweotABQI";
            $nom_vid="Do While Loop with Example";
            $chapitre="3";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/dNmdkIu0qww";
            $nom_vid="For Loop with Example";
            $chapitre="3";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/S6WkTenfEHk";
            $nom_vid="C++ Break Statement with Example";
            $chapitre="3";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/VYEhDnQ-2mE";
            $nom_vid="C++ Continue Statement with Example";
            $chapitre="3";
            break;
          case '52':
            $lien="https://www.youtube.com/embed/2yR8dcKT-Ck";
            $nom_vid="For Each Loop | Range Based For Loop ";
            $chapitre="3";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/odTejLbwbnc";
            $nom_vid="Introduction to ARRAYS in CPP";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/TpcT_zNJSHM";
            $nom_vid="Two Dimensional ( 2D ) and Multidimensional Arrays in CPP";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/4bgabzer4OE";
            $nom_vid="Introduction to CPP Functions";
            $chapitre="5";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/WqukJuBnLQU";
            $nom_vid="CPP Function Parameters | Returning Values from Functions";
            $chapitre="5";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/QHk_hg5NOU4";
            $nom_vid="C++ Default Function Parameters";
            $chapitre="5";
            break;
          case '35':
            $lien="https://www.youtube.com/embed/kzDqaBgyVEE";
            $nom_vid="Introduction to C++ Pointers";
            $chapitre="5";
            break;
          case '39':
            $lien="https://www.youtube.com/embed/SVggWRRzPRE";
            $nom_vid="Const Keyword with Functions and Arrays in C++ with Example  ";
            $chapitre="5";
            break;
          case '48':
            $lien="https://www.youtube.com/embed/gVGnOsB1n_o";
            $nom_vid="New and Delete Operators in C++ | Dynamic Memory Allocation";
            $chapitre="5";
            break;
          case '49':
            $lien="https://www.youtube.com/embed/8XAQzcJvOHk";
            $nom_vid="Dynamically Allocating Arrays Depending on User Input in C++";
            $chapitre="5";
            break;
          case '56':
            $lien="https://www.youtube.com/embed/xnh7ip5gpzc";
            $nom_vid="C++ Object Oriented Programming Video Tutorial";
            $chapitre="6";
            break;
          case '57':
            $lien="https://www.youtube.com/embed/qnCRKjPTnHM";
            $nom_vid="C++ OOPS Video Tutorials for Beginners | Class Properties, Methods, Members";
            $chapitre="6";
            break;
          case '58':
            $lien="https://www.youtube.com/embed/BsYvWqDihGU";
            $nom_vid="Creating Objects from a Class in Different Ways";
            $chapitre="6";
            break;
          case '60':
            $lien="https://www.youtube.com/embed/6QHkXmLhY-g";
            $nom_vid="Private Access Specifier ";
            $chapitre="6";
            break;
          case '61':
            $lien="https://www.youtube.com/embed/CyTSm0sUgi4";
            $nom_vid="Class Constructors";
            $chapitre="6";
            break;
          case '62':
            $lien="https://www.youtube.com/embed/bk11sI0KoWk";
            $nom_vid="Overloading Class Constructors";
            $chapitre="6";
           break;
          case '64':
            $lien="https://www.youtube.com/embed/Egm6DIiHTC4";
            $nom_vid="Destructors in a Class";
            $chapitre="6";
            break;
          case '65':
            $lien="https://www.youtube.com/embed/ZvWUHWvueQk";
            $nom_vid="C++ Destructors to Release Resources with example";
            $chapitre="6";
            break;
          case '66':
            $lien="https://www.youtube.com/embed/-WRllQLW8RE";
            $nom_vid="C++ Static Variables and Members in Class ";
            $chapitre="6";
            break;
          case '67':
            $lien="https://www.youtube.com/embed/u-lQOQvzBuY";
            $nom_vid="C++ Static Methods in Classes";
            $chapitre="6";
            break;
          case '68':
            $lien="https://www.youtube.com/embed/FErlySnTBWc";
            $nom_vid="Friend Function";
            $chapitre="6";
            break;
          case '69':
            $lien="https://www.youtube.com/embed/zsqhrxlp-Fo";
            $nom_vid="Inheritance, Poly Morphism | Introduction";
            $chapitre="6";
            break;
          case '76':
            $lien="https://www.youtube.com/embed/fCK7sLu0G0Y";
            $nom_vid="Order of Execution of Constructors and Destructors in Inheritance in C++";
            $chapitre="6";
            break;
          case '81':
            $lien="https://www.youtube.com/embed/uVsoUyDO8Ow";
            $nom_vid="C++ this Keyword ";
            $chapitre="6";
            break;
          case '84':
            $lien="https://www.youtube.com/embed/NWIMUcq18vQ";
            $nom_vid="C++ Virtual Function | Inherited Attributes, Hierarchical Nature ";
            $chapitre="6";
            break;
          case '85':
            $lien="https://www.youtube.com/embed/FA5bvYW4iUc";
            $nom_vid="C++ Pure Virtual Functions, Abstract Classes";
            $chapitre="6";
            break;
          case '86':
            $lien="https://www.youtube.com/embed/7Zpuz4T4SGw";
            $nom_vid="C++ Diamond problem in OOPS, Solution using Virtual Inheritance with Example";
            $chapitre="6";
            break;
          case '106':
            $lien="https://www.youtube.com/embed/2KvslbLHTUY";
            $nom_vid="CPP Copy Constructor with Example";
            $chapitre="6";
            break;/*  Breakpoint  */
          case '98':
            $lien="https://www.youtube.com/embed/P_Kx0i7yXhU";
            $nom_vid="Introduction to Exception Handling | try, catch and throw";
            $chapitre="7";
            break;
          case '101':
            $lien="https://www.youtube.com/embed/iFexdxXbOfE";
            $nom_vid="Functions Throwing Exceptions";
            $chapitre="7";
            break;
          case '103':
            $lien="https://www.youtube.com/embed/Ix05fozWn0A";
            $nom_vid="Creating Custom, User Defined Exception Class";
            $chapitre="7";
            break;/*  Breakpoint  */
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_learninglad.php" style="color:white;">Learn C++ Programming | Video Tutorial for Beginners</a></li>
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
                        <a href="actualvideocontent_learninglad.php?video=1">&#10170  What is C++, Its Introduction and History</a><br>
                        <a href="actualvideocontent_learninglad.php?video=2">&#10170  Where CPP is Used, Why Learn C++ Programming Language</a><br>
                        <a href="actualvideocontent_learninglad.php?video=3">&#10170  C++ Source Code to Executable | Compilation, Linking, Pre Processing | Build Process Explained</a><br>
                        <a href="actualvideocontent_learninglad.php?video=4">&#10170  Tool Set, Tool Chain and IDE </a><br>
                        <a href="actualvideocontent_learninglad.php?video=5">&#10170  Installing Code Blocks IDE with Compiler for C and C++</a><br>
                        <a href="actualvideocontent_learninglad.php?video=6">&#10170  C++ First Hello World Program</a><br>
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
                          Chapter 1 : Manipulating Data types
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=7">&#10170  C++ Constants, Variables, Data types, Keywords</a><br>
                        <a href="actualvideocontent_learninglad.php?video=8">&#10170  Creating and Using C++ Variables</a><br>
                        <a href="actualvideocontent_learninglad.php?video=9">&#10170  C++ Console Output with Cout</a><br>
                        <a href="actualvideocontent_learninglad.php?video=10">&#10170  Cin in C++ for Receiving User, Console Input </a><br>
                        <a href="actualvideocontent_learninglad.php?video=53">&#10170  Introduction to Strings in C++</a><br>
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
                          Chapter 2 :  Conditional statements
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=16">&#10170  C++ Nested IF ELSE and IF ELSEIF</a><br>
                        <a href="actualvideocontent_learninglad.php?video=17">&#10170  C++ Logical and Comparison Operators</a><br>
                        <a href="actualvideocontent_learninglad.php?video=18">&#10170  C++ Ternary Operator (Conditional Operator)</a><br>
                        <a href="actualvideocontent_learninglad.php?video=31">&#10170  C++ Switch Statement with Example </a><br>
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
                           Chapter 3 : Loops
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=19">&#10170  While Loop</a><br>
                        <a href="actualvideocontent_learninglad.php?video=20">&#10170  Do While Loop with Example</a><br>
                        <a href="actualvideocontent_learninglad.php?video=21">&#10170  For Loop with Example</a><br>
                        <a href="actualvideocontent_learninglad.php?video=29">&#10170  C++ Break Statement with Example</a><br>
                        <a href="actualvideocontent_learninglad.php?video=30">&#10170  C++ Continue Statement with Example</a><br>
                        <a href="actualvideocontent_learninglad.php?video=52">&#10170  For Each Loop | Range Based For Loop </a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Arrays
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=22">&#10170  Introduction to ARRAYS in CPP</a><br>
                        <a href="actualvideocontent_learninglad.php?video=23">&#10170  Two Dimensional ( 2D ) and Multidimensional Arrays in CPP</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo ' <!-- Détails chapitre 5 -->
                    <div class="card">
                      <div class="card-header" id="headingSix">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseFour">
                             Chapter 5 : Procedural Programming
                          </button>
                        </h2>
                      </div>
                      <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
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
                    </div>';
                  break;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 6 : Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
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
                  </div>';
                  break;
               case '7':
                  echo '<!-- Détails chapitre 7 -->
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 7 : Exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_learninglad.php?video=98">&#10170  Introduction to Exception Handling | try, catch and throw </a><br>
                        <a href="actualvideocontent_learninglad.php?video=101">&#10170  Functions Throwing Exceptions</a><br>
                        <a href="actualvideocontent_learninglad.php?video=103">&#10170  Creating Custom, User Defined Exception Class</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                default:
                  // code...
                  break;
              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
