<?php
session_start();
if (isset($_SESSION['user_id'])){
  header("location:dashboard.php");
}
if (isset($_POST['submit'])){

  $username=$_POST["username"];
  $email=$_POST['email'];
  $password=$_POST['password'];
  include"./oop/dbh_class.php";
  include"./oop/sign_up_classes.php";
  
 $signUp=new signUp();
 $signUp->setUser($username, $email, $password);

} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/style.css">
  <title>Signup Form</title>
</head>
<body>
  <div class="signup-container">
    <h2>Sign Up</h2>
    <form class="signup-form" action="sign_up.php" method="POST">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit" name="submit" class="submit">Sign Up</button>
      <a href="index.php">Login</a>

    </form>
  </div>
</body>
</html>
