<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Set Password</title>
  </head>
  <body>
<?php
if(isset($_POST['submit'])) {
  $password = $_POST['password'];
  echo "Text password: " . $password . "<br>";

  // Encryption Example
  $hashed_password = password_hash($password, PASSWORD_BCRYPT);
  echo "Hashed password: " . $hashed_password . "<br>";
  echo "<br>";

  // Verification Example
  $wrong_password = "anything_else";
  $is_match = password_verify($wrong_password, $hashed_password);
  echo "Attempt 1: " . ($is_match ? 'correct':'wrong') . "<br>";

  $is_match = password_verify($password, $hashed_password);
  echo "Attempt 2: " . ($is_match ? 'correct':'wrong') . "<br>";
  echo "<br>";
  echo "<hr>";
}
 ?>

  <p>Set your new password</p>
  <form action="auth.php" method="post" accept-charset="utf-8">
    Password: <input type="password" name="password" value=""><br>
    <br>
    <input type="submit" name="submit" value="Set password">
  </form>


  </body>
</html>
