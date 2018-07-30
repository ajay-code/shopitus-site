<?php
error_reporting(E_ERROR);
session_start();
include("external_links.php");
include("config.php");


$ausi_dollar = 1.32;
$newzeland_dollar = 1.41;
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
    <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<style>
        html,body{
                max-width: 100%;overflow-x:hidden;
            }
			.btn-round{
border-radius: 17px;
}
    </style>

<script type="text/javascript">
   var getval;
  
  $(document).ready(function(){ 
  $('#currency_selector').change(function(){ 
   getval =   $('#currency_selector').val();
   var calculated = $('#dollar_amount').val() * getval;
   $('#calculated_amount').val((calculated).toFixed(2));
   
	    if($('#currency_selector').val() == <?php echo $ausi_dollar; ?>){
	  $('#exchange_rate').val("1 US DOLLAR = <?php echo $ausi_dollar; ?> AUSTRALIAN DOLLARS");
  }else if($('#currency_selector').val() == <?php echo $newzeland_dollar; ?>){
	  $('#exchange_rate').val("1 US DOLLAR = <?php echo $newzeland_dollar; ?> NEWZELAND DOLLARS"); 
  }else{
	 $('#exchange_rate').val('');  
  }
  }); 
    
});


$(document).ready(function() {
    $('#dollar_amount').keyup(function(ev){
        var total = $('#dollar_amount').val() * getval;
		$('#calculated_amount').val((total).toFixed(2));
    });
});

$(document).ready(function() {
    $('#calculated_amount').keyup(function(ev){
        var ustotal = $('#calculated_amount').val()/ getval;
        $('#dollar_amount').val((ustotal).toFixed(2));
    });
 });

function forwardvalues()
{
	 
	if((document.forms["shipping"].country.value) == '')
	{document.forms["shipping"].msgtext.value = "Please select your country";
}else if((document.forms["shipping"].address.value) == ''){
	document.forms["shipping"].msgtext.value = "Please complete your address";
}
else if((document.forms["shipping"].shippingzip.value) == ''){
	document.forms["shipping"].msgtext.value = "Please enter zipcode";
}
else if((document.forms["shipping"].shippingcity.value) == ''){
	document.forms["shipping"].msgtext.value = "Please enter city";
}

else if((document.forms["shipping"].dollarvalue.value) == ''){
	document.forms["shipping"].msgtext.value = "Please add the value of your package";
}else if((document.forms["shipping"].weight.value) == ''){
	document.forms["shipping"].msgtext.value = "Please add weight your package";
}else if((document.forms["shipping"].setdate.value) == ''){
	document.forms["shipping"].msgtext.value = "A date to start delivery is required";
}else if((document.forms["shipping"].settime.value) == ''){
	document.forms["shipping"].msgtext.value = "Please add a time to deliver";
}else if((document.forms["shipping"].dimension.value) == ''){
	document.forms["shipping"].msgtext.value = "Select a Package size";
}else if((document.forms["shipping"].service.value) == ''){
	document.forms["shipping"].msgtext.value = "Choose your preferred courier service";

 }else{
	document.shipping.submit();
 }
}

 
</script> 
 
</head>

<body id="home">
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
            <button type="button" onclick="location.href='http://login.php'" class="btn btn-danger btn-round">Sign In</button>
            <button type="button" onclick="location.href='http://localhost:88/shopitus/contact.php'" class="btn btn-danger btn-round">Sign Up</button>
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
          <li><a href="shipping_calculator.php">SHIPPING CALCULATOR</a></li>
        <li><a href="newpricing.php">PRICING</a></li>
        <li><a href="deals.php">SHOP</a></li>
           <li><a href="frequently_asked_questions.php">F.A.Q.</a></li>
           <li><a href="contact.php">CONTACT</a></li>
          
      </ul>
    </div>
  </div>
</nav><div ><img src="images/online_shopping.jpg" class="img-responsive">
           </div>
