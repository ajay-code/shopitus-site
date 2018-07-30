<?php
session_start();

include("../external_links.php");
include("../config.php");


if(($_SESSION['emailadrs'] == '') && ($_SESSION['password'] == '')){

			 header("Location: ../login.php");
			 die();  	
}else{
	$memberemail = $_SESSION['emailadrs'];
	$memberpass =  $_SESSION['password'];
	
		  $sql1 = "SELECT * FROM  `members` WHERE email = '$memberemail' && password = '$memberpass'";
		  $results1 = mysql_query($sql1,$connection) or die(mysql_error());
		  $row1 = mysql_fetch_assoc($results1);
 		  $mememail = $row1['email'];
		  $mempass =  $row1['password'];
		  $firstname =  $row1['first_name'];
		  $lastname = $row1['last_name'];

}


$emailadrs = $_SESSION['emailadrs']; 
 
		  $subsql = "SELECT * FROM  `subscription` WHERE   email =  '$emailadrs'";
		  $subresults = mysql_query($subsql,$connection) or die(mysql_error());
		  $subrow = mysql_fetch_assoc($subresults);
		  
		  $plan =  $subrow['plan'];
		  $starting_date = $subrow['start_date'];
		  $ending_date = $subrow['end_date'];
		  
		  $today = date("Y-m-d");
		  
		  
		  
		  if ($starting_date == ''){$status =  ""; } else if($today < $ending_date){ $status =  "active"; }else if ($today >= $ending_date){$status =  "expired";}  
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
<div class="member_panel_left_inner" style="height:300px;">
<div class="member_panel_left_title">MY US ADDRESS</div>
<div class="member_panel_left_inner_title" > Postal Address</div>
		<div class="member_panel_left_adrs" style="line-height:24px;  margin-top: 5px; xbackground-color:#0C0;">
		<?php  
				echo $firstname." ".$lastname."<br /> 7734, Bridgestone Drive, <br /> Orlando, Florida, <br /> 32835, <br /> USA"; 
		?>
		</div>
 <div class="member_panel_left_inner_title">Phone No.</div>
<div class="member_panel_left_adrs" style="margin-top:5px;"> +1.4075329292</div>
  

</div>


<div class="member_panel_left_inner" style="height:146px; margin-top:2px;">
		<div class="member_panel_left_title">MY SUBSCRIPTION</div>
        
        <?php
			if($status == ''){
		?>		
           <a href = "../pricing.php"><div class="member_panel_left_inner_title_link"><u>Purchase a Subscription Plan</u></div></a>
        <?php
			} else {
		?>
        		<div class="member_panel_left_inner_title" style="xbackground-color:#F90;">Plan : Basic</div>
                <div class="member_panel_left_inner_title" style="xbackground-color:#F90; margin-top:15px;">
                		Status : 
                        <?php if($status == "active"){ ?>
                        <div id="subscription_status">Active</div>
                        <?php }else { ?>
                        <div id="subscription_status" style="background-color:#F00;">Renew</div>
                        <?php } ?>
                
                </div>
          <?php
			}
		  ?>       
</div>



</div>






<div id="member_panel_right">
<div id="member_panel_button_frame">
<a href="index.php"><div class="member_buttons" id="mbtn2" onmouseover="javascript:changecolor2();" onmouseout="javascript:backtomain2();">ADD NEW PACKAGE</div></a>
<a href="packages_expected.php"><div class="member_buttons" id="mbtn3" onmouseover="javascript:changecolor3();" onmouseout="javascript:backtomain3();">PACKAGES EXPECTED</div></a>
<div class="member_buttons" style="background-color:#14A6FA; color:#fff;" >PACKAGES RECEIVED</div>
<a href="packages_sent.php"><div class="member_buttons" id="mbtn4" onmouseover="javascript:changecolor4();" onmouseout="javascript:backtomain4();">PACKAGES SENT</div></a>
<a href="edit_account.php"><div class="member_buttons" id="mbtn5" onmouseover="javascript:changecolor5();" onmouseout="javascript:backtomain5();" style="margin-left:1.5px;">ACCOUNT</div></a>
</div>






<div id="member_panel_detail_frame">

<?php

if($status == "active"){
		  $sql1 = "SELECT * FROM  `packages_received` WHERE email = '$memberemail'";
		  $results1 = mysql_query($sql1,$connection) or die(mysql_error());
		  $total = mysql_num_rows($results1);
 		  if($total >6){$changestyle = "overflow-y:scroll; height:270px;";}else{$changestyle = '';}
		   
		   
		  if($total == ''){
					echo "<div id='packages_expected_msg_frame'>";
                    echo "<input  type='text' style='background-color:#ECECEC; border:0px;' value='NO PACKAGES RECEIVED SO FAR.' class='p_e_texture' readonly/>";
                    echo "</div>";

		   }else {	
		   		 
					  
		 
 ?>


  
<div id="pacakges_expected_main" style="background-color:#FFF;">
<div id="packages_expected_top"><div class="packages_expected_titles" style="margin-left:130px;">TRACKING NO.</div><div class="packages_expected_titles" style="margin-left:300px;">STATUS</div></div>
<div id="packages_expected_data_frame"style="background-color:#FFF; <?php echo $changestyle; ?>">

<?php
			

			for($k=0; $k<$total; $k++){
		    $row1 = mysql_fetch_assoc($results1);
			$tracking[] = $row1['tracking'];
			$price[] = $row1['total'];
			$payment[] = $row1['paid'];
 		     


?>
<div class="packages_received_row">
<div class="packages_received_row_left"><?php echo $k+1;  ?></div>
<div class="packages_received_row_mid" style="width:400px;"><?php echo $tracking[$k]; ?> </div>
<div class="packages_received_btn_frame" >
<?php if($payment[$k] == 'yes') {?>
<div class="ready_to_deliver_btn">READY TO DELIVER</div>
<?php } else { ?>
<div class="unpaid_btn">UNPAID</div><div class="paynow_btn">PAY&nbsp;&nbsp; NOW</div>

<?php } ?>
 </div>
 
<div class="packages_received_row_mid_bottom" style="width:350px;">
<div class="pr_mb_1">DELIVERY COST:</div>
<div class="pr_mb_2">US$ <?php echo $price[$k]; ?></div>
</div>
</div>





 <?php
			 
}
}
}

?>




 
</div>
<div id="packages_expected_data_frame_bottom_separator"></div>
</div>  
 
</div>










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
<font style="font-size:16px">Toll Free USA : <?php echo $toll_free_number ?></font><br />
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
