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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../engineering_software.php" style="color:white;">Software Engineering</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Computer Science Crash Course</li>

  </ol>
</nav>
<!-- the actual content of this course ( Computer Science Crash Course )
     liste des chapitres-->

  <div class="accordion" id="accordionExample">
	<!-- Détails chapitre 1 -->
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
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 :  The Mechanics of How Computers Work
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
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
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : The Basics of Programming and Software
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
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
  </div>
  <!-- Détails  chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Computer Hardware
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
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
  </div>
  <!-- Détails  chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 5 : The Rise of Personal Computers and Graphics
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=24">&#10170  The Cold War and Consumerism: Crash Course Computer Science #24</a><br>
        <a href="actualvideocontent_crashcourse.php?video=25">&#10170  The Personal Computer Revolution: Crash Course Computer Science #25</a><br>
        <a href="actualvideocontent_crashcourse.php?video=26">&#10170  Graphical User Interfaces: Crash Course Computer Science #26</a><br>
        <a href="actualvideocontent_crashcourse.php?video=27">&#10170  3D Graphics: Crash Course Computer Science #27</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Chapter 6 : The Internet
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=28">&#10170  Computer Networks: Crash Course Computer Science #28</a><br>
        <a href="actualvideocontent_crashcourse.php?video=29">&#10170  The Internet: Crash Course Computer Science #29</a><br>
        <a href="actualvideocontent_crashcourse.php?video=30">&#10170  The World Wide Web: Crash Course Computer Science #30</a><br>
        <a href="actualvideocontent_crashcourse.php?video=31">&#10170  Cybersecurity: Crash Course Computer Science #31</a><br>
        <a href="actualvideocontent_crashcourse.php?video=32">&#10170  Hackers & Cyber Attacks: Crash Course Computer Science #32</a><br>
        <a href="actualvideocontent_crashcourse.php?video=33">&#10170  Cryptography: Crash Course Computer Science #33</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
           Chapter 7 : Artificial Intelligence
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=34">&#10170  Machine Learning & Artificial Intelligence: Crash Course Computer Science #34</a><br>
        <a href="actualvideocontent_crashcourse.php?video=35">&#10170  Computer Vision: Crash Course Computer Science #35</a><br>
        <a href="actualvideocontent_crashcourse.php?video=36">&#10170  Natural Language Processing: Crash Course Computer Science #36</a><br>
        <a href="actualvideocontent_crashcourse.php?video=37">&#10170  Robots: Crash Course Computer Science #37</a><br>
      </div>
    </div>
  </div>
  <!-- Détails  chapitre 8 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
           Chapter 8 : Humans and the Future of Computing
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_crashcourse.php?video=38">&#10170  Psychology of Computing: Crash Course Computer Science #38</a><br>
        <a href="actualvideocontent_crashcourse.php?video=39">&#10170  Educational Technology: Crash Course Computer Science #39</a><br>
        <a href="actualvideocontent_crashcourse.php?video=40">&#10170  The Singularity, Skynet, and the Future of Computing: Crash Course Computer Science #40</a><br>
      </div>
    </div>
  </div>
</div>

<?php require "../../../footer.php" ?>
