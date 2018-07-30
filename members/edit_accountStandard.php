<?php
session_start();
include("../external_links.php");
include("../config.php");

 if(($_SESSION['memberpass'] != "valid")) 
{
	header("Location: ../login.php");
	die();
}else{
	
$memberemail = $_SESSION['emailadrs'] ;
$memberpass = $_SESSION['password'];

		  $sql = "SELECT * FROM  `members` WHERE email = '$memberemail' && password = '$memberpass'";
		  $results = mysql_query($sql,$connection) or die(mysql_error());
		  $row = mysql_fetch_assoc($results);	
		  
		  $id = $row['id'];
		  $uuid = $row['uuid'];
		  $getemail = $row['email'];
		  $getfirstname = $row['first_name'];
		  $getlastname = $row['last_name'];
		  $address = $row['address'];
		  $city = $row['city'];
		  $state = $row['state'];
		  $zip = $row['zip'];
		  $country = $row['country'];
		  $telephone = $row['telephone'];
		  $mobile = $row['mobile'];
		  
		  $firstname = $getfirstname;
		  $lastname = $getlastname;
}

$profilemsg = $_POST['profilemsg'];


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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.css" />
<link rel="stylesheet" href="../css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="../css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="../css/1000px.css" type="text/css" />
<link rel="stylesheet" media="(max-width: 720px)" href="../css/720px.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="../css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="../css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js" type="text/javascript"></script>

<style>
    #member_panel_detail_frame_3{
        height:494px;
    }
    
    @media (max-width: 1000px) {
        #member_panel_detail_frame_3{
            height: 1510px;
        }   
        
        
        #footer_bottom_frame{
            margin-top:310px;
        }
        
        .options .row{
            
            text-align:center; 
                        
            margin-bottom:12px;

        }
    }
    
</style>
<script type="text/javascript">
function changecolor1(){
document.getElementById("mbtn5").style.color = "#fff"; // forecolor
document.getElementById("mbtn1").style.backgroundColor = "#06c"; // backcolor
document.getElementById("mbtn4").style.borderBottomColor = "#06c";	
document.getElementById("mbtn1").style.borderBottomColor = "#06c";			
}

function changecolor2(){
document.getElementById("mbtn2").style.color = "#fff"; // forecolor
document.getElementById("mbtn2").style.backgroundColor = "#06c"; // backcolor
document.getElementById("mbtn1").style.borderBottomColor = "#14A6FA";	
document.getElementById("mbtn2").style.borderBottomColor = "#06c";	
}
function changecolor3(){
document.getElementById("mbtn3").style.color = "#fff"; // forecolor
document.getElementById("mbtn3").style.backgroundColor = "#06c"; // backcolor
document.getElementById("mbtn2").style.borderBottomColor = "#06c";	
document.getElementById("mbtn3").style.borderBottomColor = "#06c";		
}
function changecolor4(){
document.getElementById("mbtn4").style.color = "#fff"; // forecolor
document.getElementById("mbtn4").style.backgroundColor = "#06c"; // backcolor
document.getElementById("mbtn3").style.borderBottomColor = "#06c";	
document.getElementById("mbtn4").style.borderBottomColor = "#14A6FA";		
	
}
function backtomain1(){
document.getElementById("mbtn5").style.color = "#fff"; // forecolor
document.getElementById("mbtn1").style.backgroundColor = "#14A6FA"; // backcolor	
document.getElementById("mbtn1").style.borderBottomColor = "#ccc";	
document.getElementById("mbtn5").style.borderBottomColor = "#ccc";						
}

function backtomain2(){
document.getElementById("mbtn2").style.color = "#fff"; // forecolor
document.getElementById("mbtn2").style.backgroundColor = "#14A6FA"; // backcolor
document.getElementById("mbtn1").style.borderBottomColor = "#ccc";	
document.getElementById("mbtn2").style.borderBottomColor = "#ccc";					
}
function backtomain3(){
document.getElementById("mbtn3").style.color = "#fff"; // forecolor
document.getElementById("mbtn3").style.backgroundColor = "#14A6FA"; // backcolor
document.getElementById("mbtn2").style.borderBottomColor = "#ccc";	
document.getElementById("mbtn3").style.borderBottomColor = "#ccc";							
}
function backtomain4(){
document.getElementById("mbtn4").style.color = "#fff"; // forecolor
document.getElementById("mbtn4").style.backgroundColor = "#14A6FA"; // backcolor		
document.getElementById("mbtn3").style.borderBottomColor = "#ccc";	
document.getElementById("mbtn4").style.borderBottomColor = "#06c";					
}

function save_member_details(){
	document.memberdetail.submit();
}
</script> 
 
</head>

