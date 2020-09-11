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
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">IELTS lessons</li>

  </ol>
</nav>
<!-- the actual content of this course ( IELTS lessons )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
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
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 :  Listening
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_emma.php?video=2">&#10170  IELTS Listening </a><br>
        <a href="actualvideocontent_emma.php?video=3">&#10170  IELTS Listening - Top 14 tips!</a><br>
        <a href="actualvideocontent_emma.php?video=17">&#10170  IELTS & TOEFL Listening Practice: Academic Vocabulary </a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Speaking
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_emma.php?video=4">&#10170  IELTS & TOEFL - How to give your opinion</a><br>
        <a href="actualvideocontent_emma.php?video=5">&#10170  IELTS Speaking Task 1 - How to get a high score</a><br>
        <a href="actualvideocontent_emma.php?video=6">&#10170  IELTS Speaking Task 2 - How to succeed</a><br>
        <a href="actualvideocontent_emma.php?video=7">&#10170  IELTS Speaking Task 3 - How to get a high score</a><br>
        <a href="actualvideocontent_emma.php?video=16">&#10170  Vocabulary: How to talk about ADVANTAGES and DISADVANTAGES</a><br>
        <a href="actualvideocontent_emma.php?video=18">&#10170  IELTS & TOEFL Vocabulary: Talking about Food</a><br>
        </div>
    </div>
  </div>
  <!-- Détails  chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Other tips
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_emma.php?video=8">&#10170  IELTS & TOEFL Vocabulary - Technology</a><br>
        <a href="actualvideocontent_emma.php?video=9">&#10170  IELTS - How to get a high score on Task 1 of the IELTS</a><br>
        <a href="actualvideocontent_emma.php?video=13">&#10170  Improve Your Writing - 6 ways to compare</a><br>
        <a href="actualvideocontent_emma.php?video=14">&#10170  IELTS Success – Studying Academic English at a School</a><br>
        <a href="actualvideocontent_emma.php?video=15">&#10170  IELTS: Top 10 Spelling Mistakes</a><br>
        <a href="actualvideocontent_emma.php?video=19">&#10170  IELTS Writing: Numbers and Pie Charts</a><br>
        <a href="actualvideocontent_emma.php?video=20">&#10170  How to write a good essay: Paraphrasing the question</a><br>
        <a href="actualvideocontent_emma.php?video=21">&#10170  IELTS Writing Task 1: How to describe a process</a><br>
        <a href="actualvideocontent_emma.php?video=22">&#10170  Emma's TOP 15 STUDY TIPS</a><br>
        <a href="actualvideocontent_emma.php?video=23">&#10170  IELTS Writing Task 1: How to describe BAR GRAPHS</a><br>
        <a href="actualvideocontent_emma.php?video=24">&#10170  Read, Understand, and Remember! Improve your reading skills with the KWL Method</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
