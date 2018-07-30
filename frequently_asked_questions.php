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

  <section class="container pb-4">
    <h1 class="h4 text-center d-sm-none">
      FREQUENTLY ASKED QUESTIONS
    </h1>
    <h1 class="display-4 text-center d-none d-sm-block">
      FREQUENTLY ASKED QUESTIONS
    </h1>

    <div style="margin-top: 60px">
      <div class="py-1 pl-2 mb-3" style="background-color: #C4DEF6">
        <span class="" style="font-size: 26px">Registration & Login</span>
      </div>
      <div class="pl-2">
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-1" role="button" style="color: #337ab7">
            How Can I Register A New Account?
          </a>
          <div class="collapse pl-3" id="ques-1">
            Just click the "JOIN" button and you can register a new account in 20 seconds.
          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-2" role="button" style="color: #337ab7">
            Is Your Registration Free?
          </a>
          <div class="collapse pl-3" id="ques-2">
            Yes! Always you can join us with a free account but if you are looking for more benefits & services please compare our paid
            package in the "Pricing" page. You can purchase the paid package later and register a free account when joining
            us.
          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-3" role="button" style="color: #337ab7">
            How Can I Get My Shop It US Address
          </a>
          <div class="collapse pl-3" id="ques-3">
            Your US Address will appear instantly in your Member Account after your account is created.
          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-4" role="button" style="color: #337ab7">
            Is My Shop It US Address Free?
          </a>
          <div class="collapse pl-3" id="ques-4">
            Yes. Your US Address is always free. No hidden charges.
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top: 30px">
      <div class="py-1 pl-2 mb-3" style="background-color: #C4DEF6">
        <span class="" style="font-size: 26px">Shipping & Services</span>
      </div>
      <div class="pl-2">
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-5" role="button" style="color: #337ab7">
            How soon after signing up can I start having packages shipped to my account address?
          </a>
          <div class="collapse pl-3" id="ques-5">
            Once you have completed registration and and your account is verified, you will be given access to your ShopitUS account
            address. Please make sure all packages you have shipped to this address have your full name as it appears on
            your account and your unique suite number.
          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-6" role="button" style="color: #337ab7">
            What is USPS Form 1583
          </a>
          <div class="collapse pl-3" id="ques-6">
            U.S. Postal Service Form 1583 is required from USPS from all customers. It simply allows Shopit US to receive your mails
            and packages. You always accept Form 1583 when you sign up with us. See more details

          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-7" role="button" style="color: #337ab7">
            What is procedure if I have a lost, damaged, package that you have not entered?
          </a>
          <div class="collapse pl-3" id="ques-7">
            If you have a package that is lost, or damaged during shipping, you can open a claim and our claim department will assist
            you with the claim. If you have a package that is supposed to be delivered to our warehouse and it is not entered
            in your account yet, please open a claim also. A customer representative will be happy to assist you. Please
            make sure to have the retailer invoice or receipt with you to support your claims.
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top: 30px">
      <div class="py-1 pl-2 mb-3" style="background-color: #C4DEF6">
        <span class="" style="font-size: 26px">Payments & Billing</span>
      </div>
      <div class="pl-2">
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-8" role="button" style="color: #337ab7">
            Do you accept credit cards?
          </a>
          <div class="collapse pl-3" id="ques-8">
            Yes we accept major credit cards or Paypal. So all what you need to do is to sign up to one of these service, add your credit
            card and then you can pay at Shopit US via credit card.
          </div>
        </div>
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-9" role="button" style="color: #337ab7">
            What other forms of payment do you accept?
          </a>
          <div class="collapse pl-3" id="ques-9">
            Wire transfer is a secure method of payment, A fee of $18. for each incoming wire transfer is assessed by our bank and charged
            to the customer. Bitcoin or Bitcash.

            <img src="images/WeAcceptBitcoin.png" alt="We Accept Bitcoin" width="100"> on Bitpay (%1)

          </div>
        </div>

      </div>
    </div>

    <div style="margin-top: 30px">
      <div class="py-1 pl-2 mb-3" style="background-color: #C4DEF6">
        <span class="" style="font-size: 26px">Forwarding & Security</span>
      </div>
      <div class="pl-2">
        <div class="pb-3">
          <a class="h6" data-toggle="collapse" href="#ques-10" role="button" style="color: #337ab7">
            Is My USA Address Free?
            <span class="text-danger">FOOTER CROWDED ON ADDS!!!!</span>
          </a>
          <div class="collapse pl-3" id="ques-10">
            Yes. Your US Address is always free. No hidden charges.
          </div>
        </div>

      </div>
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

<style>
  * {
    /* border: 1px red solid; */
  }
</style>