<!--<?php
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
?>-->
<form name="shipping" id="shipping" method="post" action="estimate.php">
 <div id="shipping_calculator_frame" style="xbackground-color:#F30; height:1300px;">
 <div id="xs_c_main_image" style="height:100px;"></div>
 
 
 <div id="s_c_inner" style="xbackground-color:#693;">
 <div id="s_c_top_separator"></div>
 <div id="s_c_title">International Shipping Calculator COMING February 2018</div>
 <div id="s_c_top_description">Calculate your shipping cost below.<br />
 </div>

 <div class="s_c_inner_left" style="height:130px;">
 <div class="s_c_inner_title">Shipped From</div>
 <div class="s_c_inner_content_frame">
 <div class="s_c_inner_texture_title" style="width:auto; margin-left:50px; margin-top:35px; font-size:14px; ">Shop It US warehouse, Orlando, Florida, USA.</div>
 </div>
 </div>

 <div class="s_c_inner_right"  style="height:130px;">
  <div class="s_c_inner_title">Shipped To</div>
 <div class="s_c_inner_content_frame">
 <div class="s_c_inner_texture_title">COUNTRY</div>
 <div class="s_c_inner_texture_holder"><select name="country" id="country" class="s_c_list">
 <option value="">SELECT YOUR COUNTRY</option>

<?PHP
function Select_Qry($fields,$table,$where_clause,$orderby,$type,$startRow, $PageSize)
{
	if($where_clause != "" && $orderby == "" && $type == "")
	{
		//print "SELECT ".$fields." FROM ".$table." ".$where_clause."";
		$resCondition = mysql_query("SELECT ".$fields." FROM ".$table." ".$where_clause."")or die(mysql_error()."Error in selectQry() 1");
		if(mysql_num_rows($resCondition) > 0)
		{
			$obCondition = mysql_fetch_array($resCondition);
			return $obCondition; 
		}
		else
		{
			return false;
		}
	}
	else if($where_clause != "" && $orderby != "" && $type != "")
	{
		if($startRow == "" && $PageSize == "")
		{
			//print "SELECT ".$fields." FROM ".$table." ".$where_clause. " ORDER BY ".$orderby." ".$type."";
			$resConditionarr = mysql_query("SELECT ".$fields." FROM ".$table." ".$where_clause. " ORDER BY ".$orderby." ".$type."")or die(mysql_error()."Error in selectQry() 2");
		}
		else
		{
			//print "SELECT ".$fields." FROM ".$table." ".$where_clause. " ORDER BY ".$orderby." ".$type." LIMIT ".$startRow.",".$PageSize."";
			$resConditionarr = mysql_query("SELECT ".$fields." FROM ".$table." ".$where_clause. " ORDER BY ".$orderby." ".$type." LIMIT ".$startRow.",".$PageSize."")or die(mysql_error()."Error in selectQry() 3");
		}
		if(mysql_num_rows($resConditionarr) > 0)
		{
			while($objArr = mysql_fetch_array($resConditionarr))
			{
				$arrCond[] = $objArr;
			}
			return $arrCond;
		}
		else
		{
			return false;
		}
	}
	else
	{
		if($startRow == "" && $PageSize == "")
		{
			$res = mysql_query("SELECT ".$fields." FROM ".$table. " ORDER BY ".$orderby." ".$type."")or die(mysql_error()."Error in selectQry() 4");
			//print "SELECT ".$fields." FROM ".$table. " ORDER BY ".$orderby." ".$type."";
		}
		else
		{
			//print "SELECT ".$fields." FROM ".$table. " ORDER BY ".$orderby." ".$type." LIMIT ".$startRow.",".$PageSize."";
			$res = mysql_query("SELECT ".$fields." FROM ".$table. " ORDER BY ".$orderby." ".$type." LIMIT ".$startRow.",".$PageSize."")or die(mysql_error()."Error in selectQry() 5");
		}
		if(mysql_num_rows($res) > 0)
		{
			while($obj = mysql_fetch_array($res))
			{
				$arr[] = $obj;
			}
			return $arr;
		}
		else
		{
			return false;
		}
	}
}
$query=Select_Qry("iso,name",'country','WHERE 1',"name","ASC","","");
if($query!='')
{
	foreach($query as $result)
	{																										
	?>
	<option value="<?PHP echo($result['iso'].'~'.$result['name']); ?>"><?PHP echo($result['name']); ?></option>		
	<?php
		}
	}