<body id="home" >
<div class="container1">

<div id="header">

<div id="header_inner">
<div id="h_left">

<div id="h_left_top">
<div id="h_left_top_inner_left" >SHIPPED DIRECTLY FROM USA</div>
<div id="menu_holder"><a href="../#" class="menu"><span>&equiv;</span> Menu</a></div>
 
<div id="h_left_bottom"><a href="../index.php"><img src="../images/title.jpg" /></a></div>



</div>


<div id="h_mid">
<div id="h_mid_inner" >

<a href="index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; xfont-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="../logout.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

</div>
</div>

<div id="h_right">
<div id="h_right_inner">
<div id="h_right_inner_top"> TOLL FREE USA </div>
<div id="h_right_inner_bottom"><?php echo $toll_free_number; ?></div>
</div>
</div>
</div>
</div></div>


  


<div id="navigator_frame" >
 <div id="navigator_inner" >
<div class="drawer"  >
<div id ="nav" >
<div class="navigator_buttons_2"><a href="../how_it_works.php" class="link_color">How It Works</a><div id="menu_holder_2"><a href="../how_it_works.php" class="menu  menu2">  X</a></div>
</div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../shipping_calculator.php" class="link_color">Shipping Calculator</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../newpricing.php" class="link_color">Pricing</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../deals.php" class="link_color">Shop</a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../frequently_asked_questions.php" class="link_color">F. A. Q. </a></div>
<div class="navigator_separator"></div>
<div class="navigator_buttons"><a href="../contact.php" class="link_color">Contact</a></div>
 

 
</div>
</div>
</div>
</div>
 
 

 

  


























 <div id="shipping_calculator_frame">
 <div id="registration_top" > </div>
  
  
<div id="member_title">MEMBER PANEL</div>
<div id="member_panel_frame">




<div id="member_panel_left">
<div class="member_panel_left_inner" style="height:394px">
<div class="member_panel_left_title">MY USA ADDRESS</div>

<div class="member_panel_left_inner_title_1" > Postal Address</div>
		<div class="member_panel_left_adrs">
		<?php  
				echo "{$firstname} {$lastname} <br /> 7734, Bridgestone Drive, <br />  Suite {$uuid}, <br /> Orlando, Florida, <br /> 32835, <br /> USA"; 
		?>
		</div>
 <div class="member_panel_left_inner_title_1">Phone No.</div>
<div class="member_panel_left_adrs" > +1.4075329292</div>
  

</div>


