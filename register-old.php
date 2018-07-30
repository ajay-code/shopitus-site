<?php
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
<title>MyShopUs.com</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="css/style.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="css/style.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
function emailmsg(){
	var emailexists = <?php echo $emailvalidator; ?>
	if(emailexists == 1){
		document.getElementById("registration_msg").value = "Email already in use. Please use a different email";
	}else {
	    document.getElementById("registration_msg").value = "";
}
}
function clearboxes(){
document.getElementById("firstname").value = '';
document.getElementById("lastname").value = '';
document.getElementById("emailbox").value = '';
document.getElementById("passwordbox").value = '';
 }
window.onload = clearboxes;
function newmemberjoin(){


		var str = document.getElementById("emailbox").value;
		var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)


	var regex = /^[a-zA-Z]*$/;

 	if(document.getElementById("firstname").value == ""){
    	document.getElementById("registration_msg").value = "Enter your First Name";}
	else  if (!regex.test(document.getElementById("firstname").value)) {
			document.getElementById("registration_msg").value = "First Name Cannot Have Numbers or Symbols";}
	 else	if(document.getElementById("lastname").value == ''){
    	document.getElementById("registration_msg").value = "Enter your Last Name";}
		else  if (!regex.test(document.getElementById("firstname").value)) {
			document.getElementById("registration_msg").value = "Last Name Cannot Have Numbers or Symbols";}
	 else	if(str == ''){
    	document.getElementById("registration_msg").value = "Enter your Email Address.";}
	 else	if(str.indexOf(at)==-1){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	 else if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	else 	if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(at,(lat+1))!=-1){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	else	 if (str.indexOf(dot,(lat+2))==-1){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	else 	 if (str.indexOf(" ")!=-1){
    	document.getElementById("registration_msg").value = "Incorrect Email. Please Check.";}
	 else	if(document.getElementById("passwordbox").value == ''){
    	document.getElementById("registration_msg").value = "Password is Required";}
 	else if(!document.forms["getnewmember"].agreetoterms.checked)
	{
		document.getElementById("registration_msg").value = "You have to agree to Terms & Conditions";}
	else{ document.getnewmember.submit();}

}



</script>

</head>

<body id="home" onload="javascript:clearboxes(); javascript:emailmsg();">
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
<div id="h_mid_inner">
<a href="register.php"><div class="h_mid_inner_button">Join</div></a><a href="login.php"><div class="h_mid_inner_button">Login</div></a>
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




















 <div id="shipping_calculator_frame" style="xbackground-color:#F30; height:740px;">
 <div xid="s_c_main_image"></div>







 <div id="registration_top"></div>
 <div id="registration_main_frame">


 <form autocomplete="off" name="getnewmember"   id="getnewmember" method="post" action="members/new_member.php">
 <div id="registration_frame">
 <div id="registration_title_box">Register A Free Account</div>
  <div class="registration_textbox_frame" style="margin-top:30px;"><input name="firstname" id="firstname" type="text"   placeholder="First Name"   class="registration_textbox"  /></div>
  <div class="registration_textbox_frame"><input name="lastname"  id="lastname" type="text" placeholder="Last Name" class="registration_textbox" /></div>
  <div class="registration_textbox_frame"><input name="emailbox" id="emailbox" type="text"  placeholder="Your Email" class="registration_textbox" /></div>
  <div class="registration_textbox_frame"><input name="passwordbox"    id="passwordbox"  type="password"   placeholder="Password" class="registration_textbox" maxlength="10" /></div>
 <input type="hidden" id="membershipconfirm" name="membershipconfirm" value="asdi%7we" />
 <div id="registration_terms_frame">
 <div id="r_t_checkbox_frame"><input name="agreetoterms" id="agreetoterms" type="checkbox" value="" /></div>
 <div class="r_t_inner_frame">I agree with the <a href="TOS1.php">Terms & Conditions.</a></div>
 </div>

 <div id="registration_msg_box" ><input readonly name="registration_msg" id="registration_msg" type="text" class="registration_msg_text" style="outline:none;"     />   </div>

 <div class="registration_textbox_frame" style="margin-top:10px;">
 <div id="registration_button" onclick="javascript:newmemberjoin();">Join Now</div>
 </div>

  <div id="login_bottom_line" style="width:66%;"></div>
   <div class="login_bottom_texture" style="width:90%; margin-top:30px;"><a href="login.php" >Already A Member? &nbsp;&nbsp; Sign In</a></div>
 </div>
 </form>





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
