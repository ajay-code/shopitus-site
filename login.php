<?php
error_reporting(E_ERROR);
session_start();
include("config.php");
include("external_links.php");
?>
<?php include "layouts/partials/header.php"; ?>
<div class="main">
  <section class="hero">
    <div class="jumbotron jumbotron-fluid py-0 text-center">
      <img src="/images/online_shopping.jpg" class="img-fluid">
    </div>
  </section>

  <section class="py-5 text-center">
    <form autocomplete="off" name="loginform" id="loginform" onsubmit="return loginpress()" class="form-signin" method="POST" action="members/index.php">
      <h1 class="h4 mb-3 font-weight-normal bg-primary text-white py-3">Member Sign In</h1>
      <div class="form-group">
        <label for="memberemail" class="sr-only">Email address</label>
        <input name="memberemail" id="memberemail" type="email" placeholder="Your Email" class="form-control" required autofocus>
      </div>
      <div class="form-group">
        <label for="memberpass" class="sr-only">Password</label>
        <input name="memberpass" id="memberpass" type="password" class="form-control" placeholder="Password" required>
      </div>
      <div class="form-group form-check mb-2 text-left">
        <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
        <label class="form-check-label" for="remember_me">Remember me</label>
      </div>
      <div class="text-danger mb-1 text-center">
        <p id="login_msg" class="error"></p>
      </div>
      <button class="btn btn-lg btn-danger btn-block" type="submit">Sign in</button>
      <hr>
    </form>
    <div class="text-center">
      <p>
        <a href="reminder.php" >Forgot Your Password? Click Here.</a>
      </p>
      <p>
        <a href="register.php" >Not A Member? Register Now!</a>
      </p>
    </div>

  </section>

  <section class="bg-gray py-5">
    <div class="container text-center">
      <h4 class="text-muted">We work with world's leading package forwarding agencies.</h4>
      <h5 class="text-dark py-4">We accept extra large packages too.</h5>
      <h5 class="">Safe arrival of your package to your doorstep is Guaranteed!</h5>
    </div>
  </section>
</div>

<?php include "layouts/partials/footer.php"; ?>
