<?php include "../includes/top.php" ?>
<?php include "../db.php" ?>

<?php
if(isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $pwConfirm = $_POST['password-confirm'];
    $email = $_POST['email'];

    if($password !== $pwConfirm) {
      $GLOBALS['isConfirmed'] = false;
    }
    else {
      $GLOBALS['isConfirmed'] = true;
      $hashed_password = password_hash($password, PASSWORD_BCRYPT);
      DB::CreateUser($username, $hashed_password, $email);
      // TODO redirect to proper location after building pages
      header("Location: login.php");

    }
}

?>
<div class="container main-content login-form">
  <form action="register.php" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Your Fredonia e-service username" required>
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" placeholder="8 Characters or More" minlength="8" required>
    </div>
    <div class="form-group">
      <label for="password-confirm">Password Confirm</label>
      <input type="password" class="form-control" name="password-confirm" placeholder="Retype the password again" minlength="8" required>
      <p class="pw-status">
        <?php
        if(isset($GLOBALS['isConfirmed'])) {
          if($GLOBALS['isConfirmed']) {
            echo "Confirmed!";
          } else {
            echo "Passwords Do Not Match! Please try again";
          }
        }
         ?>
      </p>
    </div>
    <div class="form-group">
      <label for="email">Email Address</label>
      <input type="email" name="email" class="form-control" placeholder="Fredonia Email Address" required>
    </div>
    <input type="submit" name="submit" class="btn btn-info register-button" value="Register"></button>
  </form>
</div>

<?php include "../includes/bottom.php" ?>
