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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_english.php" style="color:white;">English</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Learn English with Jennifer: Lessons for Beginners</li>

  </ol>
</nav>
<!-- the actual content of this course ( Learn English with Jennifer: Lessons for Beginners )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : Greeting & useful expressions
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_jenniferesl.php?video=1">&#10170  Greetings</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=2">&#10170  More Greetings</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=3">&#10170  Greetings Throughout the Day</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=4">&#10170  Useful Expressions</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=5">&#10170  More Useful Expressions</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=6">&#10170  Introducing Yourself </a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 :  Learn the alphabet , spelling and counting
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_jenniferesl.php?video=7">&#10170  The Alphabet </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=8">&#10170  Writing the Alphabet</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=9">&#10170  Spelling </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=12">&#10170  Counting from 0 to 10</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=14">&#10170  Counting from 10 to 20 </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=15">&#10170  Counting from 10 to 100</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=16">&#10170  Hundred, Thousand and Million</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Grammar
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_jenniferesl.php?video=17">&#10170  Present forms of BE (am, is, are)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=18">&#10170  Subject Pronouns (I, you, he, she, it, we, they)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=19">&#10170  Forming Sentences with BE</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=20">&#10170  Negative Forms of BE and Questions</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=25">&#10170  Articles (a, an, the)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=27">&#10170  That, Those</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=32">&#10170  Forms of HAVE</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=33">&#10170  Negative Forms of HAVE</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=45">&#10170  Past Forms of BE (was, were)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=47">&#10170  Possessive Nouns</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=60">&#10170  Present Progressive (affirmative)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=61">&#10170  Present Progressive (negative)</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=62">&#10170  Present Progressive (questions)</a><br>
        </div>
    </div>
  </div>
  <!-- Détails  chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Understanding Dates
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_jenniferesl.php?video=40">&#10170  Dates </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=41">&#10170  Days of the Week</a><br>
        <a href="actualvideocontent_jenniferesl.php?video=42">&#10170  Weekday and Weekend </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=43">&#10170  Questions About the Calendar </a><br>
        <a href="actualvideocontent_jenniferesl.php?video=58">&#10170  Telling Time </a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
