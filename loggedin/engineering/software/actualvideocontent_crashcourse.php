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
      $chapitre="";
      if (isset($_GET['video'])){
        switch ($_GET['video']) {
          case '0':
            $lien="https://www.youtube.com/embed/tpIctyqH29Q";
            $nom_vid="Crash Course Computer Science Preview";
            $chapitre="0";
            break;
          case '1':
            $lien="https://www.youtube.com/embed/O5nskjZ_GoI";
            $nom_vid="Early Computing: Crash Course Computer Science #1";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/LN0ucKNX0hc";
            $nom_vid="Electronic Computing: Crash Course Computer Science #2";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/gI-qXk7XojA";
            $nom_vid="Boolean Logic & Logic Gates: Crash Course Computer Science #3";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/1GSjbWt0c9M";
            $nom_vid="Binary - Representing Numbers and Letters: Computer Crash Course # 4";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/1I5ZMmrOfnA";
            $nom_vid="How Computers Calculate - the ALU: Crash Course Computer Science #5";
            $chapitre="1";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/fpnE6UAfbtU";
            $nom_vid="Registers and RAM: Crash Course Computer Science #6";
            $chapitre="1";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/FZGugFqdr60";
            $nom_vid="The Central Processing Unit (CPU): Crash Course Computer Science #7";
            $chapitre="1";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/zltgXvg6r3k";
            $nom_vid="Instructions & Programs: Crash Course Computer Science #8";
            $chapitre="1";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/rtAlC5J1U40";
            $nom_vid="Advanced CPU Designs: Crash Course Computer Science #9";
            $chapitre="1";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/nwDq4adJwzM";
            $nom_vid="Early Programming: Crash Course Computer Science #10";
            $chapitre="2";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/RU1u-js7db8";
            $nom_vid="The First Programming Languages: Crash Course Computer Science #11";
            $chapitre="2";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/l26oaHV7D40";
            $nom_vid="Programming Basics: Statements & Functions: Crash Course Computer Science #12";
            $chapitre="2";
            break;
          case '13':/* Breakpoint */
            $lien="https://www.youtube.com/embed/rL8X2mlNHPM";
            $nom_vid="Intro to Algorithms: Crash Course Computer Science #13";
            $chapitre="2";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/DuDz6B4cqVc";
            $nom_vid="Data Structures: Crash Course Computer Science #14";
            $chapitre="2";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/7TycxwFmdB0";
            $nom_vid="Alan Turing: Crash Course Computer Science #15";
            $chapitre="2";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/O753uuutqH8";
            $nom_vid="Software Engineering: Crash Course Computer Science #16";
            $chapitre="2";
            break;
          case '17':
            $lien="https://www.youtube.com/embed/6-tKOHICqrI";
            $nom_vid="Integrated Circuits & Moore’s Law: Crash Course Computer Science #17";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/26QPDBe-NB8";
            $nom_vid="Operating Systems: Crash Course Computer Science #18";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/TQCr9RV7twk";
            $nom_vid="Memory & Storage: Crash Course Computer Science #19";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/KN8YgJnShPM";
            $nom_vid="Files & File Systems: Crash Course Computer Science #20";
            $chapitre="3";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/OtDxDvCpPL4";
            $nom_vid="Compression: Crash Course Computer Science #21";
            $chapitre="3";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/4RPtJ9UyHS0";
            $nom_vid="Keyboards & Command Line Interfaces: Crash Course Computer Science #22";
            $chapitre="3";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/7Jr0SFMQ4Rs";
            $nom_vid="Screens & 2D Graphics: Crash Course Computer Science #23";
            $chapitre="3";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/m8i38Yq1wX4";
            $nom_vid="The Cold War and Consumerism: Crash Course Computer Science #24";
            $chapitre="4";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/M5BZou6C01w";
            $nom_vid="The Personal Computer Revolution: Crash Course Computer Science #25";
            $chapitre="4";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/XIGSJshYb90";
            $nom_vid="Graphical User Interfaces: Crash Course Computer Science #26";
            $chapitre="4";
            break;
          case '27':
            $lien="https://www.youtube.com/embed/TEAtmCYYKZA";
            $nom_vid="3D Graphics: Crash Course Computer Science #27";
            $chapitre="4";
            break;
          case '28':
            $lien="https://www.youtube.com/embed/3QhU9jd03a0";
            $nom_vid="Computer Networks: Crash Course Computer Science #28";
            $chapitre="5";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/AEaKrq3SpW8";
            $nom_vid="The Internet: Crash Course Computer Science #29";
            $chapitre="5";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/guvsH5OFizE";
            $nom_vid="The World Wide Web: Crash Course Computer Science #30";
            $chapitre="5";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/bPVaOlJ6ln0";
            $nom_vid="Cybersecurity: Crash Course Computer Science #31";
            $chapitre="5";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/_GzE99AmAQU";
            $nom_vid="Hackers & Cyber Attacks: Crash Course Computer Science #32";
            $chapitre="5";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/jhXCTbFnK8o";
            $nom_vid="Cryptography: Crash Course Computer Science #33";
            $chapitre="5";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/z-EtmaFJieY";
            $nom_vid="Machine Learning & Artificial Intelligence: Crash Course Computer Science #34";
            $chapitre="6";
            break;
          case '35':
            $lien="https://www.youtube.com/embed/-4E2-0sxVUM";
            $nom_vid="Computer Vision: Crash Course Computer Science #35";
            $chapitre="6";
            break;
          case '36':
            $lien="https://www.youtube.com/embed/fOvTtapxa9c";
            $nom_vid="Natural Language Processing: Crash Course Computer Science #36";
            $chapitre="6";
            break;
          case '37':
            $lien="https://www.youtube.com/embed/3XkL0qQ21Oo";
            $nom_vid="Robots: Crash Course Computer Science #37";
            $chapitre="6";
            break;
          case '38':
            $lien="https://www.youtube.com/embed/DEHsvQ3Ylwg";
            $nom_vid="Psychology of Computing: Crash Course Computer Science #38";
            $chapitre="7";
            break;
          case '39':
            $lien="https://www.youtube.com/embed/zTi3_l5h5PQ";
            $nom_vid="Educational Technology: Crash Course Computer Science #39";
            $chapitre="7";
            break;
          case '40':
            $lien="https://www.youtube.com/embed/5TNAz1HYg18";
            $nom_vid="The Singularity, Skynet, and the Future of Computing: Crash Course Computer Science #40";
            $chapitre="7";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering.php" style="color:white;">Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_software.php" style="color:white;">Software Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="engineering_software_crashcourse.php" style="color:white;">Computer Science Crash Course</a></li>
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
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=0">&#10170  Crash Course Computer Science Preview</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '1':
                  echo '<!-- Détails chapitre 2 -->
                  <div class="card">
                    <div class="card-header" id="headingTwo">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                          Chapter 2 :  The Mechanics of How Computers Work
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=1">&#10170  Early Computing: Crash Course Computer Science #1</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=2">&#10170  Electronic Computing: Crash Course Computer Science #2</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=3">&#10170  Boolean Logic & Logic Gates: Crash Course Computer Science #3</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=4">&#10170  Binary - Representing Numbers and Letters: Computer Crash Course # 4</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=5">&#10170  How Computers Calculate - the ALU: Crash Course Computer Science #5</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=6">&#10170  Registers and RAM: Crash Course Computer Science #6</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=7">&#10170  The Central Processing Unit (CPU): Crash Course Computer Science #7</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=8">&#10170  Instructions & Programs: Crash Course Computer Science #8</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=9">&#10170  Advanced CPU Designs: Crash Course Computer Science #9</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '2':
                  echo '<!-- Détails chapitre 3 -->
                  <div class="card">
                    <div class="card-header" id="headingThree">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                          Chapter 3 : The Basics of Programming and Software
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=10">&#10170  Early Programming: Crash Course Computer Science #10</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=11">&#10170  The First Programming Languages: Crash Course Computer Science #11</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=12">&#10170  Programming Basics: Statements & Functions: Crash Course Computer Science #12</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=13">&#10170  Intro to Algorithms: Crash Course Computer Science #13</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=14">&#10170  Data Structures: Crash Course Computer Science #14</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=15">&#10170  Alan Turing: Crash Course Computer Science #15</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=16">&#10170  Software Engineering: Crash Course Computer Science #16</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '3':
                  echo '<!-- Détails  chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Computer Hardware
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=17">&#10170  Integrated Circuits & Moore’s Law: Crash Course Computer Science #17</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=18">&#10170  Operating Systems: Crash Course Computer Science #18</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=19">&#10170  Memory & Storage: Crash Course Computer Science #19</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=20">&#10170  Files & File Systems: Crash Course Computer Science #20</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=21">&#10170  Compression: Crash Course Computer Science #21</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=22">&#10170  Keyboards & Command Line Interfaces: Crash Course Computer Science #22</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=23">&#10170  Screens & 2D Graphics: Crash Course Computer Science #23</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails  chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapter 5 : The Rise of Personal Computers and Graphics
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=24">&#10170  The Cold War and Consumerism: Crash Course Computer Science #24</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=25">&#10170  The Personal Computer Revolution: Crash Course Computer Science #25</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=26">&#10170  Graphical User Interfaces: Crash Course Computer Science #26</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=27">&#10170  3D Graphics: Crash Course Computer Science #27</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo '<!-- Détails  chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           Chapter 6 : The Internet
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=28">&#10170  Computer Networks: Crash Course Computer Science #28</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=29">&#10170  The Internet: Crash Course Computer Science #29</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=30">&#10170  The World Wide Web: Crash Course Computer Science #30</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=31">&#10170  Cybersecurity: Crash Course Computer Science #31</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=32">&#10170  Hackers & Cyber Attacks: Crash Course Computer Science #32</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=33">&#10170  Cryptography: Crash Course Computer Science #33</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '6':
                  echo '  <!-- Détails  chapitre 7 -->
                    <div class="card">
                      <div class="card-header" id="headingSeven">
                        <h2 class="mb-0">
                          <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                             Chapter 7 : Artificial Intelligence
                          </button>
                        </h2>
                      </div>
                      <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                        <div class="card-body">
                          <a href="actualvideocontent_crashcourse.php?video=34">&#10170  Machine Learning & Artificial Intelligence: Crash Course Computer Science #34</a><br>
                          <a href="actualvideocontent_crashcourse.php?video=35">&#10170  Computer Vision: Crash Course Computer Science #35</a><br>
                          <a href="actualvideocontent_crashcourse.php?video=36">&#10170  Natural Language Processing: Crash Course Computer Science #36</a><br>
                          <a href="actualvideocontent_crashcourse.php?video=37">&#10170  Robots: Crash Course Computer Science #37</a><br>
                        </div>
                      </div>
                    </div>';
                  break;
                case '7':
                  echo '<!-- Détails  chapitre 8 -->
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                           Chapter 8 : Humans and the Future of Computing
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_crashcourse.php?video=38">&#10170  Psychology of Computing: Crash Course Computer Science #38</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=39">&#10170  Educational Technology: Crash Course Computer Science #39</a><br>
                        <a href="actualvideocontent_crashcourse.php?video=40">&#10170  The Singularity, Skynet, and the Future of Computing: Crash Course Computer Science #40</a><br>
                      </div>
                    </div>
                  </div>';
                  break;

                default:
                  // code...
                  break;
              }
            }
           ?>
        </div>
    </div>
</div>

<?php require "../../../footer.php" ?>
