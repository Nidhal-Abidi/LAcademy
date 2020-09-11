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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_chemical.php" style="color:white;">Chemical Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Mass Transfer</li>

  </ol>
</nav>
<!-- the actual content of this course ( Mass transfer )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
  <div class="card">
    <div class="card-header" id="headingOne">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Chapter 1 : All the Lectures
        </button>
      </h2>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_lund.php?video=1">&#10170  Convection versus diffusion </a><br>
        <a href="actualvideocontent_lund.php?video=2">&#10170  Determining diffusivity (CT2 Intro) </a><br>
        <a href="actualvideocontent_lund.php?video=3">&#10170  Estimating diffusivity: Simple model</a><br>
        <a href="actualvideocontent_lund.php?video=4">&#10170  Diffusivity: D_AB versus D_BA</a><br>
        <a href="actualvideocontent_lund.php?video=5">&#10170  Approaching advanced diffusivity model</a><br>
        <a href="actualvideocontent_lund.php?video=6">&#10170  Estimating diffusivity, advanced model</a><br>
        <a href="actualvideocontent_lund.php?video=7">&#10170  Reading logarithmic diagrams (with high accuracy)</a><br>
        <a href="actualvideocontent_lund.php?video=8">&#10170  Estimating diffusivity: Contribution method</a><br>
        <a href="actualvideocontent_lund.php?video=9">&#10170  Diffusion in liquids</a><br>
        <a href="actualvideocontent_lund.php?video=10">&#10170  Convection AND diffusion</a><br>
        <a href="actualvideocontent_lund.php?video=11">&#10170  Equimolar counter diffusion</a><br>
        <a href="actualvideocontent_lund.php?video=12">&#10170  Diffusion through stagnant component</a><br>
        <a href="actualvideocontent_lund.php?video=13">&#10170  Diffusivity versus Mass transfer coefficients</a><br>
        <a href="actualvideocontent_lund.php?video=14">&#10170  Two Film Theory</a><br>
        <a href="actualvideocontent_lund.php?video=15">&#10170  Two Film Theory example + Quick summary</a><br>
        <a href="actualvideocontent_lund.php?video=16">&#10170  Overall Mass Transfer Coefficient</a><br>
        <a href="actualvideocontent_lund.php?video=17">&#10170  Penetration theory</a><br>
        <a href="actualvideocontent_lund.php?video=18">&#10170  Boundary Layer Theory</a><br>
        <a href="actualvideocontent_lund.php?video=19">&#10170  Reynolds analogy and Chilton Colburn analogy</a><br>
        <a href="actualvideocontent_lund.php?video=20">&#10170  Mass transfer in 3D</a><br>
        <a href="actualvideocontent_lund.php?video=21">&#10170  Non-stationary mass transfer and Swedish meat balls</a><br>
        <a href="actualvideocontent_lund.php?video=22">&#10170  Introduction to COMSOL Multiphysics</a><br>
      </div>
    </div>
  </div>

</div>

<?php require "../../../footer.php" ?>
