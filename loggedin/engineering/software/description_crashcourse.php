<?php
  session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAcademy </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- links for the navbar that i've made  -->
    <link rel="stylesheet" href="../../../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../styleloggedin.css">
    <!-- End of the links for the navbar that i've made  -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet"> -->
    <link rel="stylesheet" href="../../../fonts/icomoon/style.css">
    <link rel="stylesheet" href="../../../css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../css/jquery-ui.css">
    <link rel="stylesheet" href="../../../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/owl.theme.default.min.css">
    <link rel="stylesheet" href="../../../css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="../../../css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="../../../fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="../../../css/aos.css">
    <link rel="stylesheet" href="../../../css/style.css">

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar  js-sticky-header site-navbar-target" role="banner">
      <div class="topnav" id="myTopnav">
      <a href="../../../loggedin.php" class="active">Home</a>
          <?php
          if (isset($_SESSION['userId'])){
            echo '<a href="../../../loggedin/profile.php" name="profile">Profile</a>
                  <a href="../../../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
          }
           ?>
         </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 text-white" style="background-image: url('../../../images/course15.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Computer Science Crash Course</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white">8 Lessons / 6 Week &bullet; 600 students &bullet; <a href="#" class="text-white">2 comments</a></p>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-5">

            <div class="mb-5">
              <h3 class="text-black">Course Description</h3>
              <p>In 40 episodes, Carrie Anne Philbin teaches you computer science! This course is based on
                introductory college-level material as well as the AP Computer Science Principles guidelines.
                By the end of this course, you will be able to:
                *Outline the history of computers and the design decisions that gave us modern computers
                *Describe the basic elements of programming and software
                *Identify the basic components of computer hardware and what they do
                *Describe how computers are used and how that has evolved over time
                *Appreciate how far computers have come and how far they might take us.</p>
            </div>

            <div class="pt-5">
              <h3 class="mb-5">2 Comments</h3>
              <ul class="comment-list">

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment2.jpg" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Samia Khiari</h3>
                    <div class="meta">Mai 2, 2020 at 7:00pm</div>
                    <p>Thank you , I'm jsut starting out to learn about computer science stuff!</p>
                  </div>
                </li>

                <li class="comment">

                  <div class="vcard bio">
                    <img src="../../../images/comment1.jpg" alt="Image placeholder">
                  </div>

                  <div class="comment-body">
                    <h3>Nidhal Abidi</h3>
                    <div class="meta">January 17, 2020 at 5:40am</div>
                    <p>Good content with a lot of details!</p>
                  </div>

                </li>
              </ul>
              <!-- END comment-list -->
            </div>

          </div>

          <div class="col-lg-4 pl-lg-5">
            <div class="mb-5 text-center border rounded course-instructor">
              <h3 class="mb-5 text-black text-uppercase h6 border-bottom pb-3">Course Instructor</h3>
              <div class="mb-4 text-center">
                <img src="../../../images/crashcourse.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                <h3 class="h5 text-black mb-4">CrashCourse</h3>
                  <p>At Crash Course, we believe that high quality educational videos should be available to
                    everyone for free!
                    Subscribe for weekly videos from our current courses! Right now, we're producing Organic
                    Chemistry and European History. We also recently teamed up with Arizona State University to
                    bring you two more courses: Study Hall Composition, and Study Hall Algebra.
                    The Crash Course team has produced more than 32 courses on a wide variety of subjects,
                    including organic chemistry, literature, world history, biology, philosophy, theater,
                    ecology, and many more!
                    Help support Crash Course at Patreon.com/CrashCourse..</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <footer class="footer-section bg-light">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About LAcademy</h3>
            <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
          </div>

          <div class="col-md-4">
            <h3>Subscribe</h3>
            <p>Keep yourself up to date and receive all kind of news about LAcademy.</p>
            <form action="https://mailchi.mp/064deb47eeaa/lacdemy" target="_blank" class="footer-subscribe">
              <div class="d-flex mb-5">

                <input type="submit" class="btn btn-primary rounded-0" value="Subscribe">
              </div>
            </form>
          </div>

        </div>

        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>



  </div> <!-- .site-wrap -->

  <script src="../../../js/jquery-3.3.1.min.js"></script>
  <script src="../../../js/jquery-migrate-3.0.1.min.js"></script>
  <script src="../../../js/jquery-ui.js"></script>
  <script src="../../../js/popper.min.js"></script>
  <script src="../../../js/bootstrap.min.js"></script>
  <script src="../../../js/owl.carousel.min.js"></script>
  <script src="../../../js/jquery.stellar.min.js"></script>
  <script src="../../../js/jquery.countdown.min.js"></script>
  <script src="../../../js/bootstrap-datepicker.min.js"></script>
  <script src="../../../js/jquery.easing.1.3.js"></script>
  <script src="../../../js/aos.js"></script>
  <script src="../../../js/jquery.fancybox.min.js"></script>
  <script src="../../../js/jquery.sticky.js"></script>


  <script src="../../../js/main.js"></script>

  </body>
</html>
