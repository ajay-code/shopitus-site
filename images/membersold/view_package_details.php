<?php
session_start();

include("../external_links.php");
include("../config.php");



// redirect to login if 'memberpass' session_variable is not valid.
 if(($_SESSION['memberpass'] != "valid")) 
{
	header("Location: ../login.php");
	die();
}

$getorderid = $_GET['orderid'];
$getemail = $_SESSION['emailadrs'];



		  $sql = "SELECT * FROM  `packages_expected` WHERE email = '$getemail' && sn = '$getorderid'";
		  $results = mysql_query($sql,$connection) or die(mysql_error());
		  $row = mysql_fetch_assoc($results);
 		  $tracking = $row['tracking'];
		  $name =  $row['name'];
		  $address = $row['address'];
		  $origin = $row['origin'];
		  $destination = $row['destination'];
		  $value = $row['value'];
		  $courier = $row['courier'];
		  
   
?>


  
   

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShopUs.com</title>

<link rel="stylesheet" href="../css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="../css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="../css/style.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="../css/style.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="../css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="../css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>


<script type="text/javascript">
function changecolor2(){
document.getElementById("mbtn2").style.color = "#fff"; // forecolor
document.getElementById("mbtn2").style.backgroundColor = "#14A6FA"; // backcolor	
}
function changecolor3(){
document.getElementById("mbtn3").style.color = "#fff"; // forecolor
document.getElementById("mbtn3").style.backgroundColor = "#14A6FA"; // backcolor	
}
function changecolor4(){
document.getElementById("mbtn4").style.color = "#fff"; // forecolor
document.getElementById("mbtn4").style.backgroundColor = "#14A6FA"; // backcolor	
}
function changecolor5(){
document.getElementById("mbtn5").style.color = "#fff"; // forecolor
document.getElementById("mbtn5").style.backgroundColor = "#14A6FA"; // backcolor	
}

function backtomain2(){
document.getElementById("mbtn2").style.color = "#036"; // forecolor
document.getElementById("mbtn2").style.backgroundColor = "#D5E4F0"; // backcolor		
}
function backtomain3(){
document.getElementById("mbtn3").style.color = "#036"; // forecolor
document.getElementById("mbtn3").style.backgroundColor = "#D5E4F0"; // backcolor		
}
function backtomain4(){
document.getElementById("mbtn4").style.color = "#036"; // forecolor
document.getElementById("mbtn4").style.backgroundColor = "#D5E4F0"; // backcolor		
}
function backtomain5(){
document.getElementById("mbtn5").style.color = "#036"; // forecolor
document.getElementById("mbtn5").style.backgroundColor = "#D5E4F0"; // backcolor		
}

 
</script> 
 
</head>

<body id="home" >
<div class="container" style="xbackground-color:#6F3;">

<div id="header">

<div id="header_inner">
<div id="h_left">

<div id="h_left_top">
<div id="h_left_top_inner_left" >SHIPPED DIRECTLY FROM USA</div>
<div id="menu_holder"><a href="../#" class="menu"><span>&equiv;</span> Menu</a></div>
</div>

<div id="h_left_bottom"><a href="../index.php"><img src="../images/title.jpg" /></a></div>



</div>


<div id="h_mid">
<div id="h_mid_inner" style="width:45%; xbackground-color:#FC0;">

<a href="index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; font-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="../logout.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

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
<div class="navigator_buttons"><a href="../how_it_works.php" class="link_color">How It Works</a><div id="menu_holder_2"><a href="../how_it_works.php" class="menu  menu2">  X</a></div>
</div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../shipping_calculator.php" class="link_color">Shipping Calculator</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../pricing.php" class="link_color">Pricing</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../shop.php" class="link_color">Shop</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../frequently_asked_questions.php" class="link_color">F. A. Q. </a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../contact.php" class="link_color">Contact</a></div>
 

 
</div>
</div>
</div>
</div>
 

 

  


























 <div id="shipping_calculator_frame" style="xbackground-color:#F30; height:670px;">
 <div id="registration_top" > </div>
  
  
