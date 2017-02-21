<?php include "../includes/top.php" ?>

<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pwConfirm = $_POST['password-confirm'];
    $email = $_POST['email'];
    if($password != $pwConfirm) {
      echo "<script>alert('Passwords Don\\'t Math!')</script>";
      header("Location: register.php");
    }
    $hashed_password = password_hash($password, PASSWORD_BCRYPT);
    DB::CreateUser($username, $hashed_password, $email);
    // TODO redirect to proper location after building pages
    header("Location: register.php")
}
?>
<div class="container main-content login-form">
  <form action="register.php" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Your Fredonia e-service username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" placeholder="8 Characters or More" minlength="8">
    </div>
    <div class="form-group">
      <label for="password-confirm">Password Confirm</label>
      <input type="password" class="form-control" id="password-confirm" placeholder="Retype the password again" minlength="8">
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" id="email" class="form-control" placeholder="Fredonia Email Address">
    </div>
    <input type="submit" name="submit" class="btn btn-info register-button" value="Register"></button>
  </form>
</div>

<?php include "../includes/bottom.php" ?>
