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
            $lien="https://www.youtube.com/embed/KdH2-rKEyNY";
            $nom_vid="Lecture 1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/9dmu2sm0CJM";
            $nom_vid="Lecture 2";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/lDjXQGpLBs4";
            $nom_vid="Lecture 3";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/UVPlTLoInOk";
            $nom_vid="Lecture 4";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/ENJdd3hg5m4";
            $nom_vid="Lecture 5";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/newkbtn2TDY";
            $nom_vid="Lecture 6";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/bh0MRJyupb0";
            $nom_vid="Lecture 7";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/oZTKkSCigwk";
            $nom_vid="Lecture 8";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/lDBOJsQEae0";
            $nom_vid="Lecture 9";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/7F9eBbatqzg";
            $nom_vid="Lecture 10";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/N1dsy_4lnac";
            $nom_vid="Lecture 11";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/p6IBZlhIHt0";
            $nom_vid="Lecture 12";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/8nmByP9hDkY";
            $nom_vid="Lecture 13";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/1era5e2Q3Mg";
            $nom_vid="Lecture 14";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/dyzdCbqccV4";
            $nom_vid="Lecture 15";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/ZHTrj2a1rMQ";
            $nom_vid="Lecture 16";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/tNpuB12zXFQ";
            $nom_vid="Lecture 17";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/unUDeoxau2Y";
            $nom_vid="Lecture 18";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/uotprvjlifw";
            $nom_vid="Lecture 19";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/gCeMMR8png8";
            $nom_vid="Lecture 20";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/KtF4dUC7tUs";
            $nom_vid="Lecture 21";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/0owZHiGZ0eU";
            $nom_vid="Lecture 22";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/iDXH9W4LYE4";
            $nom_vid="Lecture 23";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/qQpMTHWAcps";
            $nom_vid="Lecture 24";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/DKWj2WzYXtQ";
            $nom_vid="Lecture 25";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/_joeVYaml5E";
            $nom_vid="Lecture 26";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_aerospace.php" style="color:white;">Aerospace Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering_aerospace_nptelhrd.php" style="color:white;">Aerospace-Introduction to Helicopter Aerodynamics & Dynamics</a></li>
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
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Chapter 1 : All the lectures
              </button>
            </h2>
          </div>

          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <a href="actualvideocontent_nptelhrd.php?video=1">&#10170  Lecture 1 </a><br>
              <a href="actualvideocontent_nptelhrd.php?video=2">&#10170  Lecture 2 </a><br>
              <a href="actualvideocontent_nptelhrd.php?video=3">&#10170  Lecture 3 </a><br>
              <a href="actualvideocontent_nptelhrd.php?video=4">&#10170  Lecture 4</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=5">&#10170  Lecture 5</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=6">&#10170  Lecture 6</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=7">&#10170  Lecture 7</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=8">&#10170  Lecture 8</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=9">&#10170  Lecture 9</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=10">&#10170  Lecture 10</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=11">&#10170  Lecture 11</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=12">&#10170  Lecture 12</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=13">&#10170  Lecture 13</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=14">&#10170  Lecture 14</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=15">&#10170  Lecture 15</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=16">&#10170  Lecture 16</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=17">&#10170  Lecture 17</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=18">&#10170  Lecture 18</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=19">&#10170  Lecture 19</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=20">&#10170  Lecture 20</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=21">&#10170  Lecture 21</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=22">&#10170  Lecture 22</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=23">&#10170  Lecture 23</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=24">&#10170  Lecture 24</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=25">&#10170  Lecture 25</a><br>
              <a href="actualvideocontent_nptelhrd.php?video=26">&#10170  Lecture 26</a><br>
            </div>
          </div>
        </div>
        </div>
    </div>
</div>
<?php require "../../../footer.php" ?>