?>
 </select>
 </div>
 </div>
 </div>





  <div class="s_c_inner_left" style="height:130px;">

 <div class="s_c_inner_title">Shipping Destination</div>
 <div class="s_c_inner_content_frame">
 <div class="s_c_inner_texture_title">SHIPPING ADDRESS</div>
 <div class="s_c_inner_texture_holder"><input name="address" placeholder="LOCATION NAME, STATE, COUNTRY" id="address" type="text" class="s_c_texture" /></div>
 </div>

 </div>

 <div class="s_c_inner_right"  style="height:130px;">

 <div class="s_c_inner_title">ENTER SHIPPING ZIPCODE & CITY</div>
 <div class="s_c_inner_content_frame" style="xbackground-color:#0CF;">
 
 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">ENTER SHIPPING ZIPCODE</div>
 <div class="s_c_innermost_texture_holder"><input name="shippingzip" id="shippingzip"  type="text" class="s_c_innermost_texture" /></div>
 </div>
 
 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">ENTER SHIPPING CITY</div>
 <div class="s_c_innermost_texture_holder" ><input name="shippingcity" id="shippingcity"  type="text" class="s_c_innermost_texture" />
 </div>
 </div>
 
 </div>

 </div>


 
 
 <div class="s_c_inner_left" style=" xbackground-color:#CFF; height:580px;">
   <div class="s_c_inner_title">Value & Weight of the Package</div>
 <div class="s_c_inner_content_frame" style="xbackground-color:#0CF;">
 
 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">VALUE IN US DOLLARS</div>
 <div class="s_c_innermost_texture_holder"><input name="dollarvalue" id="dollarvalue"  type="text" class="s_c_innermost_texture" /></div>
 </div>
 
 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">WEIGHT (Max: 40Kg/ 80lbs)</div>
 <div class="s_c_innermost_texture_holder" ><input name="weight" id="weight" type="text" class="s_c_package_weight" /> 
 <select name="metrics" id="metrics" class="s_c_package_weight_selector" >
 <option value="LB">POUNDS</option>
 <!-- <option value="KG">KILOGRAMS</option> -->
 </select>
 </div>
 </div>
 
 </div>
 
 
 
 
 
   <div class="s_c_inner_title">Mailing Date & Time</div>
 <div class="s_c_inner_content_frame">
 
 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">SELECT MAILING DATE</div>
 <div class="s_c_innermost_texture_holder"><input name="setdate" id="setdate" type="date" class="s_c_innermost_texture" style="font-family:Arial, Helvetica, sans-serif; font-size:14px; text-transform: uppercase; cursor:pointer;" /></div>
 </div>

 <div class="s_c_innermost_content_frame">
 <div class="s_c_innermost_texture_title">SELECT TIME FROM DROPDOWN LIST</div>
 <div class="s_c_innermost_texture_holder">
 <select name="settime" id="settime" type="text" class="s_c_innermost_texture" style="width:98%; cursor:pointer;">
 <option value="">SELECT  TIME</option>
 <option value="1">&nbsp;&nbsp;9.00 am</option>
 <option value="1">10.00 am</option>
 <option value="1">11.00 am</option>
 <option value="1">12.00 noon</option>
 <option value="1">&nbsp;&nbsp;1.00 pm</option>
 <option value="1">&nbsp;&nbsp;2.00 pm</option>
 <option value="1">&nbsp;&nbsp;3.00 pm</option>
 <option value="1">&nbsp;&nbsp;4.00 pm</option>
 <option value="1">&nbsp;&nbsp;5.00 pm</option>
 <option value="1">&nbsp;&nbsp;6.00 pm</option>
 <option value="1">&nbsp;&nbsp;7.00 pm</option>
 <option value="1">&nbsp;&nbsp;8.00 pm</option>
 <option value="1">&nbsp;&nbsp;9.00 pm</option>
 <option value="1">10.00 pm</option>
 <option value="1">11.00 pm</option>
 <option value="1">12.00 midnight</option>
 <option value="1">&nbsp;&nbsp;1.00 am</option>
 <option value="1">&nbsp;&nbsp;2.00 am</option>
 <option value="1">&nbsp;&nbsp;3.00 am</option>
 <option value="1">&nbsp;&nbsp;4.00 am</option>
 <option value="1">&nbsp;&nbsp;5.00 am</option>
 <option value="1">&nbsp;&nbsp;6.00 am</option>
 <option value="1">&nbsp;&nbsp;7.00 am</option>
 <option value="1">&nbsp;&nbsp;8.00 am</option>


  </select>
 </div>
 </div>

  </div>


 <div class="s_c_inner_title">Package Dimension</div>
 <div class="s_c_inner_content_frame">
 <div class="s_c_inner_texture_title">SELECT FROM THE DROP DOWN LIST</div>
 <div class="s_c_inner_texture_holder"> <select name="dimension" id="dimension" class="s_c_list">
 <option value="">SELECT YOUR PACKAGE DIMENSION</option>
 <!-- <option value="0~12.5~9.5">Flat Rate Envelope &nbsp;&nbsp; 12.5 x 9.5 inches</option>
 <option value="0~15~9.5">Legal Flat Rate Envelope &nbsp;&nbsp; 15 x 9.5 inches</option>
 <option value="0~12.5~9.5">Padded Flat Rate Envelope &nbsp;&nbsp; 12.5 x 9.5 inches</option>
 <option value="0~10~7">Gift Card Envelope &nbsp;&nbsp; 10 x 7 inches</option> -->


 <!-- <option value="8~5~1">Small Flat Box &nbsp;&nbsp; 8 x 5 x 1 inches</option>
 <option value="13~11~3">Medium Flat Box &nbsp;&nbsp; 13 x 11 x 3 inches</option>
 <option value="23~11~3">Large Flat Box &nbsp;&nbsp; 23 x 11 x 3 inches</option> -->


 <option value="10.1~5.8~5.9">Small Box &nbsp;&nbsp; 10.1 x 5.8 x 5.9 inches</option>
 <option value="13~11~3">Medium Box Same Dimensions &nbsp;&nbsp; 13 x 11 x 3 inches</option>
 <option value="23~11~3">Large Flat Box &nbsp;&nbsp; 23 x 11 x 3 inches</option> 
 <option value="9.8~12~1">Small Padded Pouch &nbsp;&nbsp; 9.8x12x1 inches</option>


 </select ></div>
 </div>

