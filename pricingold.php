<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include("config.php");
include("external_links.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShopItUS.com :: Package Forwarding to Australia & NewZeland</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="css/1000px.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="css/720px.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script   src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <style>
        html,body{
                max-width: 100%;overflow-x:hidden;
            }
       .btn-round{
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

.fa:hover {
    
}

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




</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
   
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
      <ul class="nav navbar-nav"  style="margin-top:25px">
        <li><a href="howwework.php">HOW IT WORKS</a></li>
          <li><a href="shippingcalculator.php">SHIPPING CALCULATOR</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="shopmy.php">SHOPE</a></li>
           <li><a href="frequently_asked_questions.php">F.A.Q.</a></li>
           <li><a href="contact.php">CONTACT</a></li>
          
      </ul>
         <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-bottom:10px;">
       <button type="button" onclick="location.href='login.php'" class="btn btn-danger btn-round">Sign In</button>
            <button type="button" onclick="location.href='register.php'" class="btn btn-danger btn-round">Sign Up</button><br>
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-google"></a>
             <a href="#" class="fa fa-pinterest"></a>



             
    </ul>
    </div>
  </div>
</nav>
<div ><img src="images/online_shopping.jpg" class="img-responsive">
           </div>

 <div id="shipping_calculator_frame" style="xbackground-color:#F30; height:auto;">

 
 <div id="contact_header"style="font-size:42px;">PRICING COMING OCTOBER 2017 </div>
 
<div class="clearfix"></div>


 <div id="faq_frame" style="font-family: Georgia, 'Times New Roman', Times, serif; xbackground-color: #63F; text-align: center; height: auto;">
 <div id="membership_pricing">
 
 <div id="membership_pricing_title_left1" style="background-color:#FFF; border-left:1px solid; border-left-color:#cfcfcf; border-top:1px solid; border-top-color:#cfcfcf; border-top-left-radius:24px;">
 <div id="membership_pricing_title_left_inner">Select Membership</div>
 </div>
 
 <div class="membership_pricing_title" style="background-color:#78A1C0; border-left:1px solid; border-left-color:#78A1C0;"">
 <div class="membership_pricing_title_upper">BASIC</div>
  <div class="membership_pricing_title_mid">FREE</div>
 </div>
 
 <div class="membership_pricing_title" style="background-color:#53D2A8; border-left:1px solid; border-left-color:#fff; border-right:1px solid; border-right-color:#53D2A8; border-top-right-radius:24px;">
 <div class="membership_pricing_title_upper">PREMIUM</div>
 <div class="membership_pricing_title_mid">$6.95/<font size="4">month</font></div>
 </div>
 
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">Your USA Address</div>  <div class="membership_pricing_features" style="background-color:#eaeaea" >Yes</div> <div class="membership_pricing_features" style="background-color:#eaeaea; border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left">Free Storage (Yes Both)</div>   <div class="membership_pricing_features">30 Days</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;">30 Days</div>
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">Real Time Shippment Tracking</div>  <div class="membership_pricing_features" style="background-color:#eaeaea">Yes</div> <div class="membership_pricing_features" style="background-color:#eaeaea; border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left">Flexible Shipping Options</div>  <div class="membership_pricing_features">Yes</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">Package Consolidation</div>  <div class="membership_pricing_features" style="background-color:#eaeaea;">No</div> <div class="membership_pricing_features" style="background-color:#eaeaea;  border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left">Multiple Package Discounts</div>  <div class="membership_pricing_features">No</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">Additional Names in One Account</div>  
 <div class="membership_pricing_features" style="background-color:#eaeaea;">Yes</div> 
 <div class="membership_pricing_features" style="background-color:#eaeaea; border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left">Package Repacking </div>  <div class="membership_pricing_features">No</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;">Yes</div>
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">SHopitUS Shipping Discount </div>  <div class="membership_pricing_features" style="background-color:#eaeaea">Upto 60% Off</div> <div class="membership_pricing_features" style="background-color:#eaeaea; border-right:1px solid; border-right-color:#cfcfcf;">Upto 60% Off</div>
 <div class="membership_pricing_features_left">Premium Shipping Discount	</div>  <div class="membership_pricing_features">No</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;">20%</div>
 <div class="membership_pricing_features_left" style="background-color:#eaeaea">Monthly Rate	</div>  <div class="membership_pricing_features" style="background-color:#eaeaea">$0.00</div> <div class="membership_pricing_features" style="background-color:#eaeaea; font-size:13px; border-right:1px solid; border-right-color:#cfcfcf;">$6.95 Monthly After 30 Day Free Trial</div>
 <div class="membership_pricing_features_left"  >Billing	</div>  <div class="membership_pricing_features" >One Time Setup Fee $6.95 Only</div> <div class="membership_pricing_features" style="border-right:1px solid; border-right-color:#cfcfcf;" >Annually </div>


<div id="membership_pricing_buynow_left1">&nbsp;</div>
<div class="membership_pricing_buynow"><div class="membership_pricing_buynow_inner" style="xbackground-color:#78A1C0;">BUY NOW</div></div> 
<div class="membership_pricing_buynow" style="border-right:1px solid; border-right-color:#cfcfcf;  border-bottom-right-radius:24px;"><div class="membership_pricing_buynow_inner" style="xbackground-color:#53D2A8;">BUY NOW</div></div> 
 
 </div>
 </div>

<div id="footer_bottom_separator"></div>

<div id="footer">

<div id="footer_map_frame">
<div id="footer_map"><img src="images/aus-nz_map.png" style="max-width:70%; max-height:100%; display: block; margin-left: auto; margin-right: auto;"/></div>


<div id="footer_inner_right">
<div id="footer_icon_holder2">
<div id="footer_icon_holder">
<div class="footer_icons"><img src="images/card_icons/amex.png"  style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="images/card_icons/discover.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="images/card_icons/paypal.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="images/card_icons/visa.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="images/card_icons/mastercard.png" style="max-width:100%; max-height:100%; display: block;"/></div>
</div>
</div>
</div>


<div id="footer_map_content2">
<div id="footer_map_content" style="text-align:center">
SHOP USA<br />
SHIP AUSTRALIA <br />
<font style="font-size:16px">Backed by 24/7 US support</font><br />
<font style="font-size:16px">Toll Free USA : <?php echo $toll_free_number; ?></font><br />
<font style="font-size:12px">www.shopitus.com</font>
</div></div>

</div>






<div id="footer_links_2_frame">
<div class="footer_links_2">
<a href="index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="how_it_works.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
 
 <a href="pricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact Us</a>

</div>
<div id="footer_social_icons">
<div class="social_icons" style="margin-left:0px;"><a href="<?php echo $facebook; ?>"><img src="images/social_media_icons/facebook.png" /></a></div>
<div class="social_icons"><a href="<?php echo $twitter; ?>"><img src="images/social_media_icons/twitter.png" /></a></div>
<div class="social_icons"><a href="<?php echo $pinterest; ?>"><img src="images/social_media_icons/pinterest.png" /></a></div>
<div class="social_icons"><a href="<?php echo $youtube; ?>"><img src="images/social_media_icons/youtube.png" /></a></div>
<div class="social_icons"><a href="<?php echo $viber; ?>"><img src="images/social_media_icons/viber.png" /></a></div>
</div>
<div id="footer_copyright_info"><?php echo $copyright; ?></div>
</div>

</div>
<!--<?php

if($_SESSION['memberpass'] == "valid")
{
	
?>
<a href="members/index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; xfont-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="logout.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

<?php
}else{
?>

<?php
}
?>-->
</div>







  <script type="text/javascript">
    window.addEventListener('load', function() {
    new FastClick(document.body);
}, false);
    $('.menu').click(function(e){
      $('.drawer').toggleClass('active');
      e.preventDefault();
    });
  </script>
  <script type="text/javascript">

   var _gaq = _gaq || [];
   _gaq.push(['_setAccount', 'UA-7180140-5']);
   _gaq.push(['_trackPageview']);

   (function() {
   var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
   ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
   var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
   })();

  </script>

</body>
</html>
