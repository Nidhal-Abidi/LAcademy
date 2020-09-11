<?php

  if (!(empty($_POST['reset_pwd1'])|| trim($_POST['reset_pwd1'])=='') && !(empty($_POST['reset_pwd2'])|| trim($_POST['reset_pwd2'])=='')){
    if ($_POST['reset_pwd1']===$_POST['reset_pwd2']) {/*passwords match*/
      try{
        $db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
      }
      catch(Exception $err){
        die('Connection Failed :'.$err->getMessage());
      }
      $hashedPwd=password_hash($_POST['reset_pwd1'],PASSWORD_DEFAULT);

      $req=$db->prepare('UPDATE users SET pwdUsers=:p WHERE emailUsers=:u ;');
      $test=$req->execute(array('p'=>$hashedPwd,'u'=>$_GET['email']));

      if($test){header("Location: ../new_pwd_input.php?update=success");
      }else {
        header("Location: ../new_pwd_input.php?error2=queryfailed");
      }


    }else{/*passwords don't match*/
      header("Location: ../new_pwd_input.php?error2=nomatch");
    }

  }elseif ((empty($_POST['reset_pwd1'])|| trim($_POST['reset_pwd1'])=='')){/*the first pwd is empty*/
    header("Location: ../new_pwd_input.php?error2=empty_pwd1");
  }elseif ((empty($_POST['reset_pwd2'])|| trim($_POST['reset_pwd2'])=='')){/*the second pwd is empty*/
    header("Location: ../new_pwd_input.php?error2=empty_pwd2");
  }else {
    header("Location: ../new_pwd_input.php?error2=empty_fields");
  }
 ?>
