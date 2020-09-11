<?php
  session_start();
  try{
    $db=new PDO('mysql:host=localhost;dbname=loginsystemtut;charset=utf8','root','',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  }
  catch(Exception $err){
    die('Connection Failed :'.$err->getMessage());
  }
    $id=$_SESSION['userId'];
    if (isset($_POST['submit'])) {/*Enter only if the user uploaded
      a file */
      $file = $_FILES['file'];
      $fileName = $_FILES['file']['name'];
      $fileTmpName = $_FILES['file']['tmp_name'];
      $fileSize = $_FILES['file']['size'];
      $fileError = $_FILES['file']['error'];
      $fileType = $_FILES['file']['type'];

      $fileExt= explode('.',$fileName);
      $fileActualExt= strtolower(end($fileExt));/*Extension
      of the uploaded file by the user has been extracted*/

      $allowed=array('jpg','jpeg','png');/*All the allowed extensions that
      the user can upload in the website */
      if (in_array($fileActualExt,$allowed)) {
        /*Valid extension */
        if ($fileError === 0) {
          if($fileSize < 1000000){/*The file has a valid size
            Time to upload the file !!*/
            $fileNameNew = "profile".$id.'.'.$fileActualExt;/*Generate a unique name
            so that it doesn't get overwritten when we upload another file
            with the same name */
            $fileDestination='../uploads/'.$fileNameNew;
            move_uploaded_file($fileTmpName,$fileDestination);/*Moving the file
            from the temporary location to the specified location */
            $req=$db->prepare('UPDATE imgupload SET status=0 WHERE userid=:id');
            $req->execute(array('id'=>$id));
            $req->closeCursor();
            header("Location: profile.php?upload=success");
          }else{
            echo 'Your file is too big !';
            header("Location: profile.php?error=bigfile");
          }
        }else{
          echo 'There was an error upolading this file !';
          header("Location: profile.php?error=uploaderror");
        }
      }else{
        /*He uploaded an unlisted extension !*/
        echo "You can't upload files of this type !";
        header("Location: profile.php?error=unlistedtype");
      }
    }
 ?>
