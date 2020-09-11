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
            $lien="https://www.youtube.com/embed/rzqjYKyciUM";
            $nom_vid="Why Python مقدمة الدور";
            $chapitre="1";
            break;
          case '2':
            $lien="https://www.youtube.com/embed/PA84ErO2VNE";
            $nom_vid="Install python تنصيب بايثو";
            $chapitre="1";
            break;
          case '3':
            $lien="https://www.youtube.com/embed/cZaYtGpubmU";
            $nom_vid="First python app اول تطبيق بايثو";
            $chapitre="1";
            break;
          case '4':
            $lien="https://www.youtube.com/embed/7PcQMU7c5wk";
            $nom_vid="Python is Objects";
            $chapitre="1";
            break;
          case '5':
            $lien="https://www.youtube.com/embed/Wi0ITFUrHws";
            $nom_vid="Mutable and Immutable Object";
            $chapitre="1";
            break;
          case '7':
            $lien="https://www.youtube.com/embed/Jagp-EkxMa4";
            $nom_vid="Python Comments التعليقا";
            $chapitre="1";
            break;
          case '6':/* Breakpoint  */
            $lien="https://www.youtube.com/embed/yRErsFM5M6g";
            $nom_vid="Python variables المتغيرا";
            $chapitre="2";
            break;
          case '8':
            $lien="https://www.youtube.com/embed/gQ8_7WB5sdQ";
            $nom_vid="Python lists and tuples السلاسل";
            $chapitre="2";
            break;
          case '9':
            $lien="https://www.youtube.com/embed/Q5cQBCCjVzk";
            $nom_vid="Python Dictionary القامو";
            $chapitre="2";
            break;
          case '10':
            $lien="https://www.youtube.com/embed/MQSvfb242FU";
            $nom_vid="Python Object id  المعر";
            $chapitre="2";
            break;
          case '29':
            $lien="https://www.youtube.com/embed/X5u9sj0HE6c";
            $nom_vid="Python|| Strings  السلاسل النصي";
            $chapitre="2";
            break;
          case '12':
            $lien="https://www.youtube.com/embed/C_G2VEedFUg";
            $nom_vid="Python Math العمليات الرياضي";
            $chapitre="3";
            break;
          case '13':
            $lien="https://www.youtube.com/embed/2Xh8qFV_mlE";
            $nom_vid="Python Bitwise";
            $chapitre="3";
            break;
          case '18':
            $lien="https://www.youtube.com/embed/LTLUZBKxW4E";
            $nom_vid="Python Debug تتبع التنفي";
            $chapitre="3";
            break;
          case '26':
            $lien="https://www.youtube.com/embed/JlUWmZ_wkjI";
            $nom_vid="Python|| Functions الدوا";
            $chapitre="3";
            break;
          case '22':
            $lien="https://www.youtube.com/embed/kmAXIfHzOJg";
            $nom_vid="Python|| While Loop العبارات التكراري";
            $chapitre="4";
            break;
          case '23':
            $lien="https://www.youtube.com/embed/HNtKUmKYkmE";
            $nom_vid="Python|| iterator For Loop العبارات التكرارية";
            $chapitre="4";
            break;
          case '24':
            $lien="https://www.youtube.com/embed/5vZMCL6NpCE";
            $nom_vid="Python|| Nested Loop العبارات التكرارية متداخلة";
            $chapitre="4";
            break;
          case '25':
            $lien="https://www.youtube.com/embed/JkHQHe4TLG0";
            $nom_vid="Python|| Loop Control تحكم بالعبارات التكرارية";
            $chapitre="4";
            break;
          case '11':
            $lien="https://www.youtube.com/embed/5ZEE_LacKHs";
            $nom_vid="Python Logic بوابات منطقي";
            $chapitre="5";
            break;
          case '14':
            $lien="https://www.youtube.com/embed/xVLNeYwLvYA";
            $nom_vid="Python Boolean operations";
            $chapitre="5";
            break;
          case '15':
            $lien="https://www.youtube.com/embed/B5g1w2CLk4Y";
            $nom_vid="Python operation priorities";
            $chapitre="5";
            break;
          case '19':
            $lien="https://www.youtube.com/embed/AYBjvRtvJa4";
            $nom_vid="Python|| conditional 'IF' العبارات الشرطية";
            $chapitre="5";
            break;
          case '20':
            $lien="https://www.youtube.com/embed/Phx-HX4LDSc";
            $nom_vid="Python|| conditional 'IF- Else' العبارات الشرطية";
            $chapitre="5";
            break;
          case '21':
            $lien="https://www.youtube.com/embed/EMooVzOtg0A";
            $nom_vid="Python|| conditional Nested IF العبارات الشرطية";
            $chapitre="5";
            break;
          case '30':
            $lien="https://www.youtube.com/embed/nNQ_kKOO32A";
            $nom_vid="Python OOP|| Basic Class";
            $chapitre="6";
            break;
          case '31':
            $lien="https://www.youtube.com/embed/A-UnxpVQCe0";
            $nom_vid="Python OOP|| Class Constructor";
            $chapitre="6";
            break;
          case '32':
            $lien="https://www.youtube.com/embed/2VERE2m-B10";
            $nom_vid="Python OOP|| kwargs";
            $chapitre="6";
            break;
          case '33':
            $lien="https://www.youtube.com/embed/lDXwxyuG450";
            $nom_vid="Python OOP|| Class Inheritance الوراث";
            $chapitre="6";
            break;
          case '34':
            $lien="https://www.youtube.com/embed/YQ4w3DIMgm4";
            $nom_vid="Python OOP|| method Overriding";
            $chapitre="6";
            break;
          case '28':/* Breakpoint  */
            $lien="https://www.youtube.com/embed/ylGj_LUzSwE";
            $nom_vid="Python|| Exceptions اقتناص الاخطا";
            $chapitre="7";
            break;
          case '37':
            $lien="https://www.youtube.com/embed/yzV2WzMiaWI";
            $nom_vid="Python|| Database Sqlite3 قواعد البيانات";
            $chapitre="8";
            break;
          case '38':
            $lien="https://www.youtube.com/embed/RFYDKT1-2m0";
            $nom_vid="Python|| Database Sqlite3 commit";
            $chapitre="8";
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
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_python.php" style="color:white;">Python</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="computer_science_python_thenewbaghdad.php" style="color:white;">Python Tutorials Arabic|| دورة برمجة بايثون</a></li>
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
                          Chapter 1 : Introduction
                        </button>
                      </h2>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=1">&#10170  Why Python مقدمة الدورة</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=2">&#10170  Install python تنصيب بايثون</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=3">&#10170  First python app اول تطبيق بايثون</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=4">&#10170  Python is Objects</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=5">&#10170  Mutable and Immutable Object</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=7">&#10170  Python Comments التعليقات</a><br>
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
                          Chapter 2 : Data Types
                        </button>
                      </h2>
                    </div>
                    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=6">&#10170  Python variables المتغيرات</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=8">&#10170  Python lists and tuples السلاسل</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=9">&#10170  Python Dictionary القاموس</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=10">&#10170  Python Object id المعرف</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=29">&#10170  Python|| Strings السلاسل النصية</a><br>
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
                          Chapter 3 : Procedural Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseThree" class="collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=12">&#10170  Python Math العمليات الرياضية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=13">&#10170  Python Bitwise</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=18">&#10170  Python Debug تتبع التنفيذ</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=26">&#10170  Python|| Functions الدوال</a><br>
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
                           Chapter 4 : Loops
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFour" class="collapse show" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=22">&#10170  Python|| While Loop العبارات التكرارية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=23">&#10170  Python|| iterator For Loop العبارات التكرارية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=24">&#10170  Python|| Nested Loop العبارات التكرارية متداخلة</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=25">&#10170  Python|| Loop Control تحكم بالعبارات التكرارية</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '5':
                  echo '<!-- Détails chapitre 5 -->
                  <div class="card">
                    <div class="card-header" id="headingFive">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                           Chapter 5 : Conditional statements
                        </button>
                      </h2>
                    </div>
                    <div id="collapseFive" class="collapse show" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=11">&#10170  Python Logic بوابات منطقية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=14">&#10170  Python Boolean operations</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=15">&#10170  Python operation priorities</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=19">&#10170  Python|| conditional "IF" العبارات الشرطية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=20">&#10170  Python|| conditional "IF- Else" العبارات الشرطية</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=21">&#10170  Python|| conditional Nested IF العبارات الشرطية</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '6':
                  echo '<!-- Détails chapitre 6 -->
                  <div class="card">
                    <div class="card-header" id="headingSix">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                           Chapter 6 : Object Oriented Programming
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSix" class="collapse show" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=30">&#10170  Python OOP|| Basic Class</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=31">&#10170  Python OOP|| Class Constructor</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=32">&#10170  Python OOP|| kwargs</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=33">&#10170  Python OOP|| Class Inheritance الوراثة</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=34">&#10170  Python OOP|| method Overriding</a><br>

                      </div>
                    </div>
                  </div>';
                  break;
                case '7':
                  echo '<!-- Détails chapitre 7 -->
                  <div class="card">
                    <div class="card-header" id="headingSeven">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="true" aria-controls="collapseSeven">
                           Chapter 7 : Exceptions
                        </button>
                      </h2>
                    </div>
                    <div id="collapseSeven" class="collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=28">&#10170  Python|| Exceptions اقتناص الاخطاء</a><br>
                      </div>
                    </div>
                  </div>';
                  break;
                case '8':
                  echo '<!-- Détails chapitre 8 -->
                  <div class="card">
                    <div class="card-header" id="headingEight">
                      <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="true" aria-controls="collapseEight">
                           Chapter 8 : Databases
                        </button>
                      </h2>
                    </div>
                    <div id="collapseEight" class="collapse show" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="card-body">
                        <a href="actualvideocontent_thenewbaghdad.php?video=37">&#10170  Python|| Database Sqlite3 قواعد البيانات</a><br>
                        <a href="actualvideocontent_thenewbaghdad.php?video=38">&#10170  Python|| Database Sqlite3 commit</a><br>
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
