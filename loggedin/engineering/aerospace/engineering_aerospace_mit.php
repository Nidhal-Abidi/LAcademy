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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_aerospace.php" style="color:white;">Aerospace Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">MIT 16.885J Aircraft Systems Engineering, Fall 2005</li>

  </ol>
</nav>
<!-- the actual content of this course ( MIT 16.885J Aircraft Systems Engineering, Fall 2005 )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : All the lectures
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_mit.php?video=1">&#10170  Lecture 1 </a><br>
        <a href="actualvideocontent_mit.php?video=2">&#10170  Lecture 2 </a><br>
        <a href="actualvideocontent_mit.php?video=3">&#10170  Lecture 3 </a><br>
        <a href="actualvideocontent_mit.php?video=4">&#10170  Lecture 4</a><br>
        <a href="actualvideocontent_mit.php?video=5">&#10170  Lecture 5</a><br>
        <a href="actualvideocontent_mit.php?video=6">&#10170  Lecture 6</a><br>
        <a href="actualvideocontent_mit.php?video=7">&#10170  Lecture 7</a><br>
        <a href="actualvideocontent_mit.php?video=8">&#10170  Lecture 8</a><br>
        <a href="actualvideocontent_mit.php?video=9">&#10170  Lecture 9</a><br>
        <a href="actualvideocontent_mit.php?video=10">&#10170  Lecture 10</a><br>
        <a href="actualvideocontent_mit.php?video=11">&#10170  Lecture 11</a><br>
        <a href="actualvideocontent_mit.php?video=12">&#10170  Lecture 12</a><br>
        <a href="actualvideocontent_mit.php?video=13">&#10170  Lecture 13</a><br>
        <a href="actualvideocontent_mit.php?video=14">&#10170  Lecture 14</a><br>
        <a href="actualvideocontent_mit.php?video=15">&#10170  Lecture 15</a><br>
        <a href="actualvideocontent_mit.php?video=16">&#10170  Lecture 16</a><br>
        <a href="actualvideocontent_mit.php?video=17">&#10170  Lecture 17</a><br>
        <a href="actualvideocontent_mit.php?video=18">&#10170  Lecture 18</a><br>
        <a href="actualvideocontent_mit.php?video=19">&#10170  Lecture 19</a><br>
        <a href="actualvideocontent_mit.php?video=20">&#10170  Lecture 20</a><br>
        <a href="actualvideocontent_mit.php?video=21">&#10170  Lecture 21</a><br>
        <a href="actualvideocontent_mit.php?video=22">&#10170  Lecture 22</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
