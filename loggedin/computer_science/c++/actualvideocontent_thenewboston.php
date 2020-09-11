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
            $lien="https://www.youtube.com/embed/tvC1WCdV1XU";
            $nom_vid="Installing CodeBlocks";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/SWZfFNyUsxc";
            $nom_vid="Understanding a Simple C++ Program";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/sPv0HQ8xOaU";
            $nom_vid="More on Printing Text";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/QwBSv4-_Lmk";
            $nom_vid="Variables";
            $chapitre="0";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/3Iq_uFbc4L4";
            $nom_vid="Variables Memory Concepts";
            $chapitre="0";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/yEY8xlnarNo";
            $nom_vid="If Statement";
            $chapitre="1";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/jK83lln_T1k";
            $nom_vid="If / else Statement";
            $chapitre="1";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/TNUCZpgPjrw";
            $nom_vid="Switch Statement";
            $chapitre="1";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/o78khWdmqIE";
            $nom_vid="Logical Operators";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/bsWWHo4KDHE";
            $nom_vid="Functions";
            $chapitre="2";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/fQ_CBGVfGbM";
            $nom_vid="Functions That Use Multiple Parameters";
            $chapitre="2";
            break;
          case '28':
            $lien="https://www.youtube.com/embed/66zF2rqoKI8";
            $nom_vid="Default Arguments / Parameters";
            $chapitre="2";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/IAMzWp3kS_k";
            $nom_vid="Function Overloading";
            $chapitre="2";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/4agL-MQq05E";
            $nom_vid="Recursion";
            $chapitre="2";
            break;
          case '38':
            $lien="https://www.youtube.com/embed/Fa6S8Pz924k";
            $nom_vid="Introduction to Pointers";
            $chapitre="2";
            break;
          case '39':
            $lien="https://www.youtube.com/embed/_ja8iizm7nk";
            $nom_vid="Pass by Reference with Pointers";
            $chapitre="2";
            break;
          case '41':
            $lien="https://www.youtube.com/embed/dPAbm-3iAN4";
            $nom_vid="Pointers and Math";
            $chapitre="2";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/KLKhsaOPnLk";
            $nom_vid="While Loops";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/GGA0z_6tvOU";
            $nom_vid="Simple Program Using a Loop";
            $chapitre="3";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/sBO8yvyyBI0";
            $nom_vid="For Loops";
            $chapitre="3";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/yRdPe2acogw";
            $nom_vid="Do While Loops";
            $chapitre="3";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/1kLw8kZuccQ";
            $nom_vid="Arrays";
            $chapitre="4";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/Z9Wc8EsGjJY";
            $nom_vid="Create an Array Using Loops";
            $chapitre="4";
            break;
          case '36':
            $lien="https://www.youtube.com/embed/B3iC40frU4M";
            $nom_vid="Multidimensional Arrays";
            $chapitre="4";
            break;
          case '71':
            $lien="https://www.youtube.com/embed/dSfjBoip4c0";
            $nom_vid="String Class and String Functions";
            $chapitre="5";
            break;
          case '72':
            $lien="https://www.youtube.com/embed/nkKeA74p3RY";
            $nom_vid="String Substrings, Swapping, and Finding";
            $chapitre="5";
            break;
          case '42':/* Breakpoint */
            $lien="https://www.youtube.com/embed/2RP4f9beidc";
            $nom_vid="Arrow Member Selection Operator";
            $chapitre="6";
            break;
          case '43':
            $lien="https://www.youtube.com/embed/4P4Im0vF_mU";
            $nom_vid="Deconstructors";
            $chapitre="6";
            break;
          case '44':
            $lien="https://www.youtube.com/embed/k55CRqm1gzk";
            $nom_vid="Const Objects";
            $chapitre="6";
            break;
          case '45':
            $lien="https://www.youtube.com/embed/53VYYMy-LBo";
            $nom_vid="Member Initializers";
            $chapitre="6";
            break;
          case '46':
            $lien="https://www.youtube.com/embed/jn3lT07owCo";
            $nom_vid="Composition";
            $chapitre="6";
            break;
          case '47':
            $lien="https://www.youtube.com/embed/jCaxfmcDYjs";
            $nom_vid="Composition Part 2";
            $chapitre="6";
            break;
          case '48':
            $lien="https://www.youtube.com/embed/WCFGNdXSzus";
            $nom_vid="Friend";
            $chapitre="6";
            break;
          case '49':
            $lien="https://www.youtube.com/embed/Fcdkcx4achs";
            $nom_vid="This keyword";
            $chapitre="6";
            break;
          case '50':
            $lien="https://www.youtube.com/embed/PgGhEovFhd0";
            $nom_vid="Operator Overloading";
            $chapitre="6";
            break;
          case '51':
            $lien="https://www.youtube.com/embed/q4vZIF-uMzs";
            $nom_vid="More on Operator Overloading";
            $chapitre="6";
           break;
          case '52':
            $lien="https://www.youtube.com/embed/gq2Igdc-OSI";
            $nom_vid="Inheritance";
            $chapitre="6";
            break;
          case '53':
            $lien="https://www.youtube.com/embed/DHAAy4GJ684";
            $nom_vid="Protected Members";
            $chapitre="6";
            break;
          case '54':
            $lien="https://www.youtube.com/embed/Z_vJEKU9WTg";
            $nom_vid="Derived Class Constructors and Destructors";
            $chapitre="6";
            break;
          case '55':
            $lien="https://www.youtube.com/embed/R_PPA9eejDw";
            $nom_vid="Introduction to Polymorphism";
            $chapitre="6";
            break;
          case '56':
            $lien="https://www.youtube.com/embed/DudHooleNVg";
            $nom_vid="Virtual Functions";
            $chapitre="6";
            break;
          case '57':
            $lien="https://www.youtube.com/embed/ndz3EHpFEZc";
            $nom_vid="Abstract Classes and Pure virtual Functions";
            $chapitre="6";
            break;
          case '62':/* Breakpoint */
            $lien="https://www.youtube.com/embed/mFAaqmj399I";
            $nom_vid="Exceptions";
            $chapitre="7";
            break;
          case '63':
            $lien="https://www.youtube.com/embed/5369xtKS42s";
            $nom_vid="More Exceptions Examples";
            $chapitre="7";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_thenewboston.php" style="color:white;">C++ Programming Tutorials</a></li>
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
                        <a href="actualvideocontent_thenewboston.php?video=1">&#10170  Installing CodeBlocks</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=2">&#10170  Understanding a Simple C++ Program</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=3">&#10170  More on Printing Text</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=4">&#10170  Variables </a><br>
                        <a href="actualvideocontent_thenewboston.php?video=6">&#10170  Variables Memory Concepts</a><br>
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
                          Chapter 1 : Conditional statements
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewboston.php?video=8">&#10170  If Statement</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=17">&#10170  If / else Statement</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=25">&#10170  Switch Statement</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=26">&#10170  Logical Operators</a><br>
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
                          Chapter 2 :  Procedural Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
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
                        <a href="actualvideocontent_thenewboston.php?video=18">&#10170  While Loops</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=19">&#10170  Simple Program Using a Loop</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=22">&#10170  For Loops</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=24">&#10170  Do While Loops</a><br>
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
                        <a href="actualvideocontent_thenewboston.php?video=32">&#10170  Arrays</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=33">&#10170  Create an Array Using Loops</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=36">&#10170  Multidimensional Arrays</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo '<!-- Détails chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 5 : Data Types
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewboston.php?video=71">&#10170  String Class and String Functions</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=72">&#10170  String Substrings, Swapping, and Finding</a><br>
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
                        <a href="actualvideocontent_thenewboston.php?video=62">&#10170  Exceptions</a><br>
                        <a href="actualvideocontent_thenewboston.php?video=63">&#10170  More Exceptions Examples</a><br>
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