<div id="package_msg_frame"><input name="msgtext" id="msgtext" type="text"   class="package_msg_text" /></div>
 
  </div>


 <div id="exchange_rate_frame">
 <div class="exchange_rate_inner" style="width:90%; padding-left:10%; line-height:40px; height:40px;">Exchange Rate Calculator</div>
 <div class="exchange_rate_inner">
 <div class="exchange_rate_value_frame"><input name="dollar_amount"  id="dollar_amount" type="text" class="exchange_value" value=1 /></div>
 <div class="exchange_rate_country_frame"><input name="" type="text" class="exchange_country" style="height:40px; border:1px solid; border-color:#ccc;" value="UNITED STATES DOLLARS" /></div>
 </div>
 <div class="exchange_rate_inner">
 <div class="exchange_rate_value_frame"><input name="calculated_amount" id="calculated_amount" type="text" class="exchange_value" /></div>
 <div class="exchange_rate_country_frame">
 <select name="currency_selector"  id="currency_selector" class="exchange_country" style="cursor:pointer;">
 <option>SELECT YOUR CURRENCY</option>
 <option value="1.32">Australian Dollars</option>
 <option value="1.41">NewZeland Dollars</option>
 </select>
 </div>
 </div>
 <div class="exchange_rate_inner" style="height:30px; text-align:center; font-size:12px; line-height:38px; color:#333; xbackground-color:#F90;"><input name="exchange_rate" id="exchange_rate" type="text" class="exchange_rate_info" /></div>
 </div>
 
 
 
<div class="s_c_inner_right"  style="height:270px; margin-top:32px; xbackground-color:#F90;">
   <div class="s_c_inner_title">
     <p>Your Preferred Courier (preference can be changed)</p>
   </div>
 <div class="s_c_inner_content_frame">
 <div class="s_c_inner_texture_title">SELECT FROM THE DROP DOWN LIST</div>
 <div class="s_c_inner_texture_holder"> <select name="service" id="service" class="s_c_list">
 <option value="">SELECT YOUR COURIER</option>
 <option value="1">DHL Express</option>
 <option value="1">USPS Economy</option> 
 <option value="1">Fedex Economy</option>
 <!-- <option value="1">Fedex Priority</option>
 <option value="1">USPS Priority</option>
 <option value="1">USPS Express</option>
  <option value="1">USPS First Class International Parcel</option> -->
 </select></div>
 </div>

 
<div class="s_c_inner_content_frame" style="margin-top:70px; xbackground-color:#0C9;">
<div class="s_c_inner_texture_holder"> BETA
  <div class="s_c_button" onclick="javascript:forwardvalues();">CALCULATE</div> </div>
</div>
</div> 
 </div>
 </div> 
 </form>
 
 
 
<div id="footer_bottom_frame" style="margin-top:-250px">
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


<div id="footer_map_content2" style="text-align:center">
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
<a href="index.php">Home</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="howwework.php">How It Works</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shipping_calculator.php">Shipping Calculator</a> &nbsp;&nbsp;|&nbsp;&nbsp;  
 
<a href="newpricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="deals.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="TOS1.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="privacypolicy.php">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact Us</a>

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
