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
          case '1':
            $lien="https://www.youtube.com/embed/AzES-nhQFzk";
            $nom_vid="Greetings";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/uqgKvNxhCvQ";
            $nom_vid="More Greetings";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/bOD6iXEq0qc";
            $nom_vid="Greetings Throughout the Day";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/O76v9UjAYMg";
            $nom_vid="Useful Expressions";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/zlbETGgHZTk";
            $nom_vid="More Useful Expressions";
            $chapitre="1";
            break;
          case '6':
            $lien="https://www.youtube.com/embed/zBNQQ0ZFZbg";
            $nom_vid="Introducing Yourself ";
            $chapitre="1";
            break;
          case '7':/* Breakpoint */
            $lien="https://www.youtube.com/embed/WhE8Qi0y9gY";
            $nom_vid="The Alphabet";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/iim3mnzcO50";
            $nom_vid="Writing the Alphabet";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/LJnQiOBLrEE";
            $nom_vid="Spelling";
            $chapitre="2";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/YKYX0mTyeRI";
            $nom_vid="Counting from 0 to 10";
            $chapitre="2";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/MLtc_631cmE";
            $nom_vid="Counting from 10 to 20";
            $chapitre="2";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/c1nvw91gTog";
            $nom_vid="Counting from 10 to 100";
            $chapitre="2";
            break;
          case '16':
            $lien="https://www.youtube.com/embed/gbepJU1RpnQ";
            $nom_vid="Hundred, Thousand and Million";
            $chapitre="2";
            break;
          case '17':/* Breakpoint */
            $lien="https://www.youtube.com/embed/QXbxESM5wQI";
            $nom_vid="Present forms of BE (am, is, are)";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/49fFtDu_I0o";
            $nom_vid="Subject Pronouns (I, you, he, she, it, we, they)";
            $chapitre="3";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/1a_7I1VfTM8";
            $nom_vid="Forming Sentences with BE";
            $chapitre="3";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/03SMFWgOKUY";
            $nom_vid="Negative Forms of BE and Questions";
            $chapitre="3";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/MK300_aeKaA";
            $nom_vid="Articles (a, an, the)";
            $chapitre="3";
            break;
          case '27':
            $lien="https://www.youtube.com/embed/2RjpUy2rUkw";
            $nom_vid="That, Those";
            $chapitre="3";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/HLFo2PRB2_I";
            $nom_vid="Forms of HAVE";
            $chapitre="3";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/RuIMGpfDNL8";
            $nom_vid="Negative Forms of HAVE";
            $chapitre="3";
            break;
          case '45':
            $lien="https://www.youtube.com/embed/tfVO3yFM1VE";
            $nom_vid="Past Forms of BE (was, were)";
            $chapitre="3";
            break;
          case '47':
            $lien="https://www.youtube.com/embed/CWOcw97CP_M";
            $nom_vid="Possessive Nouns";
            $chapitre="3";
            break;
          case '60':
            $lien="https://www.youtube.com/embed/tjN5BQztyts";
            $nom_vid="Present Progressive (affirmative)";
            $chapitre="3";
            break;
          case '61':
            $lien="https://www.youtube.com/embed/Y0lzCDII6h0";
            $nom_vid="Present Progressive (negative)";
            $chapitre="3";
            break;
          case '62':
            $lien="https://www.youtube.com/embed/1ZIs7lECx-I";
            $nom_vid="Present Progressive (questions)";
            $chapitre="3";
            break;
          case '40':/* Breakpoint */
            $lien="https://www.youtube.com/embed/D4EBbD34KHM";
            $nom_vid="Dates";
            $chapitre="4";
            break;
          case '41':
            $lien="https://www.youtube.com/embed/t30pv7ldSwQ";
            $nom_vid="Days of the Week";
            $chapitre="4";
            break;
          case '42':
            $lien="https://www.youtube.com/embed/QL28-6vDItE";
            $nom_vid="Weekday and Weekend";
            $chapitre="4";
            break;
          case '43':
            $lien="https://www.youtube.com/embed/I6UcmFUkACQ";
            $nom_vid="Questions About the Calendar";
            $chapitre="4";
            break;
          case '58':
            $lien="https://www.youtube.com/embed/HKpwjiv4J2Q";
            $nom_vid="Telling Time";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language.php" style="color:white;">Language</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../language_english.php" style="color:white;">English</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="language_english_jenniferesl.php" style="color:white;">Learn English with Jennifer: Lessons for Beginners</a></li>
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
                  echo '<!-- Détails chapitre 1 -->
                  <div class="card">
                    <div class="card-header" id="headingOne">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Chapter 1 : Greeting & useful expressions
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_jenniferesl.php?video=1">&#10170  Greetings</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=2">&#10170  More Greetings</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=3">&#10170  Greetings Throughout the Day</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=4">&#10170  Useful Expressions</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=5">&#10170  More Useful Expressions</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=6">&#10170  Introducing Yourself </a><br>
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
                          Chapter 2 :  Learn the alphabet , spelling and counting
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_jenniferesl.php?video=7">&#10170  The Alphabet </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=8">&#10170  Writing the Alphabet</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=9">&#10170  Spelling </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=12">&#10170  Counting from 0 to 10</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=14">&#10170  Counting from 10 to 20 </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=15">&#10170  Counting from 10 to 100</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=16">&#10170  Hundred, Thousand and Million</a><br>
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
                          Chapter 3 : Grammar
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_jenniferesl.php?video=17">&#10170  Present forms of BE (am, is, are)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=18">&#10170  Subject Pronouns (I, you, he, she, it, we, they)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=19">&#10170  Forming Sentences with BE</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=20">&#10170  Negative Forms of BE and Questions</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=25">&#10170  Articles (a, an, the)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=27">&#10170  That, Those</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=32">&#10170  Forms of HAVE</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=33">&#10170  Negative Forms of HAVE</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=45">&#10170  Past Forms of BE (was, were)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=47">&#10170  Possessive Nouns</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=60">&#10170  Present Progressive (affirmative)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=61">&#10170  Present Progressive (negative)</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=62">&#10170  Present Progressive (questions)</a><br>
                        </div>
                    </div>
                  </div>';
                  break;
                case '4':
                  echo '<!-- Détails  chapitre 4 -->
                  <div class="card">
                    <div class="card-header" id="headingFour">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                           Chapter 4 : Understanding Dates
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_jenniferesl.php?video=40">&#10170  Dates </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=41">&#10170  Days of the Week</a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=42">&#10170  Weekday and Weekend </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=43">&#10170  Questions About the Calendar </a><br>
                        <a href="actualvideocontent_jenniferesl.php?video=58">&#10170  Telling Time </a><br>
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
