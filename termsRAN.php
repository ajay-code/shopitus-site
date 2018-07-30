<?php
session_start();
include("config.php");
include("external_links.php");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShopUs.com</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="css/1000px.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="css/720px.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">

function clearboxes(){
document.getElementById("memberemail").value = '';
document.getElementById("memberpass").value = '';
}

function loginpress(){
		var str = document.getElementById("memberemail").value;
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)

	
	if(str == ''){
    	document.getElementById("login_msg").value = "Enter your Email Address.";}
	 else	if(str.indexOf(at)==-1){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	 else if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	else 	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(at,(lat+1))!=-1){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(dot,(lat+2))==-1){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	else 	 if (str.indexOf(" ")!=-1){
    	document.getElementById("login_msg").value = "Incorrect Email. Please Check.";}
	 else	if(document.getElementById("memberpass").value == ''){
    	document.getElementById("login_msg").value = "Password is Required";}
 	else{document.loginform.submit();}
}

</script> 
 
</head>

<body id="home" onload="javascript:clearboxes();">
<div class="container" style="xbackground-color:#6F3;">

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
<div id="h_mid_inner" style="width:45%;">
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
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="739" height="2688" border="1" align="center">
  <tr>
    <td width="729"><h3>Terms and Conditions</h3>
      <h5>Privacy</h5>
      <p>We understand that privacy is important to you. Via our order form we do need to collect personal information including your mailing address, contact number and your full name but please be assured that at no stage will this information be sold, rented or traded to any third parties.</p>
      <p>Certain information is pertinent to us being able to complete customs forms – all orders require a purchase invoice/receipt (excluding iTunes which have no postage) so that we can complete these forms accurately.</p>
      <h5>Promotions</h5>
      <p>From time to time we may email you promotions for our services. These emails will contain an unsubscribe link you may use if you no longer wish to receive these emails.</p>
      <h5>Links</h5>
      <p>We are happy for you to link to our site. It is your responsibility to maintain the currency of your links to our site. We reserve the right to deny any person permission to link to our site.</p>
      <h5>Import duties and taxes</h5>
      <p>While our shipping rates include all shipping and handling costs, you may still be responsible for certain Import Duties and Taxes levied against your shipment by your country. US to OZ Pty Ltd will not be liable for any additional fees charged, nor will US to OZ Pty Ltd be held responsible for any delays in shipping associated with customs difficulties. For more information, we suggest contacting your local customs office.</p>
      <h5>First Class International Mail</h5>
      <p>If the customer chooses First Class International (which offers no insurance and no tracking) for the method of shipping, they choose to do so at their own risk and at no time will US to OZ Pty Ltd be liable for any lost or missing packages, or any damage to goods incurred during shipping.</p>
      <h5>Sales Tax</h5>
      <p>From time to time the sales tax (if applicable) amount will change from when we do the initial product quote to what is actually charged to our card. In the event that this occurs the difference will be either added or subtracted to our service fee.</p>
      <h5>Coupon Codes</h5>
      <p>Only one coupon code per order may be used.</p>
      <h5>Insurance Claims</h5>
      <p>Whilst it is the responsibility of US to OZ to safely hand over your package to our carrier, it isn't the responsibility of US to OZ to ensure delivery occurs. Whilst loss or damage is very uncommon we encourage you to select an insured postage option. We offer insurance (covering the cost of goods) on every single package.</p>
      <h5>Electrical Goods</h5>
      <p>Due to the difference between the voltage in the US and Australia, US to OZ Pty Ltd holds no responsibility if the item purchased does not support Australian voltage. It is the responsibility of the purchaser to confirm voltage compatability.</p>
      <h5>Items containing wood</h5>
      <p>Items which are made of wood or contain wood may atttract attention from AQIS and could incur additional charges which are not part of the shipping cost. US to OZ Pty Ltd will not be liable for any additional fees levied by AQIS associated with the delivery of these items and it is the responibility of the client/receipient to pay any fees levied.</p>
      <h5>Shipping cost estimates</h5>
      <p>We are most happy to provide shipping cost estimates, however these amounts are estimates based on estimated shipping weights and dimensions and the actual shipping cost could vary once we know the actual shipping weight and dimensions. Actual shipping costs may also vary from the day of the quote to the day of shipment due to carriers altering their prices.</p>
      <h5>Other Services</h5>
      <p>If you place an order through us that requires any service not offered by us under normal circumstances - refer to our services menu - our minimum fee may increase. We will advise you prior to invoice of these additional charges.</p>
      <h5>Shipping via Sea</h5>
      <p>The supplier/seller is responsible for ensuring that your order is adequately packed for the purposes of international shipping by sea. Unless by prior arrangement, there is no repacking service for items shipped via sea. Orders which are not sufficiently packed for international shipping may not be covered under the sea freight carrier's insurance policy.</p>
      <h5>Packages rejected by carriers</h5>
      <p>Please read the list of restricted items very carefully and when in doubt, email us before completing your purchase. If any of our carriers reject your shipment for any reason, the postage is not recoverable.</p>
      <h5>Sellers</h5>
      <p>Please note that we do not guarantee the product or the seller, we simply ship the items.</p></td>
  </tr>
</table>
<p>&nbsp;</p>
 

 
</div>
</div>
</div>
</div>
 

 

  















 <div id="shipping_calculator_frame" style="xbackground-color:#F30; height:600px;">

 
 
 
 
 
 
 
 


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
<font style="font-size:16px">Toll Free USA : <?php echo $toll_free_number ?></font><br />
<font style="font-size:12px">www.myshopus.com</font>
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