<div class="member_panel_left_inner" style="height:146px; margin-top:2px; ">
		<div class="member_panel_left_title">MY SUBSCRIPTION</div>
        
        <?php
			if($status == ''){
		?>		
           <a href = "../pricing1.php">
          <div class="member_panel_left_inner_title_link"><u>Purchase a New Subscription Plan</u></div></a>
        <?php
			} else {
		?>
        		<div id="subs_separator"></div>
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





<?php
		if($profilemsg == 'profilesaved'){
?>


<div id="member_panel_right">
<div id="member_panel_button_frame">
<a href="index.php"><div class="member_buttons" id="mbtn1"  onmouseover="javascript:changecolor1();" onmouseout="javascript:backtomain1();">ADD NEW PACKAGE</div></a>
<a href="packages_expected.php"><div class="member_buttons" id="mbtn2"  onmouseover="javascript:changecolor2();" onmouseout="javascript:backtomain2();">PACKAGES EXPECTED</div></a>
<a href="packages_received.php"><div class="member_buttons" id="mbtn3" onmouseover="javascript:changecolor3();" onmouseout="javascript:backtomain3();">PACKAGES RECEIVED</div></a>
<a href="packages_sent.php"><div class="member_buttons" id="mbtn4" onmouseover="javascript:changecolor4();" onmouseout="javascript:backtomain4();" style="border-bottom-color:#06c;">PACKAGES SENT</div></a>
<div class="member_buttons_2" id="mbtn5" style="background-color:#06c; border-bottom-color:#06c; color:#fff;" >ACCOUNT</div>
</div>
 



		<div id="member_panel_detail_frame">
					<div id="edit_account_msg_frame"  >
                    		YOU HAVE SUCCESSFULLY UPDATED YOUR PROFILE. <br /> PLEASE REFRESH THIS PAGE TO SEE YOUR NEW CONTACT DETAILS.
                    </div>
		</div>


<?php
		} else {

?>

<div id="member_panel_right_3">
<div id="member_panel_button_frame">
<a href="index.php"><div class="member_buttons" id="mbtn1"  onmouseover="javascript:changecolor1();" onmouseout="javascript:backtomain1();">ADD NEW PACKAGE</div></a>
<a href="packages_expected.php"><div class="member_buttons" id="mbtn2"  onmouseover="javascript:changecolor2();" onmouseout="javascript:backtomain2();">PACKAGES EXPECTED</div></a>
<a href="packages_received.php"><div class="member_buttons" id="mbtn3" onmouseover="javascript:changecolor3();" onmouseout="javascript:backtomain3();">PACKAGES RECEIVED</div></a>
<a href="packages_sent.php"><div class="member_buttons" id="mbtn4" onmouseover="javascript:changecolor4();" onmouseout="javascript:backtomain4();" style="border-bottom-color:#06c;">PACKAGES SENT</div></a>
<div class="member_buttons_2" id="mbtn5" style="background-color:#06c; border-bottom-color:#06c; color:#fff;">ACCOUNT</div>
</div>
 


<form name="memberdetail" action="save_member_profile.php" method="POST">
<div id="member_panel_detail_frame_3" style="">

 

<div id="account_top_link_frame"></div>

<div class="account_data_mainframe_2">
<div class="account_short_label_2">SUITE Number: </div>
<div class="account_short_label_3"><?php echo $uuid; ?></div>
<div class="account_short_label_4">MEMBER E-MAIL : </div>
<div class="account_short_label_3"><?php echo $getemail; ?></div>
</div>

<div class="account_data_mainframe_3">
<div class="account_long_label_title" >YOUR FULL NAME :</div>
<div class="account_long_label"><?php echo ucwords($getfirstname)." ".ucwords($getlastname);?></div>
 </div>

<div class="account_data_mainframe">
<div class="account_long_label_title">YOUR MAILING ADDRESS :</div>
<input name="address" id="address" value="<?php echo $address; ?>" type="text" class="account_text" />
</div>

<div class="account_data_mainframe">
<div class="account_date_inner_frame"><div class="account_short_label">CITY :</div><input name="city" id="city" type="text"  class="account_sub_text" value="<?php echo $city;?>"  /></div>
<div class="account_date_inner_frame"><div class="account_short_label">STATE/PROVINCE :</div><input name="state" id="state" type="text" class="account_sub_text"  value="<?php echo $state; ?>"/></div>
<div class="account_date_inner_frame"><div class="account_short_label">ZIP CODE :</div><input name="zip" id="zip" type="text" class="account_sub_text"  value="<?php echo $zip; ?>"/></div>
</div>

<div class="account_data_mainframe">
<div class="account_date_inner_frame">
<div class="account_short_label">COUNTRY :</div><input name="country" id="country" type="text" class="account_sub_text"  value="<?php echo $country; ?>"/>
</div>
<div class="account_date_inner_frame"><div class="account_short_label">TELEPHONE :</div><input name="telephone" id="telephone" type="text" class="account_sub_text"  value="<?php echo $telephone; ?>"/>
</div>
<div class="account_date_inner_frame"><div class="account_short_label">MOBILE PHONE :</div><input name="mobile" id="mobile" type="text" class="account_sub_text" value="<?php echo $mobile; ?>" />
</div>
</div>

<div id="account_top_link_frame"></div>

<div class="options" style="padding:0px 6px">
        <div class="six columns">
            <div class="row">
                <span class="seven columns">Your current membership type:</span>
                <span class="five columns membership">Standard (<a href="#" style="text-decoration:none;color:#33a8e2">Change</a>)
                </span>
            </div>
            
             <div class="row">
                <span class="seven columns">Your billing cycle is set to:</span>
                <span class="five columns membership">
                    Annual (<a href="#" style="text-decoration:none;color:#33a8e2">Change</a>)
                </span>
            </div>
            <br><br>

        

            <div class="row">
                
                <div class="">
                    <a href="../pricing1.php" style="text-decoration:none;color:#33a8e2">See all membership rates and benefits</a>
                </div>
            </div>
            <div class="row">
                <div class="">
                    <a href="mailto:cancel@shopitus.com" style="text-decoration:none;color:#33a8e2">Cancel account</a>
                </div>
            </div>
        </div>

        <div class="six columns">
            
            <div class="row">
                <span class="six columns">Your current billing cycle:</span>
                <span class="six columns membership">Annual Membership $0.00
                </span>
            </div>
           

            <div class="row">
                <span class="six columns">Your next billing date:</span>
                <span class="six columns membership">
                    ----
                </span>
            </div>

        </div>

        <style>
            .membership {
                color: #5ab950;
                font-weight:600;
                margin:0px;
            }
        </style>
    </div>


    <div id="account_bottom_line">
        <div class="add_new_btn_frame" style="margin-right:26px;margin-top: 60px;" onclick="javascript:save_member_details();">UPDATE</div>
    </div>
</form>

<?php
		}
?> 








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
