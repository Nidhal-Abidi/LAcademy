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

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../../../loggedin.php" style="color:white;font-size:bold;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science.php" style="color:white;">Computer Science</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="../../computer_science_python.php" style="color:white;">Python</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">Python Tutorials Arabic|| دورة برمجة بايثون</li>

  </ol>
</nav>
<!-- the actual content of this course ( Python Tutorials Arabic|| دورة برمجة بايثون )
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
        <a href="actualvideocontent_thenewbaghdad.php?video=1">&#10170  Why Python مقدمة الدورة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=2">&#10170  Install python تنصيب بايثون</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=3">&#10170  First python app اول تطبيق بايثون</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=4">&#10170  Python is Objects</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=5">&#10170  Mutable and Immutable Object</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=7">&#10170  Python Comments التعليقات</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 2 -->
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Chapter 2 : Data Types
        </button>
      </h2>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=6">&#10170  Python variables المتغيرات</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=8">&#10170  Python lists and tuples السلاسل</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=9">&#10170  Python Dictionary القاموس</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=10">&#10170  Python Object id المعرف</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=29">&#10170  Python|| Strings السلاسل النصية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 3 -->
  <div class="card">
    <div class="card-header" id="headingThree">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Chapter 3 : Procedural Programming
        </button>
      </h2>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=12">&#10170  Python Math العمليات الرياضية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=13">&#10170  Python Bitwise</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=18">&#10170  Python Debug تتبع التنفيذ</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=26">&#10170  Python|| Functions الدوال</a><br>
        </div>
    </div>
  </div>
  <!-- Détails chapitre 4 -->
  <div class="card">
    <div class="card-header" id="headingFour">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
           Chapter 4 : Loops
        </button>
      </h2>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=22">&#10170  Python|| While Loop العبارات التكرارية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=23">&#10170  Python|| iterator For Loop العبارات التكرارية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=24">&#10170  Python|| Nested Loop العبارات التكرارية متداخلة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=25">&#10170  Python|| Loop Control تحكم بالعبارات التكرارية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 5 -->
  <div class="card">
    <div class="card-header" id="headingFive">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
           Chapter 5 : Conditional statements
        </button>
      </h2>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=11">&#10170  Python Logic بوابات منطقية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=14">&#10170  Python Boolean operations</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=15">&#10170  Python operation priorities</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=19">&#10170  Python|| conditional "IF" العبارات الشرطية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=20">&#10170  Python|| conditional "IF- Else" العبارات الشرطية</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=21">&#10170  Python|| conditional Nested IF العبارات الشرطية</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 6 -->
  <div class="card">
    <div class="card-header" id="headingSix">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
           Chapter 6 : Object Oriented Programming
        </button>
      </h2>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=30">&#10170  Python OOP|| Basic Class</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=31">&#10170  Python OOP|| Class Constructor</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=32">&#10170  Python OOP|| kwargs</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=33">&#10170  Python OOP|| Class Inheritance الوراثة</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=34">&#10170  Python OOP|| method Overriding</a><br>

      </div>
    </div>
  </div>
  <!-- Détails chapitre 7 -->
  <div class="card">
    <div class="card-header" id="headingSeven">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
           Chapter 7 : Exceptions
        </button>
      </h2>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=28">&#10170  Python|| Exceptions اقتناص الاخطاء</a><br>
      </div>
    </div>
  </div>
  <!-- Détails chapitre 8 -->
  <div class="card">
    <div class="card-header" id="headingEight">
      <h2 class="mb-0">
        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
           Chapter 8 : Databases
        </button>
      </h2>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
      <div class="card-body">
        <a href="actualvideocontent_thenewbaghdad.php?video=37">&#10170  Python|| Database Sqlite3 قواعد البيانات</a><br>
        <a href="actualvideocontent_thenewbaghdad.php?video=38">&#10170  Python|| Database Sqlite3 commit</a><br>
      </div>
    </div>
  </div>


</div>

<?php require "../../../footer.php" ?>
