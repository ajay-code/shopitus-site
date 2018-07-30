<?php
session_start();
include("config.php");
include("external_links.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>shopitus.com</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="css/1000px.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="css/720px.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
 
 
</head>

<body id="home">
<div class="container">

<div id="header">

<div id="header_inner">
<div id="h_left">

<div id="h_left_top">
<div id="h_left_top_inner_left" >SHIPPED DIRECTLY FROM USA</div>
<div id="menu_holder"><a href="#" class="menu"><span>&equiv;</span> Menu</a></div>
</div>

<div id="h_left_bottom"><a href="index.php"><img src="images/title.jpg" /></a></div>



</div>


<div id="h_mid">
<div id="h_mid_inner">
<?php

if($_SESSION['memberpass'] == "valid")
{
	
?>
<a href="members/index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; font-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="logout.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

<?php
}else{
?>
<a href="register.php"><div class="h_mid_inner_button">Join</div></a><a href="login.php"><div class="h_mid_inner_button">Login</div></a>
<?php
}
?>
</div>
</div>

<div id="h_right">
<div id="h_right_inner">
<div id="h_right_inner_top"> TOLL FREE USA </div>
<div id="h_right_inner_bottom"><?php echo $toll_free_number; ?></div>
</div>
</div>
</div>
</div>


  


<div id="navigator_frame" >
 <div id="navigator_inner" >
<div class="drawer"  >
<div id ="nav" >
<div class="navigator_buttons"><a href="how_it_works.php" class="link_color">How It Works</a><div id="menu_holder_2"><a href="how_it_works.php" class="menu  menu2">  X</a></div>
</div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="shipping_calculator.php" class="link_color">Shipping Calculator</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="pricing.php" class="link_color">Pricing</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="shop.php" class="link_color">Shop</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="frequently_asked_questions.php" class="link_color">F. A. Q. </a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="contact.php" class="link_color">Contact</a></div>
 

 
</div>
</div>
</div>
</div>
 

<div id="main_image_frame"  ></div>


<div id="main_blue_bar"  >
<div id="blue_bar_top_content" >
Shop the most popular US online stores Now!
<br />
Get them shipped to Australia or NewZeland right away.
</div>
<div class ="blue_bar_join_button" style="cursor:pointer;"><a href="register.php">Join Now</a></div>
<div id="blue_bar_footer">IT'S FREE TO REGISTER</div>
</div>

<div id="main_blue_bar_separator"></div>


<div id="icon_main_frame">
<div id="icon_frame">
<div class="icons"><div class="icons_inner"><a href="http://www.forever21.com"><img src="images/shop_logos/forever.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.macys.com/?cm_mmc=Google_Trademark_International-_-Macys+Trademark+Exact+AUS+-+G_Macy%27s+Australia-_-43773977374-_-macys._e_c_kclickid_92709dca-0c13-4bb0-b43b-0abb145c9f7e&amp;trackingid=407x78561&amp;gclid=CjwKEAiArvTFBRCLq5-7-MSJ0jMSJABHBvp0IFYR39mtVIXxLKPh1zW8OvrAPlCkckQhOt5KQ2kA6xoCXubw_wcB"><img src="images/shop_logos/macys.jpg" style="max-width:100%;height:auto;" /></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.overstock.com/"><img src="images/shop_logos/overstock.jpg" alt="overstock" longdesc="https://www.overstock.com/" /></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.amazon.com/"><img src="images/shop_logos/amazon.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.disney.com/"><img src="images/shop_logos/disney.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.ronjonsurfshop.com/"><img src="images/shop_logos/ronjon2.jpg" alt="ronjon" longdesc="http://www.ronjonsurfshop.com/" /></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.beallsflorida.com/?&amp;cm_mmc=PaidSearch-_-Florida+Brand+Alpha-_-PPCGoogle-_-beall&amp;gclid=CjwKEAiArvTFBRCLq5-7-MSJ0jMSJABHBvp0bZkc57d2ScxX9rv4SDhI6pEA1sF7dhsge3K_i99C9BoCoQ7w_wcB"><img src="images/shop_logos/bealls.jpg" style="max-width:100%;height:auto;" /></a> </div></div>

<div class="icons"><div class="icons_hr_line"></div><div class="icons_inner"><a href="http://www.kapitolreef.com/"><img src="images/shop_logos/kapitol.jpg" alt="kapitol" longdesc="http://www.kapitolreef.com/" /></a></div><div class="icons_hr_line"></div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.williams-sonoma.com/pages/williams-sonoma-home/"><img src="images/shop_logos/WillSonom.jpg" alt="willsonom" longdesc="http://www.williams-sonoma.com/pages/williams-sonoma-home/" /></a></div><div class="icons_hr_line"></div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.walmart.com/"><img src="images/shop_logos/walmart.jpg"  style="max-width:100%;height:auto;"/></a></div><div class="icons_hr_line"></div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.ebay.com/"><img src="images/shop_logos/ebay.jpg"  style="max-width:100%;height:auto;"/></a></div><div class="icons_hr_line"></div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.apple.com/"><img src="images/shop_logos/apple.jpg"  style="max-width:100%;height:auto;"/></a></div><div class="icons_hr_line"> </div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.thebodyshop-usa.com/"><img src="images/shop_logos/body_shop.jpg" style="max-width:100%;height:auto;"/></a></div><div class="icons_hr_line"></div></div>
<div class="icons"><div class="icons_hr_line"></div><div class="icons_left_line"></div><div class="icons_inner"><a href="http://shop.nordstrom.com/"><img src="images/shop_logos/nordstorm.jpg" style="max-width:100%;height:auto;"/></a></div><div class="icons_hr_line"></div></div>

<div class="icons"><div class="icons_inner"><a href="http://www.gap.com/"><img src="images/shop_logos/gap.jpg" style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.toysrus.com/"><img src="images/shop_logos/toysrus.jpg" style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.zappos.com/"><img src="images/shop_logos/zappos.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.victoriassecret.com/"><img src="images/shop_logos/victorias_secret.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="http://www.neimanmarcus.com/"><img src="images/shop_logos/neiman_marcus.jpg"  style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.lego.com/"><img src="images/shop_logos/lego.jpg" style="max-width:100%;height:auto;"/></a></div></div>
<div class="icons"><div class="icons_left_line"></div><div class="icons_inner"><a href="https://www.ebeauty.com/"><img src="images/shop_logos/ebeauty.jpg" style="max-width:100%;height:auto;"/></a></div></div>

</div>
</div>







<div id="shipping_calculator_frame"  >
<div id="shipping_calculator_heading"> Check our shipping calculator for special rates on Australia & NewZeland </div>
<div id="shipping_calculator_btn_holder">
<div class="shipping_calculator_button" style="cursor:pointer;"><a href="shipping_calculator.php">Calculate Now</a></div>
</div>
</div>


 

<div id="full_service_shipping_frame" >
<div id="full_service_shipping_left"><img src="images/destinations.jpg" style="max-width:100%; max-height:100%; display: block; margin-left: auto; margin-right: auto;"/></div>
<div id="full_service_shipping_right" >  
<div id="full_service_shipping_right_top">Full Service Shipping & Handling to Any Destination </div>
<div id="full_service_shipping_right_middle" >
  <h3>What we do</h3>
  <p><em>Your Name – Your Payment* - Your Billing Address – Our Shipping Address - Simple</em></p>
  <p>Many businesses in the US won&rsquo;t ship overseas or accept an overseas credit card – instead of missing out on the great prices offered to US consumers take action and let US to OZ finalise the purchase for you.</p>
  <p>You see, we act as your US postal address. You get the goods shipped to us and for a small fee we forward them on to you, saving you plenty of money in the process. If they don&rsquo;t accept your credit card we can make the purchase on your behalf. Simple.</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>See details of <a href="https://www.ustooz.com/services">our services.</a></p>
  <p>&nbsp;</p>
  <p><br />
    <br />
  </p>
</div>
</div>

</div>


<div id="bottom_image"><img src="images/package_delivery.jpg"  style="max-width:100%; max-height:100%;" /></div>

<div id="bottom_image_colorframe_frame">
<div id="bottom_image_colorframe_heading">Safe & Fast Delivery to Your Doorstep</div>
<div id="bottom_image_colorframe_textframe">
<div id="bottom_image_colorframe_text_left"><div id="bottom_image_c_f_text_left_inner">

We do care about fast order delivery. We guarantee that your package will be at your doorstep right on time.
<br /><br />
</div></div>

<div id="bottom_image_c_f_mid_separator"></div>

<div id="bottom_image_colorframe_text_right">
<div id="bottom_image_colorframe_text_right_720">

<div class="bottom_image_c_f_text_right_inner">
<div class="bottom_image_c_f_text_right_inner_icon"><div class="icon_circle"></div></div>
<div class="bottom_image_c_f_text_right_inner_icon"><div class="icon_circle"></div></div>
<div class="bottom_image_c_f_text_right_inner_icon"><div class="icon_circle"></div></div>
</div>


<div id="bottom_image_content_frame" >
<div class="bottom_image_c_f_text_right_inner_content">Any fragile package  that needs care.</div>
<div class="bottom_image_c_f_text_right_inner_content">Documents that should reach on time.</div> 
<div class="bottom_image_c_f_text_right_inner_content">Large hardware direct to your   yard.</div> 
</div>

</div>
</div>
</div>
</div>






<div id="bottom_text_frame"><div class="bottom_text_frame_separator_top"></div>
<div id="bottom_text_frame_header">Advantage of Selecting Us </div><div class="bottom_text_frame_separator_top"></div>
<div id="bottom_text_frame_top_content">
We provide a unique service for anyone in Australia or NewZealand as our shipping process <br />
only handles packages to these two countries. <br />
You can be rest assured without any delay your item will be shipped to your home located anywhere <br />
in Australia and NewZealand direct from our wherehouse in USA.<br />
Our service is regularly requested by many Aussies and Kiwis from ordinary households to <br />
Multi-National Companies.
</div> 
<div id="bottom_text_frame_separator"></div>

<div class="bottom_text_frame_separator_top" style="height:30px;"></div>
<div id="bottom_text_frame_bottom_content">
Unlike some other shipping agencies, we handle extra large packages too. From Audio Rack Systems <br />
to Stage Lighting & Sounds, <br />
from Auto parts to Vehicles & Boats and from hand held wood cutters to large chipper trucks. <br />
Please make sure to check our Shipping Calculator and if your are not clear <br />
about anything contact us by phone, fax or e-mail. <br />
You can also use the mail form and get all the information you require.

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
<div id="footer_map_content">
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
 
 <a href="pricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F. A. Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact</a>

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

 






</div>




 


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
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
