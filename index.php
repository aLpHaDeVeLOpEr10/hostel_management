<?php
session_start();
if (isset($_SESSION['user_id'])){
  header("location:dashboard.php");
}
if (isset($_POST['submit'])){
  $username=$_POST["username"];
  $password=$_POST['password'];
  include"./oop/dbh_class.php";
  include"./oop/login_class.php";
  $user = new User(); 
  $loggedInUser = $user->loginUser(  $username,   $password);
  if ($loggedInUser) {
    header("Location: dashboard.php");
      //echo "Login successful. Welcome, " . $loggedInUser['username'];
  } else {
    header("Location: index.php?LoginFailed");
      //echo "Login failed.";
  }
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <title>Login Form</title>
</head>
<body>
  <div class="login-container">
    <?php if (isset($_SESSION['msg'])){
?>
<div id="message" style="position:absolute;margin-top:-33px; color:green;"><h3>Sign Up Sucess</h3></div>
<?php }
unset($_SESSION['msg']);
?>
    <h2>Login</h2>
    <form class="login-form" method="POST" action="index.php">
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>
      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>
      <input type="submit" name="submit" value="Login" class="submit">
      <a href="sign_up.php">Sign UP</a>
    </form>
  </div>
</body>
<script>$(document).ready(function() {
    // Wait for 2 seconds and then remove the message
    setTimeout(function() {
        $('#message').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 2000); // 2000 milliseconds = 2 seconds
});
</script>
</html>
