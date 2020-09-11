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
            $lien="https://www.youtube.com/embed/cNyLs7YWFL8";
            $nom_vid="IELTS Reading strategies: True, False, Not Given";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/As4e8dtqBrk";
            $nom_vid="IELTS Reading";
            $chapitre="1";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/4PDgVEhfKso";
            $nom_vid="IELTS Reading: Top 10 Tips";
            $chapitre="1";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/bbDliT5EN-w";
            $nom_vid="How to succeed on IELTS Reading";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/yTOqXLWpUmQ";
            $nom_vid="IELTS Listening ";
            $chapitre="2";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/OualsHB1FqE";
            $nom_vid="IELTS Listening - Top 14 tips!";
            $chapitre="2";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/m54Vfvt_QD4";
            $nom_vid="IELTS & TOEFL Listening Practice: Academic Vocabulary ";
            $chapitre="2";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/Kxi4v9w299I";
            $nom_vid="IELTS & TOEFL - How to give your opinion";
            $chapitre="3";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/sRFEKvsw-vs";
            $nom_vid="IELTS Speaking Task 1 - How to get a high score";
            $chapitre="3";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/XyDrz6YAwvw";
            $nom_vid="IELTS Speaking Task 2 - How to succeed";
            $chapitre="3";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/TyYHs1-6Vls";
            $nom_vid="IELTS Speaking Task 3 - How to get a high score";
            $chapitre="3";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/lwL4YnMStEo";
            $nom_vid="Vocabulary: How to talk about ADVANTAGES and DISADVANTAGES";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/50syDdhrVPc";
            $nom_vid="IELTS & TOEFL Vocabulary: Talking about Food";
            $chapitre="3";
            break;
          case '8':/* Breakpoint */
            $lien="https://www.youtube.com/embed/PL_-z497Q-o";
            $nom_vid="IELTS & TOEFL Vocabulary - Technology";
            $chapitre="4";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/x1E2wLW9pn8";
            $nom_vid="IELTS - How to get a high score on Task 1 of the IELTS";
            $chapitre="4";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/F8WSzwBD7GQ";
            $nom_vid="Improve Your Writing - 6 ways to compare";
            $chapitre="4";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/I_WBuDKanQw";
            $nom_vid="IELTS Success – Studying Academic English at a School";
            $chapitre="4";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/i1XXR0kUKYk";
            $nom_vid="IELTS: Top 10 Spelling Mistakes";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/wF_7ha05kxY";
            $nom_vid="IELTS Writing: Numbers and Pie Charts";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/o9aVjBHEEbU";
            $nom_vid="How to write a good essay: Paraphrasing the question";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/KNXvnbxU61w";
            $nom_vid="IELTS Writing Task 1: How to describe a process";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/3oyx0-0DZrA";
            $nom_vid="Emma's TOP 15 STUDY TIPS";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/QC8vN3GVQhI";
            $nom_vid="IELTS Writing Task 1: How to describe BAR GRAPHS";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/10auVRva1Jk";
            $nom_vid="Read, Understand, and Remember! Improve your reading skills with the KWL Method";
            $chapitre="4";
            break;
          default:
            # code...
            break;
        }
      }
   ?>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;">Language</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_english.php" style="color:white;">English</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_english_emma.php" style="color:white;">IELTS lessons</a></li>
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
                          Chapter 1 : Reading
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_emma.php?video=1">&#10170  IELTS Reading strategies: True, False, Not Given</a><br>
                        <a href="actualvideocontent_emma.php?video=10">&#10170  IELTS Reading</a><br>
                        <a href="actualvideocontent_emma.php?video=11">&#10170  IELTS Reading: Top 10 Tips</a><br>
                        <a href="actualvideocontent_emma.php?video=12">&#10170  How to succeed on IELTS Reading</a><br>
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
                          Chapter 2 :  Listening
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_emma.php?video=2">&#10170  IELTS Listening </a><br>
                        <a href="actualvideocontent_emma.php?video=3">&#10170  IELTS Listening - Top 14 tips!</a><br>
                        <a href="actualvideocontent_emma.php?video=17">&#10170  IELTS & TOEFL Listening Practice: Academic Vocabulary </a><br>
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
                          Chapter 3 : Speaking
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_emma.php?video=4">&#10170  IELTS & TOEFL - How to give your opinion</a><br>
                        <a href="actualvideocontent_emma.php?video=5">&#10170  IELTS Speaking Task 1 - How to get a high score</a><br>
                        <a href="actualvideocontent_emma.php?video=6">&#10170  IELTS Speaking Task 2 - How to succeed</a><br>
                        <a href="actualvideocontent_emma.php?video=7">&#10170  IELTS Speaking Task 3 - How to get a high score</a><br>
                        <a href="actualvideocontent_emma.php?video=16">&#10170  Vocabulary: How to talk about ADVANTAGES and DISADVANTAGES</a><br>
                        <a href="actualvideocontent_emma.php?video=18">&#10170  IELTS & TOEFL Vocabulary: Talking about Food</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails  chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Other tips
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_emma.php?video=8">&#10170  IELTS & TOEFL Vocabulary - Technology</a><br>
                        <a href="actualvideocontent_emma.php?video=9">&#10170  IELTS - How to get a high score on Task 1 of the IELTS</a><br>
                        <a href="actualvideocontent_emma.php?video=13">&#10170  Improve Your Writing - 6 ways to compare</a><br>
                        <a href="actualvideocontent_emma.php?video=14">&#10170  IELTS Success – Studying Academic English at a School</a><br>
                        <a href="actualvideocontent_emma.php?video=15">&#10170  IELTS: Top 10 Spelling Mistakes</a><br>
                        <a href="actualvideocontent_emma.php?video=19">&#10170  IELTS Writing: Numbers and Pie Charts</a><br>
                        <a href="actualvideocontent_emma.php?video=20">&#10170  How to write a good essay: Paraphrasing the question</a><br>
                        <a href="actualvideocontent_emma.php?video=21">&#10170  IELTS Writing Task 1: How to describe a process</a><br>
                        <a href="actualvideocontent_emma.php?video=22">&#10170  Emma\'s TOP 15 STUDY TIPS</a><br>
                        <a href="actualvideocontent_emma.php?video=23">&#10170  IELTS Writing Task 1: How to describe BAR GRAPHS</a><br>
                        <a href="actualvideocontent_emma.php?video=24">&#10170  Read, Understand, and Remember! Improve your reading skills with the KWL Method</a><br>
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
