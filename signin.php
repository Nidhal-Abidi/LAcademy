<?php
  require "header.php";
  ?>
  <main>
    <h1>Signin</h1>
    <?php
    if (isset($_GET['error'])){
      if ($_GET['error']=="emptyfields"){
        echo '<div class="alert alert-danger" role="alert">Fill in all fields !</div>';
      }else if ($_GET['error']=="wrongpwd"){
        echo '<div class="alert alert-danger" role="alert">Wrong password!</div>';
      }else if ($_GET['error']=="nomatch"){
        echo '<div class="alert alert-danger" role="alert">There\'s no match for your email !</div>';

    }elseif (isset($_GET['login']) ) {
      if ($_GET['signup']=="success")
        echo '<div class="alert alert-success" role="alert">Sign in Successful !</div>';
    }
}?>
  <form action="includes/login.inc.php" method="post">
    <table>
      <tr>
        <td>E-mail</td>
        <td><input type="email" name="mailuid" placeholder="Username/E-mail"
          value="<?php if (isset($_GET['error'])){
                          if ($_GET['error']=="wrongpwd" || $_GET['error']=="emptyfields"){
                                echo  isset($_GET['mail'])?$_GET['mail']:'';
                          }else {
                                echo '';
                               }
      }  ?>"></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><input  type="password" name="pwd" placeholder="password"></td>
      </tr>
      <tr>
        <td><button style="border-radius: 12px;padding:11px 16px;font-weight:bolder" type="submit" name="login-submit">Sign In</button></td>
      </tr>
    </table>
  </form>



</main>
<?php require "footer.php";
?>
