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
    <title>Register</title>
   
  </head>
  <body>
   
    <h2>Register</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Name</label>
      <input required type="text" id="name" value=""> <br>
      <label for="">Email</label>
      <input type="email" id="username" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required><br>
      <label for="">Password</label>
      <input required type="password" id="password" name="password" > <br>
      <label for="">Confirm Password</label>
      <input required type="password" id="confirmpassword" name="confirmpassword" > <br>
      <button type="button" onclick="submitData();">Register</button>
    </form>
    <br>
    <a href="login.php">Go To Login</a>
    <?php require 'script.php'; ?>
  </body>
</html>




