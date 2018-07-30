<?php
error_reporting(E_ERROR);
session_start();
include("config.php");
include("external_links.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>ShopItUS.com</title>

  <link rel="stylesheet" href="css/layout.css" type="text/css" />
  <link rel="stylesheet" href="css/style.css" type="text/css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
  <style>
    html,
    body {
      max-width: 100%;
      overflow-x: hidden;
    }

    .btn-round {
      border-radius: 20px;
    }
  </style>
  <style>
    .fa {
      padding: 4px;
      font-size: 15px;
      width: 30px;
      text-align: center;
      text-decoration: none;
      margin: 5px 2px;
      border-radius: 50%;
    }

    .fa:hover {}

    .fa-facebook {
      background: #3B5998;
      color: white;
    }

    .fa-twitter {
      background: #55ACEE;
      color: white;
    }

    .fa-google {
      background: #dd4b39;
      color: white;
    }


    .fa-pinterest {
      background: #cb2027;
      color: white;
    }




    .footercrowded {
      color: #C30;
    }
  </style>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


  <script type="text/javascript">
    $(document).ready(function () {
      $('.toggle-wrap').hide().before('<font style="color:#fff">.</font>');
      $(".toggle-trigger").click(function () {
        $(this).parent().nextAll('.toggle-wrap').first().toggle('normal');
      });
    });


    function clearboxes() {
      document.getElementById("memberemail").value = '';
      document.getElementById("memberpass").value = '';
    }

    function loginpress() {
      var str = document.getElementById("memberemail").value;
      var at = "@"
      var dot = "."
      var lat = str.indexOf(at)
      var lstr = str.length
      var ldot = str.indexOf(dot)


      if (str == '') {
        document.getElementById("login_msg").value = "Enter your Email Address.";
      } else if (str.indexOf(at) == -1) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.indexOf(at) == -1 || str.indexOf(at) == 0 || str.indexOf(at) == lstr) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.indexOf(dot) == -1 || str.indexOf(dot) == 0 || str.indexOf(dot) == lstr) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.indexOf(at, (lat + 1)) != -1) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.substring(lat - 1, lat) == dot || str.substring(lat + 1, lat + 2) == dot) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.indexOf(dot, (lat + 2)) == -1) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (str.indexOf(" ") != -1) {
        document.getElementById("login_msg").value = "Incorrect Email. Please Check.";
      } else if (document.getElementById("memberpass").value == '') {
        document.getElementById("login_msg").value = "Password is Required";
      } else {
        document.loginform.submit();
      }
    }
  </script>

</head>

<body id="home" onload="javascript:notvisible();">

  <div>
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php" style="margin-top:8px">
            <img src="images/title.jpg" width="200" height="50" alt="">
          </a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav" style="margin-top:25px">
            <li>
              <a href="howwework.php">HOW IT WORKS</a>
            </li>
            <li>
              <a href="shipping_calculator.php">SHIPPING CALCULATOR</a>
            </li>
            <li>
              <a href="newpricing.php">PRICING</a>
            </li>
            <li>
              <a href="deals.php">SHOP</a>
            </li>
            <li>
              <a href="frequently_asked_questions.php">F.A.Q.</a>
            </li>
            <li>
              <a href="contact.php">CONTACT</a>
            </li>

          </ul>
          <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-bottom:10px;">
            <button type="button" onclick="location.href='login.php'" class="btn btn-danger btn-round">Sign In</button>
            <button type="button" onclick="location.href='register.php'" class="btn btn-danger btn-round">Sign Up</button>
            <br>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-pinterest"></a>




          </ul>
        </div>
      </div>
    </nav>
    <div>
      <img src="images/online_shopping.jpg" class="img-responsive">
    </div>


    <!--<?php
