<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../java/accordionstyle.css">
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
            $lien="https://www.youtube.com/embed/o9sIrvpH_ic";
            $nom_vid="Introduction";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/hwZTgl7puU0";
            $nom_vid="Premier Code";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/CMx1WOVXkW0";
            $nom_vid="Affichage En Console";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/wqTRMfdkoNA";
            $nom_vid="Saisie Utilisateur";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/1cfrnPkXIOI";
            $nom_vid="Variables et Constantes";
            $chapitre="2";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/IhRBe5pwgG4";
            $nom_vid="Les Tableaux";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/k0hlWQKk7d8";
            $nom_vid="Pointeurs et Allocation Mémoire";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/8F3MDdqcr5g";
            $nom_vid="Structures et Enumérations";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/KlsD_zFgFRk";
            $nom_vid="Les fonctions";
            $chapitre="3";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/I3VH14g0eMk";
            $nom_vid="Programmation Objet";
            $chapitre="4";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/s6dnU0MEUms";
            $nom_vid="Constructeurs et Attributs ";
            $chapitre="4";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/i92LckCRooA";
            $nom_vid="Méthodes et Accesseurs";
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
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_c++.php" style="color:white;">C++</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_c++_formationvideo.php" style="color:white;">Cours C++</a></li>
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
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapitre 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=1">&#10170  Introduction</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=2">&#10170  Premier Code</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=3">&#10170  Affichage En Console</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=5">&#10170  Saisie Utilisateur</a><br>
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
                          Chapitre 2 : Manipulation des types de données
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=4">&#10170  Variables et Constantes</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=7">&#10170  Les Tableaux</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=8">&#10170  Pointeurs et Allocation Mémoire</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=9">&#10170  Structures et Enumérations</a><br>
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
                          Chapitre 3 : Programmation procédurale
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=6">&#10170  Les fonctions</a><br>
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
                           Chapitre 4 : Programmation Orienté Objet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_formationvideo.php?video=10">&#10170  Programmation Objet</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=11">&#10170  Constructeurs et Attributs</a><br>
                        <a href="actualvideocontent_formationvideo.php?video=12">&#10170  Méthodes et Accesseurs</a><br>
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
