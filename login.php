<?php include "includes/top.php" ?>
<?php include "includes/db.php" ?>
<?php
if(isset($_POST['submit'])) {
  if(DB::IsAuthenticated($_POST['username'], $_POST['password'])) {
    // TODO appropriate redirection needed
    header("Location: register_book.php");
  }
}
?>
<div class="container main-content login-form">
  <form action="login.php" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" placeholder="Fredonia eService Username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" minlength="8">
    </div>
    <input type="submit" name="submit" class="btn btn-success login-button" value="Login"></button>
  </form>
</div>
<?php include "includes/bottom.php" ?>
