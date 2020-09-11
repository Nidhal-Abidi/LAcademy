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
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '1':
            $lien="https://www.youtube.com/embed/EG4ZoVTSA5I";
            $nom_vid="Convection versus diffusion";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/XsujCJ_ko3k";
            $nom_vid="Determining diffusivity (CT2 Intro)";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/MyTyNTt7MXk";
            $nom_vid="Estimating diffusivity: Simple model";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/62asq27xHuo";
            $nom_vid="Diffusivity: D_AB versus D_BA";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/zYBWeQ7fccw";
            $nom_vid="Approaching advanced diffusivity model";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/MmktPnoSADY";
            $nom_vid="Estimating diffusivity, advanced model";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/X8CBF5VDcF8";
            $nom_vid="Reading logarithmic diagrams (with high accuracy)";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/rJ126ainfo0";
            $nom_vid="Estimating diffusivity: Contribution method";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/OADY7u2inZQ";
            $nom_vid="Diffusion in liquids";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/HA3RrWW8uGQ";
            $nom_vid="Convection AND diffusion";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/0HhQhj6HvSk";
            $nom_vid="Equimolar counter diffusion";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/VXIwAkjYMLM";
            $nom_vid="Diffusion through stagnant component";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/YjME83us5r8";
            $nom_vid="Diffusivity versus Mass transfer coefficients";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/ydTo0SFTm2A";
            $nom_vid="Two Film Theory";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/N0ZRNf7xgvM";
            $nom_vid="Two Film Theory example + Quick summary";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/kKsxZy2mAeM";
            $nom_vid="Overall Mass Transfer Coefficient";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/whN-XepwXgg";
            $nom_vid="Penetration theory";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/FDfWyeqkKkU";
            $nom_vid="Boundary Layer Theory";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/7YlQ_4jL_gs";
            $nom_vid="Reynolds analogy and Chilton Colburn analogy";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/28BvVAiLXck";
            $nom_vid="Mass transfer in 3D";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/xOOn4u1EJrA";
            $nom_vid="Non-stationary mass transfer and Swedish meat balls";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/oSGrIQTPqlw";
            $nom_vid="Introduction to COMSOL Multiphysics";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_chemical.php" style="color:white;">Chemical Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering_chemical_lund.php" style="color:white;">Mass Transfer</a></li>
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
</div>

<?php require "../../../footer.php" ?>
