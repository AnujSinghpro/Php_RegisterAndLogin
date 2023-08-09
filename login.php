<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <h2>Login</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Email</label>
      <input type="text" id="username" name="email" value="" required> <br>
      <label for="">Password</label>
      <input type="password" id="password"  name="password" value="" required> <br>
      <label for="">Confirm Password</label>
      <input required type="password" id="confirmpassword" name="confirmpassword" > <br>
      <button type="button" onclick="submitData();">Login</button>
    </form>
    <br>
    <a href="register.php">Go To Register</a>
    <?php require 'script.php'; ?>
  </body>
</html>
