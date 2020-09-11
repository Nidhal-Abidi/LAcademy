<?php
  		if ( ! (empty($_POST['uid'])|| trim($_POST['uid'])=='') && !(empty($_POST['mail'])|| trim($_POST['mail'])=='') && !(empty($_POST['pwd'])|| trim($_POST['pwd'])=='') && !(empty($_POST['pwd-repeat'])|| trim($_POST['pwd-repeat'])=='') ) {

  				/*Tester si les données sont entrées d'une bonne maniére*/

  			if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/",$_POST['uid'])){
				      header("Location: ../index.php?errorp=invalidmailuid");
				      exit();

			    }else if (!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)){
				      header("Location: ../index.php?errorp=invalidmail&uid=".$_POST['uid']);
				      exit();
			    }
			    else if (! preg_match("/^[a-z A-Z0-9]*$/",$_POST['uid']) ){
				      header("Location: ../index.php?errorp=invaliduid&mail=".$_POST['mail']);
				      exit();

			    }else if( $_POST['pwd'] !== $_POST['pwd-repeat'] ) {
					  header("Location: ../index.php?errorp=passwordcheck&mail=".$_POST['mail']."&uid=".$_POST['uid']);
					  exit();
					 }
				/*Si tout va bient on va connecter au base de données et voir :1/ si le nom d'utilisateur existe deja */
				try{
					$db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
				}
				catch(Exception $err){
					die('Connection Failed :'.$err->getMessage());
				}

				$req=$db->prepare('SELECT uidUsers FROM users WHERE uidUsers=:u');
				$req->execute(array('u'=>$_POST['uid']));

				$i=0;
				while($enreg=$req->fetch() && $i==0){
					$i++;
				}
				$req->closeCursor();
				if ($i!==0){
					header("Location: ../index.php?errorp=usertaken&mail=".$_POST['mail']);
        			exit();
				}else{   /*Aucun uid similaire a celui entré par l'utilisateur dans la BD .Tout va bien*/
					$hashedPwd=password_hash($_POST['pwd'],PASSWORD_DEFAULT);
					$requete = $db->prepare('INSERT INTO users (uidUsers,emailUsers,pwdUsers) VALUES(:u,:e,:p)');
					$requete->execute(array('u' => $_POST['uid'],'e' => $_POST['mail'],'p' =>$hashedPwd ));
					$requete->closeCursor();
          /*Get the id of the last user who's signed up!*/
          $req=$db->prepare('SELECT idUsers FROM users WHERE uidUsers=:u');
  				$req->execute(array('u'=>$_POST['uid']));
          $enreg=$req->fetch() ;
  				$id=$enreg['idUsers'];

          $requete->closeCursor();
          $id= (int)$id;
          /*use the id that you got and put it in the second table "imgupload" so that you can link between the data
          of the person in the two tables */
          $req2=$db->prepare('INSERT INTO imgupload(userid,status) VALUES(:u,:s)');
          $req2->execute(array('u' => $id,'s' => 1));
					header("Location: ../index.php?signup=success");
            		exit();
				}

		}else{
      if((empty($_POST['uid'])|| trim($_POST['uid'])=='') && (empty($_POST['mail'])|| trim($_POST['mail'])=='')){
        header("Location: ../index.php?errorp=emptyfields");
      }elseif(! (empty($_POST['uid'])|| trim($_POST['uid'])=='') && (empty($_POST['mail'])|| trim($_POST['mail'])=='')){
          header("Location: ../index.php?errorp=emptyfields&uid=".$_POST['uid']);
      }elseif( (empty($_POST['uid'])|| trim($_POST['uid'])=='') && ! (empty($_POST['mail'])|| trim($_POST['mail'])=='')){
        header("Location: ../index.php?errorp=emptyfields&mail=".$_POST['mail']);
      }elseif(! (empty($_POST['uid'])|| trim($_POST['uid'])=='') && !(empty($_POST['mail'])|| trim($_POST['mail'])=='')){
        header("Location: ../index.php?errorp=emptyfields&mail=".$_POST['mail']."&uid=".$_POST['uid']);
      }
  			exit();
		}

 ?>
