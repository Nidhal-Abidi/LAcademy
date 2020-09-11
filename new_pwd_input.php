<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAcademy</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">

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


    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container-fluid">
        <div class="d-flex align-items-center">
          <div class="site-logo mr-auto w-25"><a href="index.php">LAcademy</a></div>

          <div class="mx-auto text-center">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu js-clone-nav mx-auto d-none d-lg-block  m-0 p-0">
                <li><a href="index.php#home-section" class="nav-link">Home</a></li>
                <li><a href="index.php#courses-section" class="nav-link">Courses</a></li>
                <li><a href="index.php#programs-section" class="nav-link">Programs</a></li>
                <li><a href="index.php#teachers-section" class="nav-link">Teachers</a></li>
              </ul>
            </nav>
          </div>

          <div class="ml-auto w-25">
            <nav class="site-navigation position-relative text-right" role="navigation">
              <ul class="site-menu main-menu site-menu-dark js-clone-nav mr-auto d-none d-lg-block m-0 p-0">
                <li class="cta"><a href="#contact-section" class="nav-link"><span>Contact Us</span></a></li>
              </ul>
            </nav>
            <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a>
          </div>
        </div>
      </div>

    </header>

    <div class="intro-section single-cover" id="home-section">

      <div class="slide-1 " style="background-image: url('images/pwd_reset.jpg');" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="row justify-content-center align-items-center text-center">
                <div class="col-lg-6">
                  <h1 data-aos="fade-up" data-aos-delay="0" style="Color:white;">Resetting password !</h1>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
<div class="site-section bg-light" id="contact-section">
      <div class="container">

        <div class="row justify-content-center">
          <div class="col-md-7">

            <h2 class="section-title mb-3">Enter your new Password!</h2>
            <!-- Beginning of the php for the contact form -->
                                     <!-- End of the php for the contact form -->
            <?php
            if (!(empty($_GET['email'])|| trim($_GET['email'])=='')){
              $action="includes/pwd_update.inc.php"."?email=".$_GET['email'];
            } else {$action="includes/pwd_update.inc.php"."?email=error";}
             ?>
            <form method="post" action="<?php echo $action; ?>" data-aos="fade" id="new_pwd_input_form" class="aos-init">

              <div class="form-group row">
                <div class="col-md-12">
                  <?php  if(isset($_GET['error2'])){
                    if ($_GET['error2']=='empty_pwd1'){
                      echo '<div style="color:red;">You need to input your new password!</div>';
                    }
                    if ($_GET['error2']=='nomatch'){
                      echo '<div style="color:red;">Passwords don\'t match!</div>';
                    }
                    if ($_GET['error2']=='queryfailed'){
                      echo '<div style="color:red;">Password update failed please try again!</div>';
                    }
                    if(isset($_GET['error2'])){
                      if ($_GET['error2']=='empty_pwd2'){
                        echo '<div style="color:red;">You need to rewrite your new password!</div>';
                      }
                    }
                  }
                  if (isset($_GET['update'])) {
                    if ($_GET['update']=='success'){
                      echo '<div style="color:green;">Password Update Successful!</div>';
                    }
                  }
                  ?>
                  <div id="error_reset_pwd1"></div>
                  <input type="password" id="reset_pwd1" name="reset_pwd1" class="form-control" placeholder="Type your new password" value="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-12">
                  <div id="error_reset_pwd2"></div>
                  <input type="password" id="reset_pwd2" name="reset_pwd2" class="form-control" placeholder="Repeat your new password" value="">
                </div>
              </div>

              <div class="form-group row">
                <div class="col-md-6">
                  <input type="submit" name="submit" class="btn btn-primary py-3 px-5 btn-block btn-pill" value="Send">
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer-section bg-white">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h3>About LAcademy</h3>
            <p>An E-Learning platform rich of resources, We make learning easy and simple for Everyone.</p>
          </div>

          <div class="col-md-3 ml-auto">
            <h3>Links</h3>
            <ul class="list-unstyled footer-links">
              <li><a href="index.php#home-section" class="nav-link">Home</a></li>
              <li><a href="index.php#courses-section" class="nav-link">Courses</a></li>
              <li><a href="index.php#programs-section" class="nav-link">Programs</a></li>
              <li><a href="index.php#teachers-section" class="nav-link">Teachers</a></li>
            </ul>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved
        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
      </p>
            </div>
          </div>

        </div>
      </div>
    </footer>
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  <script src="js/validation2.js"></script>
  <script src="js/main.js"></script>

  </body>
</html>
