<?php
error_reporting(E_ERROR);
session_start();
include("config.php");
include("external_links.php");

$_SESSION['memberpass']  = "";

$_SESSION['newmsg'] = "registration";


if(isset($_GET['emailadrs'])){
	$emailvalidator = 1;
}else{ $emailvalidator = 0;
}
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
    </style>

</head>

<body>
    <div class="container">
  <div class="row">
    <div class="col-lg-6" style="font-size:25px;color:red">
    <a href="#" class="social-icon"><i style="padding-top:20px;padding-bottom:10px;" class="fa fa-facebook"></i></a>
				<a href="#" class="social-icon"><i class="fa fa-skype"></i></a>
				<a href="#" class="social-icon"><i class="fa fa-twitter"></i></a>
				<a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a>
				<a href="#" class="social-icon"><i class="fa fa-google-plus"></i></a>
    </div>
    <div class="col-lg-6">
      <div class="nav navbar-nav navbar-right" style="padding-top:10px;padding-bottom:10px;">
            <button type="button" onclick="index.php" class="btn btn-danger">Sign In</button>
            <button type="button" onclick="Howwework.php" class="btn btn-danger">Sign In</button>
        </div>
    </div>
  </div>
</div>
<div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="index.php" style="margin-top:-5px">
    <img src="images/title.jpg" width="200" height="50" alt="">
  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
         <li><a href="howwework.php">HOW IT WORKS</a></li>
          <li><a href="shippingcalculator.php">SHIPPING CALCULATOR</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="shopmy.php">SHOPE</a></li>
           <li><a href="frequently_asked_questions.php">F.A.Q.</a></li>
           <li><a href="contact.php">CONTACT</a></li>
          
      </ul>
    </div>
  </div>
</nav>
<div ><img src="images/online_shopping.jpg" class="img-responsive">
           </div>

<div class="container">
  <div class="row">
    <div class="col-lg-2">
      </div>
     <div class="col-lg-4" >
        <div id="registration_main_frame">
 <form autocomplete="off" name="getnewmember"   id="getnewmember" method="post" action="members/new_member.php">
 <div id="registration_frame">
 <div id="registration_title_box">Register A Free Account</div>
  <div class="registration_textbox_frame" style="margin-top:30px;"><input name="firstname" id="firstname" type="text"   placeholder="First Name"   class="registration_textbox"  /></div>
  <div class="registration_textbox_frame"><input name="lastname"  id="lastname" type="text" placeholder="Last Name" class="registration_textbox" /></div>
  <div class="registration_textbox_frame"><input name="emailbox" id="emailbox" type="text"  placeholder="Your Email" class="registration_textbox" /></div>
  <div class="registration_textbox_frame"><input name="passwordbox"    id="passwordbox"  type="password"   placeholder="Password" class="registration_textbox" maxlength="10" /></div>
 <input type="hidden" id="membershipconfirm" name="membershipconfirm" value="asdi%7we" />
 <div id="registration_terms_frame2" >
 <div id="r_t_checkbox_frame"  ><input name="agreetoterms" id="agreetoterms" type="checkbox" value="" /></div>
 <div class="r_t_inner_frame" >I agree with the <a href="terms.php">Terms & Conditions.</a></div>
 </div>
 
 <div id="registration_msg_box" ><input readonly name="registration_msg" id="registration_msg" type="text" class="registration_msg_text" style="outline:none;"     />   </div>
 
 <div class="registration_textbox_frame" style="margin-top:10px;">
 <div id="registration_button" onclick="javascript:newmemberjoin();">Join Now</div>
 </div>
 
  <div id="login_bottom_line" style="width:66%;"></div>
   <div class="login_bottom_texture" style="width:90%; margin-top:30px;"><a href="login.php" >Already A Member? &nbsp;&nbsp; Sign In</a></div>
 </div>
 </form>
 </div>
    </div>
       <div class="col-lg-4">
           
 <div id="registration_text_content_frame">
 <div id="r_text_content_title">Shopping US Online Stores with &nbsp;<b><font color="#CC0000">MyShopUS</font></b> is  Easy as 1, 2, 3</div>
 
 <div class="r_text_content_inner">
 <div class="r_text_content_inner_left"><div class="r_inner_left_inside">1</div></div>
 <div class="r_text_content_inner_right"><b style="color:#06C;">Get your US Address instantly.</b> Soon after registration you will have it FREE. No payment necessary.</div>
 </div>

 <div class="r_text_content_inner">
 <div class="r_text_content_inner_left"><div class="r_inner_left_inside">2</div></div>
 <div class="r_text_content_inner_right"><b style="color:#06C;">Shop with any US online retailers.</b> Add your   US address as shipping address with mailbox number, at checkout.</div>
 </div>

 <div class="r_text_content_inner">
 <div class="r_text_content_inner_left"><div class="r_inner_left_inside">3</div></div>
 <div class="r_text_content_inner_right"><b style="color:#06C;">Add your Shipping request in  MyShopUS Dashboard.</b> We will send your package to your doorstep safely.</div>
 </div>

 </div>
 
    </div>
         <div class="col-lg-2">
      </div>
  
</div>
    </div>
 
    <br>

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
 
 <a href="pricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Privacy</a>

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
