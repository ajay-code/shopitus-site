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
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css"   />

<link rel="stylesheet" media="(max-width:1000px)" href="css/style.css" type="text/css"   />
<link rel="stylesheet" media="(max-width: 720px)" href="css/style.css" type="text/css">
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
	    var name = document.getElementById("namebox").value;
		var str = document.getElementById("email_msg").value;
		var contactmsgbox = document.getElementById("msg_box").value;
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)

	if(name == ''){
    	document.getElementById("contact_msg").value = "Pleae enter your Name.";}
	else if(str == ''){
    	document.getElementById("contact_msg").value = "Enter your Email Address.";}
	 else	if(str.indexOf(at)==-1){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	 else if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else 	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(at,(lat+1))!=-1){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(dot,(lat+2))==-1){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else 	 if (str.indexOf(" ")!=-1){
    	document.getElementById("contact_msg").value = "Incorrect Email. Please Check.";}
	else	if(contactmsgbox == ''){
    	document.getElementById("contact_msg").value = "Your message cannot be blank.";}
 	else{document.getElementById("contact_msg").value = "";
		document.contactform.submit();}
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
<div id="h_right_inner_top"> TOLL  </div>
<div id="h_right_inner_bottom"><?php echo $toll; ?></div>
</div>
</div>
</div>
</div>


  


<div id="navigator_frame" >
 <div id="navigator_inner" >
<div class="drawer"  >
<div id ="nav" >
<div class="navigator_buttons"><a href="howwework.php" class="link_color">How It Works</a><div id="menu_holder_2"><a href="how_it_works.php" class="menu  menu2">  X</a></div>
</div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="shipping_calculator.php" class="link_color">Shipping Calculator</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="newpricing.php" class="link_color">Pricing</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="deals.php" class="link_color">Shop</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="frequently_asked_questions.php" class="link_color">F. A. Q. </a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="contact.php" class="link_color">Contact</a></div>
 

 
</div>
</div>
</div>
</div>
 

 

  













 <div id="login_bottom_line" style="width:80%; margin-top:20px;"></div>

<div id="shipping_calculator_frame" style="xbackground-color:#F30; height:700px;">

<div id="contact_header">CONTACT US</div>
<div id="contact_description">
We are available 24/7 for any questions you may have. To find out about the inforamtion you need or about any of our<br />  services,    simply complete the form below and submit it to us.
Members please contact us <br />from the contact form in your account.
</div>
<div id="contact_frame">


<?php if($_GET['msg'] == "sent"){ ?>
<div id="contact_left">
<div id="mail_sent_frame"></div>
</div>
<?php } else { ?>


<div id="contact_left">
 
<form name="contactform" id="contactform" action="sendmsg.php" method="POST">
<div class="contact_left_inner"><input name="namebox" id="namebox" type="text" class="contact_text"  placeholder="Your Name" /></div>
<div class="contact_left_inner"><input name="email_msg" id="email_msg" type="text" class="contact_text" placeholder="Your Email" /></div>
<div class="contact_left_inner" style="height:200px;"><textarea name="msg_box" id="msg_box" cols="" rows="" placeholder="&nbsp;&nbsp;&nbsp;Your Message" class="contact_textarea"></textarea></div>
<input type="hidden" name="msgconfirm" id="msgconfirm" value="true" />
<div id="btn_holder" style="xbackground-color:#066;"><input name="contact_msg" id="contact_msg" type="text" class="contact_msg_txt" readonly="readonly"   /><div class="contact_btn" onclick="javascript:loginpress();"> SUBMIT </div></div>
</form>

</div>

<?php } ?>





<div id="contact_right">

<div class="contact_right_header"></div>
<div class="contact_right_header">OUR LOCATION </div>
<div class="contact_right_hr" style="width:28%;"></div>
<div class="contact_right_details">
shopitus<br />
7734, Bridgestone Drive, <br />
Orlando, Florida, <br />
32835, <br />
USA</div>


<div class="contact_right_header">TELEPHONE </div>
<div class="contact_right_hr" style="width:22%;"></div>
<div class="contact_right_details" style="height:70px;">
+1 4075329292
<br />
 </div>


<div class="contact_right_header">DIRECT EMAIL ADDRESS </div>
<div class="contact_right_hr"></div>
<div class="contact_right_details" style="height:60px;">
serviceteam@shopitus.com
 </div>


<div id="contact_right_bottom_hr"></div>
<div id="contact_right_icon_frame">
<a href="<?php echo $facebook; ?>"><div class="contact_right_icon_holder"> </div></a>
<a href="<?php echo $twitter; ?>"><div class="contact_right_icon_holder" style="background-image:url(images/social_media_icons/twitter_magenta.png);"> </div></a>
<a href="<?php echo $pinterest; ?>"><div class="contact_right_icon_holder" style="background-image:url(images/social_media_icons/pinterest_magenta.png);"> </div></a>
<a href="<?php echo $youtube; ?>"><div class="contact_right_icon_holder" style="background-image:url(images/social_media_icons/youtube_magenta.png);"> </div></a>
<a href="<?php echo $viber; ?>"><div class="contact_right_icon_holder" style="background-image:url(images/social_media_icons/viber_magenta.png);"> </div></a>
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
<font style="font-size:16px">Toll  : <?php echo $toll_free_number ?></font><br />
<font style="font-size:12px">www.shopitus.com</font>
</div></div>

</div>






<div id="footer_links_2_frame">
<div class="footer_links_2">
<a href="index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="howwework.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
 
 <a href="newpricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="deals.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F. A. Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact</a>

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
