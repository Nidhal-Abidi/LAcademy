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
 <link rel="stylesheet" href="styleprofile.css">


 <title>Learn Academy</title>
 </head>
  <body>
    <div class="topnav" id="myTopnav">
    <a href="../loggedin.php" class="active">Home</a>
        <?php
        if (isset($_SESSION['userId'])){
          echo '<a href="../loggedin/profile.php" name="profile">Profile</a>
                <a href="../includes/logout.inc.php" name="logout-submit">SIGN OUT</a>';
        }
         ?>
       </div>
  </header>
  <?php
  try{
    $db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $err){
    die('Connection Failed :'.$err->getMessage());
  }

  $req=$db->prepare('SELECT * FROM users WHERE emailUsers=:e');
  $req->execute(array('e'=>$_SESSION['userEmail']));
  if($enreg=$req->fetch()){/*If we find the person with the login email*/
    $id=$enreg['idUsers'];
    $req2=$db->query("SELECT * FROM imgupload WHERE userid='$id'");
    while($rowImg=$req2->fetch()){
      echo '<div class="wrapper">
      <div class="profile-card js-profile-card">
          <div class="profile-card__img">';
      if ($rowImg['status']==0){
        echo "<img src='../uploads/profile".$id.".jpg?".mt_rand()."' alt='profile pic'>";
      }else{
        echo "<img src='../uploads/profiledefault.jpg' alt='default profile pic'>";
      }
      echo '</div>';
    }
  }
   ?>
   <div class="profile-card__cnt js-profile-cnt">
        <div class="profile-card__name"><?php echo isset($_SESSION['userUid']) ? $_SESSION['userUid']: '';?></div>
        <div class="profile-card__txt"><strong>ID: </strong><?php echo isset($_SESSION['userId']) ? $_SESSION['userId'] : '';?></div>
        <div class="profile-card__txt"><strong>Email: </strong><?php echo isset($_SESSION['userEmail']) ? $_SESSION['userEmail'] : '';?></div>

    <form  action="upload.php" method="post" enctype="multipart/form-data">
      <input type="file" name="file" class="btn" style="border-radius: 20px;
          border: 1px solid #7971ea;
          background-color: #7971ea;
          color: #FFFFFF;
          font-size: 12px;
          font-weight: bold;
          padding: 12px 45px;
          letter-spacing: 1px;
          text-transform: uppercase;
          transition: transform 80ms ease-in;">
      <button type="submit" name="submit" class="btn" style="border-radius: 20px;
          border: 1px solid #7971ea;
          background-color: #7971ea;
          color: #FFFFFF;
          font-size: 12px;
          font-weight: bold;
          padding: 12px 45px;
          letter-spacing: 1px;
          text-transform: uppercase;
          transition: transform 80ms ease-in;">Update profile picture</button>
    </form>
    <?php
    if (isset($_GET['upload'])){
      echo '<div class="alert alert-success" role="alert">Profile picture updated !</div>';
    }else if (isset($_GET['error'])){
      if ($_GET['error']=='bigfile'){
        echo '<div class="alert alert-danger" role="alert">The picture is too big !</div>';
      }elseif($_GET['error']=='uploaderror'){
        echo '<div class="alert alert-danger" role="alert">An error occured when uploading the image please try again !</div>';
      }elseif ($_GET['error']=='unlistedtype'){
        echo '<div class="alert alert-danger" role="alert">We don\'t accept this extension !</div>';
      }
    }
     ?>
  </center>

<?php require "../footer.php"; ?>
