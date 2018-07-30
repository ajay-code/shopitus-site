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

  <div class="container">
    <div class="row py-5">

      <section class=" text-center col-lg-6">
        <form autocomplete="off" name="getnewmember" id="getnewmember" onsubmit="return newmemberjoin()" class="form-signin" method="POST" action="members/new_member.php">
          <input type="hidden" id="membershipconfirm" name="membershipconfirm" value="asdi%7we" />
          <h1 class="h4 mb-3 font-weight-normal bg-primary text-white py-3">Register A Free Account</h1>
          <div class="form-group">
            <label for="firstname" class="sr-only">Email address</label>
            <input name="firstname" id="firstname" type="text" placeholder="First Name" class="form-control" required autofocus>
          </div>
          <div class="form-group">
            <label for="lastname" class="sr-only">Email address</label>
            <input name="lastname" id="lastname" type="text" placeholder="Last Name" class="form-control" required autofocus>
          </div>
          <div class="form-group">
            <label for="emailbox" class="sr-only">Email address</label>
            <input name="emailbox" id="emailbox" type="email" placeholder="Your Email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="passwordbox" class="sr-only">Password</label>
            <input name="passwordbox" id="passwordbox" type="password" class="form-control" placeholder="Password" required>
          </div>
          <div class="form-group form-check mb-2 text-left">
            <input type="checkbox" class="form-check-input" id="agreetoterms"  name="agreetoterms" required>
            <label class="form-check-label" for="agreetoterms">I agree with the <a href="TOS1.php">Terms & Conditions.</a></label>
          </div>
          <div class="text-danger mb-1 text-center">
            <p id="registration_msg" class="error"></p>
          </div>
          <button class="btn btn-lg btn-danger btn-block" type="submit">Join Now</button>
          <hr>
        </form>
        <div class="text-center">
          <p>
            <a href="login.php" >Already A Member? &nbsp;&nbsp; Sign In</a>
          </p>
        </div>
      </section>
      <section class="col-lg-6">
        <div class="">
          <h3>Shopping US Online Stores with &nbsp;<b><font color="#CC0000">MyShopUS</font></b> is  Easy as 1, 2, 3</h3>
          <div class="row my-2">
            <div class="col-sm-2 text-center">
              <span class="circular-number">1</span>
            </div>
            <div class="col-sm-10 d-flex align-items-center text-center text-sm-left">
              <span>
                <b style="color:#06C;">Get your US Address instantly.</b> Soon after registration you will have it FREE. No payment necessary.
              </span>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-sm-2 text-center">
              <span class="circular-number">2</span>
            </div>
            <div class="col-sm-10 d-flex align-items-center text-center text-sm-left">
              <span>
                <b style="color:#06C;">Shop with any US online retailers.</b> Add your   US address as shipping address with mailbox number, at checkout.
              </span>
            </div>
          </div>
          <div class="row my-2">
            <div class="col-sm-2 text-center">
              <span class="circular-number">3</span>
            </div>
            <div class="col-sm-10 d-flex align-items-center text-center text-sm-left">
              <span>
                <b style="color:#06C;">Add your Shipping request in  MyShopUS Dashboard.</b> We will send your package to your doorstep safely.
              </span>
            </div>
          </div>

        </div>
      </section>
    </div>


  </div>

  <section class="bg-gray py-5">
    <div class="container text-center">
      <h4 class="text-muted">We work with world's leading package forwarding agencies.</h4>
      <h5 class="text-dark py-4">We accept extra large packages too.</h5>
      <h5 class="">Safe arrival of your package to your doorstep is Guaranteed!</h5>
    </div>
  </section>
</div>

<?php include "layouts/partials/footer.php"; ?>
