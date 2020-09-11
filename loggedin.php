<?php
  require "header.php" ;
?>

<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:linear-gradient(to right,rgba(100,150,150, 1),rgba(150, 150, 150, 1))">
    <li class="breadcrumb-item active" aria-current="page"
    style="color:white;">Home</li>
  </ol>
</nav>

	<div class="card-container">
		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Computer science</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
			    	<li><a class="card-text" href="loggedin/computer_science_java.php">Java</a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_c++.php">C++ </a><br></li>
			    	<li><a class="card-text" href="loggedin/computer_science_python.php">Python</a></li>
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Language</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/language_arabic.php">Arabic</a><br></li>
	    			<li><a class="card-text" href="loggedin/language_english.php">English </a><br></li>
	    			<li><a class="card-text" href="loggedin/language_french.php">French</a></li>
	    		</ul>
	  		</div>
		</div>

		<div class="card bg-light mb-3" style="max-width: 18rem;">
	  		<div class="card-header">Engineering</div>
	  		<div class="card-body">
	    		<ul style="list-style-type:circle">
	    			<li><a class="card-text" href="loggedin/engineering_software.php">Software Engineering</a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering_aerospace.php">Aerospace Engineering </a><br></li>
	    			<li><a class="card-text" href="loggedin/engineering_chemical.php">Chemical Engineering</a></li>
	    		</ul>
	  		</div>
		</div>

	</div>
	<center>
		<a href="loggedin/all_courses.php" class="mybtn2">Browse All Online Courses</a>
	</center>



  <?php
  require "footer.php";
   ?>
