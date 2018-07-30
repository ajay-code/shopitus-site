<?php
error_reporting(E_ERROR);
session_start();
include("config.php");
include("external_links.php");
?>
<?php include "layouts/partials/header.php"; ?>
<div class="main">
  <section class="hero">
    <div class="jumbotron jumbotron-fluid pt-0 pb-4 text-center">
      <img src="/images/online_shopping.jpg" class="img-fluid">

      <p class="lead">Shop the most popular US online stores Now!</p>
      <p>Get them shipped to Australia, NewZeland, UK or UAE right away.</p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="/register.php" style="border-radius: 40px" role="button">Join Now</a>
      </p>
      <p class="display-5">IT'S FREE TO REGISTER</p>
      <p class="display-5"> Get Your Own USA Address NOW!</p>
    </div>
  </section>

  <section class="brands container">
    <?php $shops = require("layouts/data/brands.php") ?>
    <div class="row">
      <?php foreach ($shops as $shop) : ?>
        <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
          <a href="<?= $shop['link'] ?>">
            <img src="<?= $shop['image'] ?>" class="img-fluid">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </section>
  <section class="container text-center px-md-5 py-5">
    <p class="h3 text-center px-md-5 mx-md-5 pb-3 text-info">Check our shipping calculator for special rates on Australia & NewZeland</p>
    <a class="btn btn-primary button-round-20" href="/shipping_calculator.php">Calculate Now</a>
  </section>
  <section class="container py-4">
    <div class="row">
      <div class="col-sm-6 text-center ">
        <img  src="/images/destinations.jpg" class="img-fluid">
      </div>
      <div class="col-sm-6 ">
        <div class="">
          <h1 class="text-center text-danger">What we do</h1>
          <h3 class="text-center text-primary">Full Service Shipping, Handling and Consolidation to Any Destination</h3>
          <p style="font-size:20px" class="text-muted text-justify">
              Many businesses in the US won't ship overseas or accept an overseas address.<br>
              We take care of your packages shopped at US stores or online orders and receive here at our Orlando,Florida warehouse.<br>
          They arrive at YOUR ORLANDO, FL. USA ADDRESS and we will ship, consolidate and re-pack several packages for <br>
          substantial savings to you! Order from your favorite US stores online or if your visiting our world class destination, shop to your
hearts desire 
and let us pack and ship! 
          <br>
          We even offer personal services for shopping or pickup
            and we'll send it to
          your location anywhere in Australia,<br>
          NewZeland, UK and UAE.</p>
        </div>
      </div>
    </div>
  </section>
  <section>
    <img src="/images/package_delivery.jpg" alt="" class="img-fluid">
    <div class="text-white bg-blue-light">
      <div class="container">
        <div class="pb-5">
          <h1 class="text-center">Safe &amp; Fast Delivery to Your Doorstep</h1>
        </div>
        <div class="row mx-md-5">
          <div class="col-sm-6 mb-4 border-right-white">
            <h2 class="text-center">We do care about fast order delivery. We guarantee that your package will be at your doorstep right on time.</h1>
          </div>
          <div class="col-sm-6 mb-4">
              <ul class="safe-delivery-list px-md-5">
                <li class="h3">Any fragile package  that needs care.</li>
                <li class="h3">Documents that should reach you on time.</li>
                <li class="h3">Large hardware direct to your   location.</li>
              </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="container">
    <h1 class="text-center text-muted py-4"> Advantage of Selecting Us </h1>
    <div class="text-center text-muted">
      We provide a unique service for anyone and you can be rest assured without any delay your item will be shipped<br>
to your home  in Australia, New Zealand, UK or UAE.<br>
<br>
      Our service is regularly requested by many Aussies and Kiwis from ordinary households to <br>
      Multi-National Companies.
    </div>
    <hr style="max-width: 400px">
    <div class="text-center text-muted mt-4 py-4">
      Unlike some other shipping agencies, we handle extra large packages too. From Audio Rack Systems <br>
      to Stage Lighting &amp; Sounds, <br>
      from Auto parts to Vehicles &amp; Boats and from hand held wood cutters to large chipper trucks. <br>
      Please make sure to check our Shipping Calculator and if your are not clear <br>
      about anything contact us by phone, fax or e-mail. <br>
      You can also use the mail form and get all the information you require.
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
