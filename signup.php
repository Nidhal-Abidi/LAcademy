<?php
  require "header.php" ;
 ?>

     <main>
        <h1>Signup</h1>
        <?php
        if (isset($_GET['error'])){
          if ($_GET['error']=="emptyfields"){
            echo '<div class="alert alert-danger" role="alert">Fill in all fields !</div>';
          }else if ($_GET['error']=="invalidmailuid"){
            echo '<div class="alert alert-danger" role="alert">Invalid username and e-mail !</div>';
          }else if ($_GET['error']=="invaliduid"){
            echo '<div class="alert alert-danger" role="alert">Invalid username !</div>';
          }else if ($_GET['error']=="invalidmail"){
            echo '<div class="alert alert-danger" role="alert">Invalid e-mail !</div>';
          }else if ($_GET['error']=="passwordcheck"){
            echo '<div class="alert alert-danger" role="alert">Your passwords do not match !</div>';
          }else if ($_GET['error']=="usertaken"){
            echo '<div class="alert alert-danger" role="alert">Username is already taken !</div>';
          }
        }elseif (isset($_GET['signup']) ) {
          if ($_GET['signup']=="success")
            echo '<div class="alert alert-success" role="alert">Signup Successful !</div>';
        }
         ?>
        <form action="includes/signup1.inc.php" method="post">
          <table>
            <tr>
              <th style="text-align: left;">Username </th>
              <td><input type="text" name="uid" placeholder="Username"
                value="<?php if (isset($_GET['error'])){
                  if ($_GET['error']=="invalidmail" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                    echo  isset($_GET['uid']) ? $_GET['uid']:'';
                  }else {
                    echo '';
                  }
                }  ?>" ></td>
            </tr>
            <tr>
              <th style="text-align: left;">E-mail</th>
              <td><input type="text" name="mail" placeholder="E-mail"
                value="<?php if (isset($_GET['error'])){
                if ($_GET['error']=="invaliduid" || $_GET['error']=="passwordcheck" || $_GET['error']=="emptyfields"){
                  echo  isset($_GET['mail']) ? $_GET['mail']:'';
                }else {
                  echo '';
                }
              }  ?>"></td>
            </tr>
            <tr>
              <th style="text-align: left;">Password</th>
              <td><input type="password" name="pwd" placeholder="Password"></td>
            </tr>
            <tr>
              <th style="text-align: left;">Repeat Password</th>
              <td><input type="password" name="pwd-repeat" placeholder="Repeat Password"></td>
            </tr>
          </table>
          <br>
          <button style="border-radius: 12px;padding:11px 16px;font-weight:bolder;margin-left:250px" type="submit" name="signup-submit">Signup</button>
        </form>
     </main>

 <?php
  require "footer.php";
  ?>
