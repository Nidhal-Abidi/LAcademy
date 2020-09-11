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
          case '3':
            $lien="https://www.youtube.com/embed/p3p7CYoM4NM";
            $nom_vid="Unit 1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/y1HBJ8cZwXg";
            $nom_vid="Unit 2";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/bjnf3qL1J6g";
            $nom_vid="Unit 3";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/xbt__3MpFvg";
            $nom_vid="Unit 4";
            break;
          case '7':/* Breakpoint */
            $lien="https://www.youtube.com/embed/lFGPZvaF3QU";
            $nom_vid="Unit 5";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/BAUt7oSkIyk";
            $nom_vid="Unit 6";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/h9AeSqzqNbM";
            $nom_vid="Unit 7";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/7YOMaq7XP6g";
            $nom_vid="Unit 8";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/9cKCBJoqNbE";
            $nom_vid="Unit 9";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/llJs2MQl0C8";
            $nom_vid="Learn French words - From lesson 1 to lesson 12";
            break;
          case '13':/* Breakpoint */
            $lien="https://www.youtube.com/embed/8eWlNT3ISHc";
            $nom_vid="Useful tips for French pronunciation";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/NKByouc4Grw";
            $nom_vid="Imagiers.net - VOL 2";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/u4CebujPE4I";
            $nom_vid="400 French verbs";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/ckzM6-Ee7wU";
            $nom_vid="200 MINUTES TO MASTER FRENCH PRONUNCIATION";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/jELAt8HkzuI";
            $nom_vid="102 MINUTES OF FRENCH PHONETICS";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/BmSAt5eI0AM";
            $nom_vid="FRENCH CONJUGATION = 171 VERBS AT THE PRESENT TENSE";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_french.php" style="color:white;">French</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_french_lingoni.php" style="color:white;">French Lessons B1</a></li>
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
    </div>
</div>

<?php require "../../../footer.php" ?>