<div id="member_title">MEMBER PANEL</div>
<div id="member_panel_frame">

<div id="member_panel_left">
<div id="member_panel_left_inner">
<div id="member_panel_left_title">MY US ADDRESS</div>
<div class="member_panel_left_inner_title"> Name</div>
<div class="member_panel_left_adrs">client name goes here</div>
<div class="member_panel_left_inner_title"> Address </div>
<div class="member_panel_left_adrs">7734 Bridgestone Drive</div>
<div class="member_panel_left_inner_title"> City</div>
<div class="member_panel_left_adrs">Orlando</div>
<div class="member_panel_left_inner_title"> State</div>
<div class="member_panel_left_adrs">Florida</div>
<div class="member_panel_left_inner_title"> Zip</div>
<div class="member_panel_left_adrs">32835</div>
<div class="member_panel_left_inner_title">Phone No.</div>
<div class="member_panel_left_adrs"> +1.4075329292</div>
  

</div>
</div>

<div id="member_panel_right">
<div id="member_panel_button_frame">
<a href="index.php"><div class="member_buttons" id="mbtn2" onmouseover="javascript:changecolor2();" onmouseout="javascript:backtomain2();" >ADD NEW PACKAGE</div></a>
<a href="packages_expected.php"><div class="member_buttons" style="background-color:#14A6FA; color:#fff;" >PACKAGES EXPECTED</div></a>
<a href="packages_received.php"><div class="member_buttons" id="mbtn3" onmouseover="javascript:changecolor3();" onmouseout="javascript:backtomain3();">PACKAGES RECEIVED</div></a>
<a href="packages_sent.php"><div class="member_buttons" id="mbtn4" onmouseover="javascript:changecolor4();" onmouseout="javascript:backtomain4();">PACKAGES SENT</div></a>
<a href="edit_account.php"><div class="member_buttons" id="mbtn5" onmouseover="javascript:changecolor5();" onmouseout="javascript:backtomain5();" style="margin-left:1.5px;">ACCOUNT</div></a>
</div>

 
<div id="member_panel_detail_frame" style=" xbackground-color:#366;">        <!-- Member Panel Detail Frame Starts -->
<?php
 if (strlen($tracking) <= 4){
?>

<div class="add_new_titles" style="width:auto; height:35px; float:left; margin-left:200px; margin-top:135px; xbackground-color:#F90;">SORRY! THERE IS NO SUCH PACKAGE REGISTERED UNDER YOUR NAME.</div>
<div class="add_new_titles" style="width:auto; height:55px; margin-left:335px; margin-top:0px; xbackground-color:#F90;">PLEASE CHECK AGAIN.</div>


<?php
} else {

?>
<div class="add_new_titles" style="width:auto; height:55px; margin-left:315px; margin-top:50px; xbackground-color:#F90;"><u>DETAILS OF YOUR PACKAGE</u></div>
<div id="member_panel_detail_inner" style="width:86%;  xbackground-color:#6CC;">        <!-- Member Panel Detail Inner Starts -->

 

  
  

<div class="member_panel_data_title_frame" style=" height:35px; xbackground-color:#9F9; float:left;">
<div class="add_new_titles" >TRACKING NO:</div>
<div class="add_new_titles" style="margin-left:10px; color:#777;"><?php echo $tracking; ?></div>
<div class="add_new_titles" style=" float:right; margin-right:8px; color:#777;"><?php echo $origin; ?></div>
<div class="add_new_titles" style=" float:right; margin-right:12px;">COUNTRY OF ORIGIN:</div>
</div>  

<div class="member_panel_data_title_frame" style="height:auto; float:left; margin-top:12px; xbackground-color:#036;">
<div class="add_new_titles" style=" xbackground-color:#CC6;">RECEPIENT'S NAME & ADDRESS: </div>
<div class="add_new_titles" style="width:505px; height:auto; margin-left:10px; color:#777;  xbackground-color:#F9F;"><?php echo $name; ?></div>
<div class="add_new_titles" style="width:505px; height:auto; margin-left:10px; color:#777;  xbackground-color:#F9F;"><?php echo $address; ?></div>
</div>  
  
<div class="member_panel_data_title_frame" style="margin-top:35px; xbackground-color:#9F9; float:left;">
<div class="add_new_titles">COUNTRY OF DESTINATION:</div>
<div class="add_new_titles" style="margin-left:10px; color:#777;"><?php echo strtoupper($destination);?></div>
<div class="add_new_titles" style="margin-left:60px;">PACKAGE VALUE:</div>
<div class="add_new_titles" style="margin-left:10px; color:#777;">US$ <?php echo $value; ?></div>
<div class="add_new_titles" style=" float:right; margin-right:8px; color:#777;"><?php echo strtoupper($courier); ?></div>
<div class="add_new_titles" style=" float:right; margin-right:12px;">PREFERRED COURIER:</div>
</div>  
  
  

<div id="client_declaration_frame">
 <div id="client_declaration_inner">
</div>
</div>

<div id="client_declaration_bottom">
<div id="client_declaration_msg"><input name="confirmmsg" id="confirmmsg" type="text" style="width:250px; float:left; border:0px; background-color:#f7f7f7; font-family:Arial, Helvetica, sans-serif; font-size:12px; font-weight:700; color:#F00;" readonly="true"  /> </div>
<a href="packages_expected.php"><div class="add_new_btn_frame">BACK</div></a>
</div>  

 
</div> <!-- Member Panel Detail Inner Ends -->
<?php
}
?>
</div> <!-- Member Panel Detail Frame Ends -->














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
<div id="footer_map"><img src="../images/aus-nz_map.png" style="max-width:70%; max-height:100%; display: block; margin-left: auto; margin-right: auto;"/></div>


