<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link rel="stylesheet" href="../styleloggedin.css">
<title>Learn Academy</title>
</head>

 <body>
   <div class="topnav" id="myTopnav">
   <a href="../loggedin.php" class="active">Home</a>
       <?php
       if (isset($_SESSION['userId'])){
         echo '<a href="profile.php" name="profile">Profile</a>
               <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
       }
        ?>
      </div>
 </header>

 <nav aria-label="breadcrumb">
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item" ><a href="../loggedin.php" style="color:white;">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page" style="color:white;">All Courses</li>

  </ol>
</nav>

<div class="java-container">

  <div class="card" >
      <img src="img4.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >C++ - Cours</p>

        <p class="card-text details" >Language : French</p>
        <p class="card-text details" >Tutor : FormationVidéo</p>

      </div>
      <a href="computer_science/c++/description_formationvideo.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_formationvideo.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img5.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Learn C++ Programming | Video Tutorial for Beginners</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : LearningLad </p>
      </div>
      <a href="computer_science/c++/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img6.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">C++ Programming Tutorials</p>
        <p class="card-text details">Language : English</p>
        <p class="card-text details ">Tutor : thenewboston </p>
      </div>
      <a href="computer_science/c++/description_thenewboston.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/c++/computer_science_c++_thenewboston.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img20.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Introduction to Chemical Engineering</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : Stanford</p>

      </div>
      <a href="engineering/chemical/description_stanford.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/chemical/engineering_chemical_stanford.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img21.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Mass transfer</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : lund </p>
      </div>
      <a href="engineering/chemical/description_lund.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/chemical/engineering_chemical_lund.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img14.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">French Lessons B1</p>
        <p class="card-text details" >Language : French & English </p>
        <p class="card-text details" >Tutor : lingoni FRENCH</p>

      </div>
      <a href="language/french/description_lingoni.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/french/language_french_lingoni.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img15.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Learn French with Vincent</p>
        <p class="card-text details" >Language : French</p>
        <p class="card-text details" >Tutor : LEARN FRENCH WITH VINCENT</p>
      </div>
      <a href="language/french/description_vincent.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/french/language_french_vincent.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img1.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Apprendre la programmation avec JAVA</p>

        <p class="card-text details" >Language : French</p>
        <p class="card-text details" >Tutor : Dominique Liard</p>

      </div>
      <a href="computer_science/java/description_dominique.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_dominique.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img2.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Learn Java Programming | Video Tutorial for Beginners</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : LearningLad </p>
      </div>
      <a href="computer_science/java/description_learninglad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_learninglad.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img3.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Java Programs For Practice</p>
        <p class="card-text details">Language : English</p>
        <p class="card-text details ">Tutor : Alex Lee </p>
      </div>
      <a href="computer_science/java/description_alexlee.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/java/computer_science_java_alexlee.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img18.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >MIT 16.885J Aircraft Systems Engineering, Fall 2005</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : MIT OpenCourseWare</p>

      </div>
      <a href="engineering/aerospace/description_mit.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/aerospace/engineering_aerospace_mit.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img19.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Aerospace-Introduction to Helicopter Aerodynamics & Dynamics</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : nptelhrd </p>
      </div>
      <a href="engineering/aerospace/description_nptelhrd.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/aerospace/engineering_aerospace_nptelhrd.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img9.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Arabic Language for Beginners</p>

        <p class="card-text details" >Language : English & Arabic</p>
        <p class="card-text details" >Tutor : Arabic Khatawaat</p>

      </div>
      <a href="language/arabic/description_khatawaat1.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/arabic/language_arabic_arabic_khatawaat1.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img16.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Computer Science Crash Course</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : CrashCourse</p>

      </div>
      <a href="engineering/software/description_crashcourse.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_crashcourse.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img17.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Computer Science and Software Engineering Theory with Briana</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : freeCodeCamp.org </p>
      </div>
      <a href="engineering/software/description_freecodecamp.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="engineering/software/engineering_software_freecodecamp.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img12.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">Learn English with Jennifer: Lessons for Beginners</p>

        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : JenniferESL</p>

      </div>
      <a href="language/english/description_jenniferesl.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/english/language_english_jenniferesl.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img13.jpg" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text">IELTS lessons</p>
        <p class="card-text details" >Language : English</p>
        <p class="card-text details" >Tutor : Learn English with Emma [engVid] </p>
      </div>
      <a href="language/english/description_emma.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="language/english/language_english_emma.php" class="btn btn-primary">View Course !</a>
  </div>
  <div class="card" >
      <img src="img7.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Python Tutorial for Beginners</p>

        <p class="card-text details">Language : English</p>
        <p class="card-text details">Tutor : Telusko</p>

      </div>
      <a href="computer_science/python/description_telusko.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_telusko.php" class="btn btn-primary">View Course !</a>
  </div>

  <div class="card" >
      <img src="img8.png" class="card-img-top" alt="..." >
      <div class="card-body">
        <p class="card-text" >Python Tutorials Arabic|| دورة برمجة بايثون</p>

        <p class="card-text details" >Language : Arabic</p>
        <p class="card-text details" >Tutor : TheNewBaghdad </p>
      </div>
      <a href="computer_science/python/description_thenewbaghdad.php" class="btn btn-primary" target="_blank">View Description !</a><br>
      <a href="computer_science/python/computer_science_python_thenewbaghdad.php" class="btn btn-primary">View Course !</a>
  </div>
</div>
