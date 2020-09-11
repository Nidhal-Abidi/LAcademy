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

  <?php
      $lien="";
      $nom_vid="";
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/q7tlgZg4Q1o";
            $nom_vid="4 basic components of a laptop";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/xj9mFD71Vfc";
            $nom_vid="More Computer Hardware";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/veugT7A9psY";
            $nom_vid="Intro to Binary Code";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/xXLj5MbrI44";
            $nom_vid="Decoding a Binary Number";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/_uWzpyr_5qk";
            $nom_vid="How To Measure Data Size";
            $chapitre="1";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/Ulln8JIYzqY";
            $nom_vid="Measuring Data Speed";
            $chapitre="1";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/wr7H6oUwYUU";
            $nom_vid="Binary Bytes";
            $chapitre="1";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/fahY2YY5Atg";
            $nom_vid="Value Types";
            $chapitre="2";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/NFaZKFTycmc";
            $nom_vid="MDN and Documentation";
            $chapitre="2";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/NJhXiR1z7Kg";
            $nom_vid="Variables & camelCase";
            $chapitre="2";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/yHLGUxt0EKc";
            $nom_vid="Arrays & Objects";
            $chapitre="2";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/FACqPCLxPTY";
            $nom_vid="Finding and Indexing Data in Arrays";
            $chapitre="2";
            break;
          case '26':/* Breakpoint */
            $lien="https://www.youtube.com/embed/vZAm3Ve9CGM";
            $nom_vid="Manipulating Data";
            $chapitre="2";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/oz32JxUx1Fk";
            $nom_vid="Elements Tab";
            $chapitre="3";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/dsVbhlBIfz0";
            $nom_vid="Network Tab";
            $chapitre="3";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/CoESC2XGZLg";
            $nom_vid="Sources Tab";
            $chapitre="3";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/mxsZlsG8tKA";
            $nom_vid="Timeline Tab";
            $chapitre="3";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/fvfqnFYXF_8";
            $nom_vid="Memory Tab";
            $chapitre="3";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_software.php" style="color:white;">Software Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering_software_freecodecamp.php" style="color:white;">Computer Science and Software Engineering Theory with Briana</a></li>
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
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 :  Javascript
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_freecodecamp.php?video=21">&#10170  Value Types</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=22">&#10170  MDN and Documentation</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=23">&#10170  Variables & camelCase</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=24">&#10170  Arrays & Objects</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=25">&#10170  Finding and Indexing Data in Arrays</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=26">&#10170  Manipulating Data</a><br>
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
                          Chapter 3 : Chrome Dev Tools
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_freecodecamp.php?video=30">&#10170  Elements Tab</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=31">&#10170  Network Tab</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=32">&#10170  Sources Tab</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=33">&#10170  Timeline Tab</a><br>
                        <a href="actualvideocontent_freecodecamp.php?video=34">&#10170  Memory Tab</a><br>
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
