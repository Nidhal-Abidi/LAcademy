<?php
	if (!(empty($_POST['mailuid'])|| trim($_POST['mailuid'])=='')&& !(empty($_POST['pwd'])||trim($_POST['pwd'])=='')){

    try{
      $db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }
    catch(Exception $err){
      die('Connection Failed :'.$err->getMessage());
    }
     $req=$db->prepare('SELECT * FROM users WHERE uidUsers=:u OR emailUsers=:e');
     $req->execute(array('u'=>$_POST['mailuid'],'e'=>$_POST['mailuid']));

     if($enreg=$req->fetch()){/*we found the info about the given uid or email*/
       $pwdCheck=password_verify($_POST['pwd'],$enreg['pwdUsers']);
       if ($pwdCheck== false ){/*Wrong password*/
         header("Location: ../index.php?error=wrongpwd&mail=".$_POST['mailuid']);
         exit();
       }elseif ($pwdCheck== true){/*Login successful*/
          session_start();
          $_SESSION['userId']=$enreg['idUsers'];
          $_SESSION['userUid']=$enreg['uidUsers'];
					$_SESSION['userEmail']=$enreg['emailUsers'];
          header("Location: ../loggedin.php?login=success");
          exit();
       }
     }else{/*There's no match to the username or email*/
       header("Location: ../index.php?error=nomatch");
       exit();
     }


  }else{
		if (!(empty($_POST['mailuid'])|| trim($_POST['mailuid'])=='')) {
			header("Location: ../index.php?error=emptyfields&mail=".$_POST['mailuid']);
		}else{
			header("Location: ../index.php?error=emptyfields");
		}

    exit();
  }
 ?>
