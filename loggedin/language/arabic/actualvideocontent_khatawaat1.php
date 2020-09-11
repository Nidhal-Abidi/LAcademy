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
            $lien="https://www.youtube.com/embed/S8RO2w3I8AA";
            $nom_vid="STEP 1 - Arabic Alphabet - Part 1- HOW TO WRITE";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/hA3Uji7xmRc";
            $nom_vid="STEP 2 - Arabic Alphabet - Part 2 HOW TO WRITE the Arabic Alphabet";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/YSR6p9TnIv4";
            $nom_vid="STEP 3 - Letter Positions- HOW TO CONNECT LETTERS";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/itY0cDzs95o";
            $nom_vid="STEP 4 - HOW TO CONNECT LETTERS IN ARABIC- HOW TO WRITE WORDS IN ARABIC";
            $chapitre="1";
            break;
          case '4':/* Breakpoint */
            $lien="https://www.youtube.com/embed/p_reEdOrpIc";
            $nom_vid="STEP 5 -ARABIC LONG & SHORT VOWELS - HOW TO PRONOUNCE ARABIC";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/4m3zC1emOvA";
            $nom_vid="STEP 6 -READ & WRITE ARABIC Words with LONG & SHORT Vowels";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/o1q23Itv_HM";
            $nom_vid="STEP 7- ARABIC SOUNDS- LETTER SOUNDS/Deep and Frontal Sound Free Step by Step Arabic Lessons.";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/zazg7vp3vc4";
            $nom_vid="STEP 8 - HOW TO READ IN ARABIC- Arabic for Beginners- Free Step By Step Arabic Lessons- READING 1";
            $chapitre="2";
            break;
          case '9':/* Breakpoint */
            $lien="https://www.youtube.com/embed/CVRsFILOEDs";
            $nom_vid="STEP 10 - ARABIC POSSESSIVE PRONOUNS/ ARABIC FEMININE AND MASCULINE ضمائر الملكية - المؤنث و المذك";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/bDLLe9RymwQ";
            $nom_vid="STEP 9 - ADJECTIVES IN ARABIC- Free Step by Step Arabic Lessons, Feminine and Masculine.";
            $chapitre="3";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/7e8xk0gXYs8";
            $nom_vid="STEP 11- Arabic Feminine/Masculine- HOW TO WRITE A TWO WORD SENTENCE IN ARABIC";
            $chapitre="3";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/ffxL_49NQuA";
            $nom_vid="Step 12 -Def/indef- HOW TO DEFINE WORDS IN ARABIC Definite Article'Alif Laam' المعرفة والنكر";
            $chapitre="3";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/0uHnHOP452U";
            $nom_vid="Learning Tips- HOW TO MEMORIZE THE ARABIC ALPHABET - Learning Steps -";
            $chapitre="3";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/z_lr3L75ip8";
            $nom_vid="Arabic Verbs- Practice#7- Negation with Arabic Verbs. DON'T/ DOESN'T+Verb";
            $chapitre="3";
            break;
          case '15':/* Breakpoint */
            $lien="https://www.youtube.com/embed/hezbsci28oY";
            $nom_vid="Arabic Questions- Practice#6- How to ask in Arabic? - Practice using من؟ هل ؟ ما؟ ماذا؟";
            $chapitre="4";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/hezbsci28oY";
            $nom_vid="Arabic Nouns- Practice#4 Learn Arabic vocabulary by categories (People, Places, Objects, Drinks).";
            $chapitre="4";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/txd8ksSsIRo";
            $nom_vid="Free Arabic Lessons #learn_arabic تعلم_ العربية# Months of the Year in Arabic-/Seasons of the Year";
            $chapitre="4";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/W2tY4v5vJC0";
            $nom_vid="Arabic Phrases 1- Questions-How was your weekend in Arabic?";
            $chapitre="4";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/KQnCrcbGSBg";
            $nom_vid="Arabic Places and Expressions Part 1-Form Sentences الأماكن What do do you in these places?";
            $chapitre="4";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/PnzfOIlLLig";
            $nom_vid="Free Arabic Lessons #learn_arabic تعلم_ العربية# HOW TO CONNECT THE ARABIC LETTERS? -Arabic Classes-";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_arabic.php" style="color:white;">Arabic</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_arabic_arabic_khatawaat1.php" style="color:white;">Arabic language for beginners</a></li>
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
                          Chapter 1 : How to write in Arabic
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=1">&#10170  STEP 1 - Arabic Alphabet - Part 1- HOW TO WRITE</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=2">&#10170  STEP 2- Arabic Alphabet - Part 2 HOW TO WRITE the Arabic Alphabet</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=3">&#10170  STEP 3 - Letter Positions- HOW TO CONNECT LETTERS</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=5">&#10170  STEP 4 - HOW TO CONNECT LETTERS IN ARABIC- HOW TO WRITE WORDS IN ARABIC.</a><br>
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
                          Chapter 2 : How to read in Arabic
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=4">&#10170  STEP 5 -ARABIC LONG & SHORT VOWELS - HOW TO PRONOUNCE ARABIC</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=6">&#10170  STEP 6 -READ & WRITE ARABIC Words with LONG & SHORT Vowels</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=7">&#10170  STEP 7- ARABIC SOUNDS- LETTER SOUNDS/Deep and Frontal Sound Free Step by Step Arabic Lessons.</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=8">&#10170  STEP 8 - HOW TO READ IN ARABIC- Arabic for Beginners- Free Step By Step Arabic Lessons- READING 1</a><br>
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
                          Chapter 3 : Pronouns and Adjectives
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=9">&#10170  STEP 10 - ARABIC POSSESSIVE PRONOUNS/ ARABIC FEMININE AND MASCULINE ضمائر الملكية - المؤنث و المذكر</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=10">&#10170  STEP 9 - ADJECTIVES IN ARABIC- Free Step by Step Arabic Lessons, Feminine and Masculine.</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=11">&#10170  STEP 11- Arabic Feminine/Masculine- HOW TO WRITE A TWO WORD SENTENCE IN ARABIC</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=12">&#10170  Step 12 -Def/indef- HOW TO DEFINE WORDS IN ARABIC Definite Article"Alif Laam" المعرفة والنكرة</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=13">&#10170  Learning Tips- HOW TO MEMORIZE THE ARABIC ALPHABET - Learning Steps -</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=14">&#10170  Arabic Verbs- Practice#7- Negation with Arabic Verbs. DON\'T/ DOESN\'T+Verb</a><br>
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
                           Chapter 4 : Practicing examples
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_khatawaat1.php?video=15">&#10170  Arabic Questions- Practice#6- How to ask in Arabic? - Practice using من؟ هل ؟ ما؟ ماذا؟</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=16">&#10170  Arabic Nouns- Practice#4 Learn Arabic vocabulary by categories (People, Places, Objects, Drinks).</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=17">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# Months of the Year in Arabic-/Seasons of the Year</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=18">&#10170  Arabic Phrases 1- Questions-How was your weekend in Arabic?</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=19">&#10170  Arabic Places and Expressions Part 1-Form Sentences الأماكن What do do you in these places?</a><br>
                        <a href="actualvideocontent_khatawaat1.php?video=20">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# HOW TO CONNECT THE ARABIC LETTERS? -Arabic Classes-</a><br>
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
