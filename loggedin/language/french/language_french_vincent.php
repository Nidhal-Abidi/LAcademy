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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_french.php" style="color:white;">French</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">French Lessons B1</li>

  </ol>
</nav>
<!-- the actual content of this course ( French Lessons B1 )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter : French lessons
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_vincent.php?video=3">&#10170  Unit 1 </a><br>
        <a href="actualvideocontent_vincent.php?video=4">&#10170  Unit 2 </a><br>
        <a href="actualvideocontent_vincent.php?video=5">&#10170  Unit 3 </a><br>
        <a href="actualvideocontent_vincent.php?video=6">&#10170  Unit 4 </a><br>
        <a href="actualvideocontent_vincent.php?video=7">&#10170  Unit 5 </a><br>
        <a href="actualvideocontent_vincent.php?video=8">&#10170  Unit 6 </a><br>
        <a href="actualvideocontent_vincent.php?video=9">&#10170  Unit 7 </a><br>
        <a href="actualvideocontent_vincent.php?video=10">&#10170  Unit 8 </a><br>
        <a href="actualvideocontent_vincent.php?video=11">&#10170  Unit 9</a><br>
        <a href="actualvideocontent_vincent.php?video=12">&#10170  Learn French words - From lesson 1 to lesson 12</a><br>
        <a href="actualvideocontent_vincent.php?video=13">&#10170  Useful tips for French pronunciation</a><br>
        <a href="actualvideocontent_vincent.php?video=14">&#10170  Imagiers.net - VOL 2</a><br>
        <a href="actualvideocontent_vincent.php?video=15">&#10170  400 French verbs</a><br>
        <a href="actualvideocontent_vincent.php?video=16">&#10170  200 MINUTES TO MASTER FRENCH PRONUNCIATION</a><br>
        <a href="actualvideocontent_vincent.php?video=17">&#10170  102 MINUTES OF FRENCH PHONETICS</a><br>
        <a href="actualvideocontent_vincent.php?video=18">&#10170  FRENCH CONJUGATION = 171 VERBS AT THE PRESENT TENSE</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