<div id="footer_inner_right">
<div id="footer_icon_holder2">
<div id="footer_icon_holder">
<div class="footer_icons"><img src="../images/card_icons/amex.png"  style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="../images/card_icons/discover.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="../images/card_icons/paypal.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="../images/card_icons/visa.png" style="max-width:100%; max-height:100%; display: block;"/></div>
<div class="footer_icons"><img src="../images/card_icons/mastercard.png" style="max-width:100%; max-height:100%; display: block;"/></div>
</div>
</div>
</div>


<div id="footer_map_content2">
<div id="footer_map_content">
SHOP USA<br />
SHIP AUSTRALIA <br />
<font style="font-size:16px">Backed by 24/7 US support</font><br />
<font style="font-size:16px">Toll Free USA : 2345343</font><br />
<font style="font-size:12px">www.myshopus.com</font>
</div></div>

</div>






<div id="footer_links_2_frame">
<div class="footer_links_2">
<a href="../index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="../how_it_works.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="../shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
 
 <a href="../pricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="../shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="../frequently_asked_questions.php">F. A. Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="../contact.php">Contact</a>

</div>
<div id="footer_social_icons">
<div class="social_icons" style="margin-left:0px;"><a href="../<?php echo $facebook; ?>"><img src="../images/social_media_icons/facebook.png" /></a></div>
<div class="social_icons"><a href="../<?php echo $twitter; ?>"><img src="../images/social_media_icons/twitter.png" /></a></div>
<div class="social_icons"><a href="../<?php echo $pinterest; ?>"><img src="../images/social_media_icons/pinterest.png" /></a></div>
<div class="social_icons"><a href="../<?php echo $youtube; ?>"><img src="../images/social_media_icons/youtube.png" /></a></div>
<div class="social_icons"><a href="../<?php echo $viber; ?>"><img src="../images/social_media_icons/viber.png" /></a></div>
 
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