if($_SESSION['memberpass'] == "valid")
{
?>
<a href="members/index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; font-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="../login.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

<?php
}else{
?>
<a href="register.php"><div class="h_mid_inner_button">Join</div></a><a href="login.php"><div class="h_mid_inner_button">Login</div></a>
<?php
}
?>-->

    <div id="shipping_calculator_frame" style="Xbackground-color:#F30; height:1600px;">

      <div id="faq_frame">
        <div id="contact_header" style="Xbackground-color:#9F0; width:100%">FREQUENTLY ASKED QUESTIONS</div>



        <div class="faq_headers">Registration & Login</div>
        <div class="faq_top_separator"></div>
        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">How Can I Register A New Account? </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Just click the "JOIN" button and you can register a new account in 20 seconds.
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>



        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              Is Your Registration Free?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Yes! Always you can join us with a free account but if you are looking for more benefits & services please compare our paid
              package in the "Pricing" page. You can purchase the paid package later and register a free account when joining
              us.
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>




        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              How Can I Get My Shop It US Address
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Your US Address will appear instantly in your Member Account after your account is created.
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>




        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              Is My Shop It US Address Free?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Yes. Your US Address is always free. No hidden charges.
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>


        <div class="faq_headers">Shipping & Services</div>
        <div class="faq_top_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              How soon after signing up can I start having packages shipped to my account address?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">Once you have completed registration and and your account is verified, you will be given access to your ShopitUS
              account address. Please make sure all packages you have shipped to this address have your full name as it appears
              on your account and your unique suite number.</div>
          </div>
        </div>


        <div class="faq_bottom_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger"></a>
          <a class="toggle-trigger">
            <div class="faq_question">
              What is USPS Form 1583
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">U.S. Postal Service Form 1583 is required from USPS from all customers. It simply allows Shopit US to receive
              your mails and packages. You always accept Form 1583 when you sign up with us. See more details
              <a href="https://shopitus.com/ps1583.pdf">here.</a>
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger"></a>
          <a class="toggle-trigger">
            <div class="faq_question">
              What is procedure if I have a lost, damaged, package that you have not entered?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">If you have a package that is lost, or damaged during shipping, you can open a claim and our claim department
              will assist you with the claim. If you have a package that is supposed to be delivered to our warehouse and
              it is not entered in your account yet, please open a claim also. A customer representative will be happy to
              assist you. Please make sure to have the retailer invoice or receipt with you to support your claims. </a>
            </div>
          </div>
        </div>




        <div class="faq_headers">Payments & Billing </div>
        <div class="faq_top_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              Do you accept credit cards?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Yes we accept major credit cards or Paypal. So all what you need to do is to sign up to one of these service, add your credit
              card and then you can pay at Shopit US via credit card.
            </div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              What other forms of payment do you accept?
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Wire transfer is a secure method of payment, A fee of $18. for each incoming wire transfer is assessed by our bank and charged
              to the customer. Bitcoin or Bitcash.


              <img src="images/WeAcceptBitcoin.png" alt="We Accept Bitcoin" width="100" /> on Bitpay (%1)</div>
          </div>
        </div>
        <div class="faq_bottom_separator"></div>


        <div class="faq_headers">Forwarding & Security</div>
        <div class="faq_top_separator"></div>

        <div class="faq_circle"></div>
        <p>
          <a class="toggle-trigger">
            <div class="faq_question">
              Is My USA Address Free?
              <span class="footercrowded">FOOTER CROWDED ON ADDS!!!! </span>
            </div>
          </a>
        </p>

        <div class="faq_answer_frame, toggle-wrap">
          <div class="faq_answer_inner">
            <div class="faq_answer_innermost_right">
              Yes. Your US Address is always free. No hidden charges.
            </div>
          </div>
        </div>

      </div>












      <div id="footer_bottom_frame">
        <div id="footer_top_separator"></div>
        <div id="footer_bottom_top_frame">We work with world's leading package forwarding agencies.</div>
        <div id="footer_bottom_mid_frame">We accept extra large packages too.</div>
        <div id="footer_bottom_mid_bottom_frame">Safe arrival of your package to your doorstep is Guaranteed!</div>
      </div>

      <div id="footer_bottom_separator"></div>
      <div id="footer">
        <div id="footer_map_frame">
          <div id="footer_map">
            <img src="images/aus-nz_map.png" style="max-width:70%; max-height:100%; display: block; margin-left: auto; margin-right: auto;"
            />
          </div>


          <div id="footer_inner_right">
            <div id="footer_icon_holder2">
              <div id="footer_icon_holder">
                <div class="footer_icons">
                  <img src="images/card_icons/amex.png" style="max-width:100%; max-height:100%; display: block;" />
                </div>
                <div class="footer_icons">
                  <img src="images/card_icons/discover.png" style="max-width:100%; max-height:100%; display: block;" />
                </div>
                <div class="footer_icons">
                  <img src="images/card_icons/paypal.png" style="max-width:100%; max-height:100%; display: block;" />
                </div>
                <div class="footer_icons">
                  <img src="images/card_icons/visa.png" style="max-width:100%; max-height:100%; display: block;" />
                </div>
                <div class="footer_icons">
                  <img src="images/card_icons/mastercard.png" style="max-width:100%; max-height:100%; display: block;" />
                </div>
              </div>
            </div>
          </div>


          <div id="footer_map_content2" style="text-align:center">
            <div id="footer_map_content">
              SHOP USA
              <br /> SHIP AUSTRALIA
              <br />
              <font style="font-size:16px">Backed US support Chat or email</font>
              <br />
              <font style="font-size:16px">Telephone USA 1407-532-9292, during business hours :
                <?php echo $toll_free_number; ?>
              </font>
              <br />
              <font style="font-size:12px">www.shopitus.com</font>
            </div>
          </div>

        </div>

        <div id="footer_links_2_frame">
          <div class="footer_links_2">
            <a href="index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="howwework.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;

            <a href="newpricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="TOS1.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="privacypolicy.php">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp;
            <a href="contact.php">Contact Us</a>

          </div>
          <div id="footer_social_icons">
            <div class="social_icons" style="margin-left:0px;">
              <a href="<?php echo $facebook; ?>">
                <img src="images/social_media_icons/facebook.png" />
              </a>
            </div>
            <div class="social_icons">
              <a href="<?php echo $twitter; ?>">
                <img src="images/social_media_icons/twitter.png" />
              </a>
            </div>
            <div class="social_icons">
              <a href="<?php echo $pinterest; ?>">
                <img src="images/social_media_icons/pinterest.png" />
              </a>
            </div>
            <div class="social_icons">
              <a href="<?php echo $youtube; ?>">
                <img src="images/social_media_icons/youtube.png" />
              </a>
            </div>
            <div class="social_icons">
              <a href="<?php echo $viber; ?>">
                <img src="images/social_media_icons/viber.png" />
              </a>
            </div>
          </div>
          <div id="footer_copyright_info">
            <?php echo $copyright; ?>
          </div>
        </div>

      </div>





    </div>


  </div>







  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <script type="text/javascript">
    window.addEventListener('load', function () {
      new FastClick(document.body);
    }, false);
    $('.menu').click(function (e) {
      $('.drawer').toggleClass('active');
      e.preventDefault();
    });
  </script>
  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7180140-5']);
    _gaq.push(['_trackPageview']);

    (function () {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') +
        '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>

</body>

</html>