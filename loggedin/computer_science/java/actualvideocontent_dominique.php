<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="accordionstyle.css">
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
            $lien="https://www.youtube.com/embed/pXaaacSkPqc";
            $nom_vid="Préparation de votre environnement de développement Java";
            $chapitre="0";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/lO_n1bFXOdQ";
            $nom_vid="Votre première application Java (Hello World)";
            $chapitre="0";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/xiikhWw3814";
            $nom_vid="Compilation et portabilité des codes JAVA";
            $chapitre="0";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/aCZ9U-L8luQ";
            $nom_vid="Manipulation des types entiers en Java";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/WGykke4np-0";
            $nom_vid="Le type boolean (booléen)";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/nz_642sr8uM";
            $nom_vid="Manipulation de caractères en Java.";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/DMPKKw7X3lg";
            $nom_vid="Utilisation de chaînes de caractères en Java";
            $chapitre="1";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/BhNj3KqOpLI";
            $nom_vid="Les tableaux Java";
            $chapitre="1";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/zvMAMrkMjME";
            $nom_vid="Définition d'un type énuméré.";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/udV9ugHKglA";
            $nom_vid="Opérateurs ++ (incrément) et -- (décrément)";
            $chapitre="2";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/T2-eYxx0QRw";
            $nom_vid="Utilisation des opérateurs binaires";
            $chapitre="2";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/Lne5VEBYZZ0";
            $nom_vid="La table de précédence des opérateurs Java";
            $chapitre="2";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/rE4eNfEgIx4";
            $nom_vid="Les instructions conditionnelles";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/f7lS5AAbfJk";
            $nom_vid="Le nouveau switch de Java SE 14";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/d4HQdkuC65I";
            $nom_vid="Les instructions de boucles";
            $chapitre="4";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/Wt1iXdxb6JU";
            $nom_vid="L'instruction foreach en Java";
            $chapitre="4";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/eUOVf6tr8RM";
            $nom_vid="Les instructions de débranchement (break et continue)";
            $chapitre="4";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/cfxJOZ-dbMc";
            $nom_vid="Introduction à la Programmation Orientée Objet et principe d'encapsulation";
            $chapitre="5";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/0NKxgvStdCM";
            $nom_vid="Mise en oeuvre du concept d'héritage.";
            $chapitre="5";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/rIuQHKjIjt4";
            $nom_vid="Méthodes abstraites, classes abstraites et interfaces";
            $chapitre="5";
            break;
          case '35':
            $lien="https://www.youtube.com/embed/xG7Oq5Zk2Ak";
            $nom_vid="Implémentations d'interfaces";
            $chapitre="5";
            break;
          case '38':
            $lien="https://www.youtube.com/embed/o0uoNIyit9Q";
            $nom_vid="Introduction au mécanisme d'exceptions en Java";
            $chapitre="6";
            break;
          case '39':
            $lien="https://www.youtube.com/embed/3ri0nhAmdOU";
            $nom_vid="Mise en oeuvre d'une classe d'exception";
            $chapitre="6";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_java.php" style="color:white;">Java</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_java_dominique.php" style="color:white;">Apprendre la programmation avec JAVA</a></li>
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
                case '0':
                  echo '<div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapitre 0 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=1">&#10170  Préparation de l\'environnement de développement JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=2">&#10170  Premiére application JAVA</a><br>
                        <a href="actualvideocontent_dominique.php?video=3">&#10170  Compilation et portabilité des codes JAVA</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '1':
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapitre 1 : Manipulation des types de données
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=4">&#10170  Manipulation des types entiers en Java</a><br>
                        <a href="actualvideocontent_dominique.php?video=8">&#10170  Le type boolean (booléen)</a><br>
                        <a href="actualvideocontent_dominique.php?video=9">&#10170  Manipulation de caractères en Java.</a><br>
                        <a href="actualvideocontent_dominique.php?video=10">&#10170  Utilisation de chaînes de caractères en Java</a><br>
                        <a href="actualvideocontent_dominique.php?video=13">&#10170  Les tableaux Java</a><br>
                        <a href="actualvideocontent_dominique.php?video=14">&#10170  Définition d\'un type énuméré.</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapitre 2 : Operateur
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=5">&#10170  Opérateurs ++ (incrément) et -- (décrément)</a><br>
                        <a href="actualvideocontent_dominique.php?video=6">&#10170  Utilisation des opérateurs binaires</a><br>
                        <a href="actualvideocontent_dominique.php?video=16">&#10170  La table de précédence des opérateurs Java</a><br>

                      </div>
                    </div>
                  </div>';
                  break ;
                case '3':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapitre 3 : Les instructions conditionnelles
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=18">&#10170  Les instructions conditionnelles</a><br>
                        <a href="actualvideocontent_dominique.php?video=19">&#10170  Le nouveau switch de Java SE 14</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '4':
                  echo '<!-- Détails chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapitre 4 : Les boucles
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=20">&#10170  Les instructions de boucles</a><br>
                        <a href="actualvideocontent_dominique.php?video=21">&#10170  L\'instruction foreach en Java</a><br>
                        <a href="actualvideocontent_dominique.php?video=22">&#10170  Les instructions de débranchement (break et continue)</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '5':
                  echo ' <!-- Détails chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                            Chapitre 5 : Programmation orienté objet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=32">&#10170  Introduction à la Programmation Orientée Objet et principe d\'encapsulation</a><br>
                        <a href="actualvideocontent_dominique.php?video=33">&#10170  Mise en oeuvre du concept d\'héritage.</a><br>
                        <a href="actualvideocontent_dominique.php?video=34">&#10170  Méthodes abstraites, classes abstraites et interfaces</a><br>
                        <a href="actualvideocontent_dominique.php?video=35">&#10170  Implémentations d\'interfaces</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                            Chapitre 6 : Les exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show"  aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_dominique.php?video=38">&#10170  Introduction au mécanisme d\'exceptions en Java</a><br>
                        <a href="actualvideocontent_dominique.php?video=39">&#10170  Mise en oeuvre d\'une classe d\'exception</a><br>
                      </div>
                    </div>
                  </div>';
                  break ;
              }
            }
          ?>
        </div>
    </div>
</div>


<?php require "../../../footer.php" ?>
