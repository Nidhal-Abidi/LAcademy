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

      <div class="slide-1 text-white" style="background-image: url('../../../images/course12.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" class="text-white">Learn French with Vincent</h1>
                  <p data-aos="fade-up" data-aos-delay="100" class="text-white">1 Lessons / 2 Week &bullet; 250 students &bullet; <a href="#" class="text-white">2 comments</a></p>
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
              <p>Learn French with Vincent
                French for beginners, France, Free French lesson, French lesson, Learn French, French words,
                Pronounce French, French course, French video lesson, French for intermediate, French for advanced,
                French verbs, French grammar, Сазнајте Француски, Französisch lernen, 学习法语，學習法語，프랑스어 배우기,
                Aprender el francés, למד צרפתית , Apprendre le français, Μάθετε γαλλικά, जानें फ्रांसीसी, Belajar bahasa
                Perancis, Fransızca öğren, تعلم اللغة الفرنسية, Aprenda Francês</p>
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
                    <p>Thank you , I'm jsut starting out to learn French!</p>
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
                <img src="../../../images/vincent.jpg" alt="Image" class="w-25 rounded-circle mb-4">
                <h3 class="h5 text-black mb-4">LEARN FRENCH WITH VINCENT</h3>
                <p>I have been teaching French for more than 20 years now. My mother tongue is French but I
                  am fluent in 3 languages and we are using on a daily basis 2 languages at home... French
                  and English.
                  I started this channel in 2007 with the conviction that video was a great tool to teach
                  French as a foreign language and since then... I never stopped producing videos or believing
                  in the power of videos to help you to master French.
                  In 2016 I created a platform www.french4me.net to really give you all the proper tools
                  you need to master French.
                  I produced more than 200 000 videos and they have been watched by millions of people around
                  the world. The videos have helped people to realize their dreams: being able to talk in
                  French with friends, members of their families, being able to relocate in a French speaking
                  country, being able to get closer to the person they love and want to share their lives
                  with... many beautiful stories and many thanks from all these persons.</p>
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
