<?php include "../includes/top.php" ?>
<?php
if(isset($_POST['submit'])) {
    echo "<script>alert('submitted!')</script>";
}
?>
<div class="container main-content login-form">
  <form action="login.php" method="post" accept-charset="utf-8">
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" id="username" placeholder="Your Fredonia e-service username">
    </div>
    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" id="password" minlength="8">
    </div>
    <input type="submit" name="submit" class="btn btn-success login-button" value="Login"></button>
  </form>
</div>
<?php include "../includes/bottom.php" ?>
