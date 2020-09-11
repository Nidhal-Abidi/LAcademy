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
          case '2':
            $lien="https://www.youtube.com/embed/60no--vtj0Q";
            $nom_vid="Les médias - B1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/MyXW6_XdX6w";
            $nom_vid="L'accord du participe passé - B1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/y0yj1Nkv5vs";
            $nom_vid="Top 10 French Verbs for Cooking - B1/B2";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/DL2wzRyPblA";
            $nom_vid="Pronoms COD - COI - Y - EN - B1";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/h2skPDi-VpM";
            $nom_vid="Les doubles pronoms - B1 ";
            break;
          case '7':/* Breakpoint */
            $lien="https://www.youtube.com/embed/BrR-6i7qTSI";
            $nom_vid="Les expressions de la vie quotidienne - B1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/3MxvrThDYfM";
            $nom_vid="Top 10 French Verbs Difficult to Pronounce - B1/B2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/xO3eNcAvKPE";
            $nom_vid="Le conditionnel présent - B1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/DSABiVZ8qA4";
            $nom_vid="Top 10 Most Common GRAMMAR Mistakes in French - B1";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/uiOWnvIRgkM";
            $nom_vid="Top 20 pieces of clothing - B1";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/ZAZnBI_YnCA";
            $nom_vid="Top 10 Most Common VOCAB Mistakes in French - B1";
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
                <a href="actualvideocontent_lingoni.php?video=2">&#10170  Les médias - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=3">&#10170  L'accord du participe passé - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=4">&#10170  Top 10 French Verbs for Cooking - B1/B2</a><br>
                <a href="actualvideocontent_lingoni.php?video=5">&#10170  Pronoms COD - COI - Y - EN - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=6">&#10170  Les doubles pronoms - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=7">&#10170  Les expressions de la vie quotidienne - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=8">&#10170  Top 10 French Verbs Difficult to Pronounce - B1/B2</a><br>
                <a href="actualvideocontent_lingoni.php?video=9">&#10170  Le conditionnel présent - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=10">&#10170  Top 10 Most Common GRAMMAR Mistakes in French - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=11">&#10170  Top 20 pieces of clothing - B1</a><br>
                <a href="actualvideocontent_lingoni.php?video=12">&#10170  Top 10 Most Common VOCAB Mistakes in French - B1</a><br>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>
<?php require "../../../footer.php" ?>
