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

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;">Language</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_arabic.php" style="color:white;">Arabic</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Arabic Language for Beginners</li>

  </ol>
</nav>
<!-- the actual content of this course ( Arabic Language for Beginners )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
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
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : How to read in Arabic
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_khatawaat1.php?video=4">&#10170  STEP 5 -ARABIC LONG & SHORT VOWELS - HOW TO PRONOUNCE ARABIC</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=6">&#10170  STEP 6 -READ & WRITE ARABIC Words with LONG & SHORT Vowels</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=7">&#10170  STEP 7- ARABIC SOUNDS- LETTER SOUNDS/Deep and Frontal Sound Free Step by Step Arabic Lessons.</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=8">&#10170  STEP 8 - HOW TO READ IN ARABIC- Arabic for Beginners- Free Step By Step Arabic Lessons- READING 1</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Pronouns and Adjectives
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_khatawaat1.php?video=9">&#10170  STEP 10 - ARABIC POSSESSIVE PRONOUNS/ ARABIC FEMININE AND MASCULINE ضمائر الملكية - المؤنث و المذكر</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=10">&#10170  STEP 9 - ADJECTIVES IN ARABIC- Free Step by Step Arabic Lessons, Feminine and Masculine.</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=11">&#10170  STEP 11- Arabic Feminine/Masculine- HOW TO WRITE A TWO WORD SENTENCE IN ARABIC</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=12">&#10170  Step 12 -Def/indef- HOW TO DEFINE WORDS IN ARABIC Definite Article"Alif Laam" المعرفة والنكرة</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=13">&#10170  Learning Tips- HOW TO MEMORIZE THE ARABIC ALPHABET - Learning Steps -</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=14">&#10170  Arabic Verbs- Practice#7- Negation with Arabic Verbs. DON'T/ DOESN'T+Verb</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Practicing examples
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_khatawaat1.php?video=15">&#10170  Arabic Questions- Practice#6- How to ask in Arabic? - Practice using من؟ هل ؟ ما؟ ماذا؟</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=16">&#10170  Arabic Nouns- Practice#4 Learn Arabic vocabulary by categories (People, Places, Objects, Drinks).</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=17">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# Months of the Year in Arabic-/Seasons of the Year</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=18">&#10170  Arabic Phrases 1- Questions-How was your weekend in Arabic?</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=19">&#10170  Arabic Places and Expressions Part 1-Form Sentences الأماكن What do do you in these places?</a><br>
        <a href="actualvideocontent_khatawaat1.php?video=20">&#10170  Free Arabic Lessons #learn_arabic تعلم_ العربية# HOW TO CONNECT THE ARABIC LETTERS? -Arabic Classes-</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
