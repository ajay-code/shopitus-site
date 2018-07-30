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


@keyframes example {
    0%   {background-color: #98FB98; left:0px; top:0px;}
    25%  {background-color: #EEE8AA ; left:200px; top:0px;}
    50%  {background-color: #98FB98; left:200px; top:200px;}
    75%  {background-color: #EEE8AA ; left:0px; top:200px;}
    100% {background-color: #98FB98; left:0px; top:0px;}
}



.background-color:hover
{
        background:#53a7ea;
}



    </style>
<style>
* {
    box-sizing: border-box;
}

.columns {
    float: left;
    width: 25%;
    padding: 8px;
}

.price {
    list-style-type: none;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
    border: 3px solid darkblue;
}

.price .header {
    background-color:;
    color:white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #3E8EE2;
    font-size: 20px;
    color:white;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: lime;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
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
        <li><a href="newpricing.php">PRICING</a></li>
        <li><a href="shopmy.php">SHOP</a></li>
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
    <div class="container-fluid" style="margin-top: 50px;margin-bottom: 50px">
    <div class="columns">
  <ul class="price">
    <li class="header grey" style="height:70px"></li>
    <li>Your USA Address<i data-toggle="tooltip" data-placement="right" title="Get your USA Address where your packages will be shipped then forwarded" class="fa fa-question-circle-o" aria-hidden="true"></i></li>
    <li>ShopitUs Ship Discount <i data-toggle="tooltip" data-placement="right" title="Members get BIG savings on shipping rates" class="fa fa-question-circle-o" aria-hidden="true"></i></li>
    <li>Real Time Tracking<i data-toggle="tooltip" data-placement="right" title="Check your orders tracking real time from members page" class="fa fa-question-circle-o" aria-hidden="true"></i></li>
    <li>Free Package Storage<i data-toggle="tooltip" data-placement="right" title="Your orders are stored with enough time to allow for multiple orders and savings on consolidation" class="fa fa-question-circle-o" aria-hidden="true"></i></li>
    <li>Package Consolidation<i data-toggle="tooltip" data-placement="right" title="Save big with package consolidation, we carefully package multiple orders into one or few packages." class="fa fa-question-circle-o" aria-hidden="true"></i></li>
    <li class="grey"><strong>Monthly Fee</strong></li>
    <li class="grey"><a href="pricing1.php" style="background-color:blue"  class="button">Compare Plans</a></li>
    
    
    
  </ul>
</div>
<div class="columns">
  <ul class="price">
    <li class="header grey">Single Parcel</li>
    <li><i style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li><i style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li><i style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li style="height:78px">30 Days</li>
    <li style="height:78px">X</li>
    <li class="grey"><strong>$0</strong></li>
    <li class="grey"><a href="#" style="background-color:blue"  class="button">Sign Up</a></li>
  </ul>
</div>

<div class="columns" >
  <ul class="price" style="border: 3px solid darkblue">
  <li class="header grey" style="background-color:lightgray;color:black"><span class="oilj"><span class="header grey" style="background-color:lightgray;color:black"><span class="Value">Gold</span></span> Great Value</span></li>
    <li><i style="color: gold" class="fa fa-check" aria-hidden="true"> </i></li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li style="height:78px">60 Days</li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li class="grey"><strong>FREE</strong></li>
    <li class="grey"><a href="#" style="background-color:blue"  class="button">REDEEM YOUR OFFER</a></li>
  </ul>
</div>

<div class="columns">
  <ul class="price">
    <li class="header grey">Your Mail</li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li style="height:78px">60 days</li>
    <li><i  style="color: gold" class="fa fa-check" aria-hidden="true"></i></li>
    <li class="grey"><strong>$19.00</strong></li>
    <li class="grey"><a href="#" style="background-color:blue" class="button">Sign Up</a></li>
  </ul>
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
<a href="index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="howwework.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
 
 <a href="newpricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="TOS.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="privacypolicy.php">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact Us</a>

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
