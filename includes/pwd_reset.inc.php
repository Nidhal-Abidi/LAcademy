<?php

  if (!(empty($_POST['reset_pwd_email'])|| trim($_POST['reset_pwd_email'])=='')){
    try{
      $db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $err){
      die('Connection Failed :'.$err->getMessage());
    }

    $req=$db->prepare('SELECT * FROM users WHERE emailUsers=:e');
    $req->execute(array('e'=>$_POST['reset_pwd_email']));
    if($enreg=$req->fetch()){/*we found the info about the given  email*/
        header("Location: ../new_pwd_input.php?email=".$_POST['reset_pwd_email']);
    }else {/*No info about the given  email meaning the written email doesn't exist*/
        header("Location: ../mail_input.php?error1=nomail");
    }
  }else {
    header("Location: ../mail_input.php?error1=empty_field");
  }

 ?>
