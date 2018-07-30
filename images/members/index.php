<?php
session_start();

include("../external_links.php");
include("../config.php");

$memberemail = $_POST['memberemail'];
$memberpass = $_POST['memberpass'];

 

if(isset($_POST['memberemail']) && isset($_POST['memberpass']))
{
		  $sql1 = "SELECT email, password FROM  `members` WHERE email = '$memberemail' && password = '$memberpass'";
		  $results1 = mysql_query($sql1,$connection) or die(mysql_error());
		  $row1 = mysql_fetch_assoc($results1);
 		  $mememail = $row1['email'];
		  $mempass =  $row1['password'];
		  
		   
		  
		
		  
		  if(isset($mememail) && isset($mempass)){
			  
			 $_SESSION['memberpass'] = "valid";  // validate 'memberpass' session variable.	
			 $_SESSION['emailadrs'] = $mememail;
			 $_SESSION['password'] = $mempass;
			 
 			 		  
		  }else{
			 $_SESSION['memberpass'] = ""; 
			 header("Location: ../login.php?login=false");
			 die();  
		  }
}

$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$emailadrs = $_POST["emailbox"];
$password = $_POST["passwordbox"];


$member_email = $_SESSION['emailadrs'];
$member_password =  $_SESSION['password'];
 


if($_SESSION['newmsg'] == 'registration'){
	
	$_SESSION['newmsg'] = $_POST["membershipconfirm"];
	if($_SESSION['newmsg'] == 'asdi%7we'){
		
		
		
		  $emailcheck = "SELECT email FROM  `members` WHERE email = '$emailadrs'";
		  $emailcheckresults = mysql_query($emailcheck,$connection) or die(mysql_error());
		  $emrow = mysql_fetch_assoc($emailcheckresults);
 		  $getemail = $emrow['email'];

		  if(isset($getemail)){
			$_SESSION['memberpass'] = "";   //make 'memberpass' session variable empty if email is already registered.
			header("Location: ../register.php?emailadrs=false");
			die();
		  } else{
			  
				$date = date('Y-m-d H:i:s');
				$newmemsql = "INSERT INTO members(id, first_name, last_name, email, password, date_joined) VALUES(NULL, '$firstname', '$lastname', '$emailadrs', '$password', '$date')";
				mysql_query($newmemsql,$connection) or die(mysql_error());
				
				$_SESSION['memberpass'] = "valid"; // validate 'memberpass' session variable.
		  }

			$_SESSION['newmsg'] = "";
		} else{
			$_SESSION['newmsg'] = "";
	}
}

if($_SESSION['memberpass'] == "valid"){
	      $sql = "SELECT * FROM  `members` WHERE email =  '$member_email'  && password =  '$member_password'";
		  $results = mysql_query($sql,$connection) or die(mysql_error());
		  $row = mysql_fetch_assoc($results);
		  $member_id = $row['id'];
 		  $mememail = $row['email'];
		  $mempass =  $row['password'];
		  $firstname = $row['first_name'];
		  $lastname = $row['last_name'];
		  
		  $address = $row['address'];
		  $city = $row['city'];
		  $state = $row['state'];
		  $zip = $row['zip'];
		  $country = $row['country'];
		  
		  
		  $adrs_1 = $address.", ".$city.", ".$state.", ".$zip.", ";
		  $adrs_2 = $country;
		
}
// redirect to login if 'memberpass' session_variable is not valid.
 else if(($_SESSION['memberpass'] != "valid")) 
{
	header("Location: ../login.php");
	die();
}


	      $subsql = "SELECT * FROM  `subscription` WHERE member_id = '$member_id' && email =  '$member_email'";
		  $subresults = mysql_query($subsql,$connection) or die(mysql_error());
		  $subrow = mysql_fetch_assoc($subresults);
		  
		  $plan =  $subrow['plan'];
		  $starting_date = $subrow['start_date'];
		  $ending_date = $subrow['end_date'];
		  
		  $today = date("Y-m-d");
		 
		  
		  
		   if ($starting_date == ''){$status =  ""; $plan = "";} else if($today < $ending_date){ $status =  "active"; }else if ($today >= $ending_date){$status =  "expired";} 

 
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

function save_tracking_no(){
 	if(document.getElementById("tracking").value == ""){
    	document.getElementById("addnew_msg").value = "Tracking No. cannot be blanked";
	}else if(document.getElementById("tracking").value.length < 4){
    	document.getElementById("addnew_msg").value = "Tracking No. too small. Please check again.";
	}else if(document.getElementById("country").value == 0){
    	document.getElementById("addnew_msg").value = "Please select country of origin.";
	}else if(document.getElementById("shippingname").value == ""){
    	document.getElementById("addnew_msg").value = "Recipient's name cannot be blanked.";
	}else if(document.getElementById("shippingname").value.length < 4){
    	document.getElementById("addnew_msg").value = "Recipient's name is too small. Please check again.";
	}else if(document.getElementById("shippingadrs").value == ""){
    	document.getElementById("addnew_msg").value = "Recipient's address cannot be blanked.";
	}else if(document.getElementById("shippingadrs").value.length < 4){
    	document.getElementById("addnew_msg").value = "Recipient's address is too small. Please check again.";
	}else if(document.getElementById("destination").value == 0){
    	document.getElementById("addnew_msg").value = "Please select a country of destination.";
	}else if(document.getElementById("packagevalue").value == 0){
    	document.getElementById("addnew_msg").value = "Please enter package value.";
	}else if(document.getElementById("courier").value == 0){
    	document.getElementById("addnew_msg").value = "Please select your courier.";
	}else if(document.getElementById("status").value == ''){
    	document.getElementById("addnew_msg").value = "Please Purchase a FREE or PAID Subscription Plan to Proceed.";
	}else if(document.getElementById("status").value == "expired"){
    	document.getElementById("addnew_msg").value = "Please Renew Your Subscription Plan to Proceed.";
	}else{document.getElementById("addnew_msg").value = "";
	 document.addnew.submit();	
	}
}

function getmyname(checkboxID, toggleID) {
	var shippersname = "<?php echo $firstname." ".$lastname; ?>";
	if(shippersname.trim()  == ""){
		document.getElementById("addnew_msg").value = "Please update your name in your profile.";
	}else{
		document.getElementById("addnew_msg").value = "";
		shippersname == shippersname;
	}
     var checkbox = document.getElementById(checkboxID);
     var toggle = document.getElementById(toggleID);
    checkbox.checked ? toggle.value = shippersname : toggle.value = "";
}
function getmyaddress(nextcheckboxID, nexttoggleID) {
	var shippersadrs = "<?php echo $adrs_1." ".$adrs_2; ?>";
	if(shippersadrs.trim()  == ""){
		document.getElementById("addnew_msg").value = "Please update your Home Address in your profile.";
	}else{
		document.getElementById("addnew_msg").value = "";
		shippersadrs == shippersadrs;
	}
     var nextcheckbox = document.getElementById(nextcheckboxID);
     var nexttoggle = document.getElementById(nexttoggleID);
    nextcheckbox.checked ? nexttoggle.value = shippersadrs : nexttoggle.value = "";
}



function validateFloatKeyPress(el, evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    var number = el.value.split('.');
    if (charCode != 46 && charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    //just one dot
    if(number.length>1 && charCode == 46){
         return false;
    }
    //get the carat position
    var caratPos = getSelectionStart(el);
    var dotPos = el.value.indexOf(".");
    if( caratPos > dotPos && dotPos>-1 && (number[1].length > 1)){
        return false;
    }
    return true;
}

//thanks: http://javascript.nwbox.com/cursor_position/
function getSelectionStart(o) {
	if (o.createTextRange) {
		var r = document.selection.createRange().duplicate()
		r.moveEnd('character', o.value.length)
		if (r.text == '') return o.value.length
		return o.value.lastIndexOf(r.text)
	} else return o.selectionStart
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
 

 

  

























<form name="addnew" id="addnew" method="POST" action="add_new_declarations.php">

 <div id="shipping_calculator_frame" style=" xbackground-color:#e8e8e8; height:670px;">
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
<div class="member_buttons" style="background-color:#14A6FA; color:#fff;" >ADD NEW PACKAGE</div>
<a href="packages_expected.php"><div class="member_buttons" id="mbtn2" onmouseover="javascript:changecolor2();" onmouseout="javascript:backtomain2();">PACKAGES EXPECTED</div></a>
<a href="packages_received.php"><div class="member_buttons" id="mbtn3" onmouseover="javascript:changecolor3();" onmouseout="javascript:backtomain3();">PACKAGES RECEIVED</div></a>
<a href="packages_sent.php"><div class="member_buttons" id="mbtn4" onmouseover="javascript:changecolor4();" onmouseout="javascript:backtomain4();">PACKAGES SENT</div></a>
<a href="edit_account.php"><div class="member_buttons" id="mbtn5" onmouseover="javascript:changecolor5();" onmouseout="javascript:backtomain5();" style="margin-left:1.5px;">ACCOUNT</div></a>
</div>





<div id="member_panel_detail_frame" style=" background-color:#ececec;">

<div id="member_panel_detail_inner" style="xbackground-color:#6CC;">

<div class="member_panel_data_title_frame" style="margin-top:20px;">
<div class="add_new_titles">ENTER TRACKING NO.</div>
<div class="add_new_titles" style="margin-left:237px;  xbackground-color:#666;">COUNTRY OF ORIGIN</div>
</div>

<div class="member_panel_data_frame" style=" xbackground-color:#0C6;">
<input name="tracking" id="tracking" type="text" class="add_new_long_text" style="width:310px;"  />
<select name="country" id="country" class="add_new_selectbox" style=" width:255px; margin-left:30px;">
    <option  value=0 selected="selected">Select a country ... </option>
    <option  value ="Afghanistan">Afghanistan</option>
    <option  value="Albania">Albania</option>
    <option  value="Algeria">Algeria</option>
    <option  value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option  value="Angola">Angola</option>
    <option  value="Anguilla">Anguilla</option>
    <option  value="Antarctica">Antarctica</option>
    <option  value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option  value="Argentina">Argentina</option>
    <option  value="Armenia">Armenia</option>
    <option  value="Aruba">Aruba</option>
    <option  value="Australia">Australia</option>
    <option  value="Austria">Austria</option>
    <option  value="Azerbaijan">Azerbaijan</option>
    <option  value="Bahamas">Bahamas</option>
    <option  value="Bahrain">Bahrain</option>
    <option  value="Bangladesh">Bangladesh</option>
    <option  value="Barbados">Barbados</option>
    <option  value="Belarus">Belarus</option>
    <option  value="Belgium">Belgium</option>
    <option  value="Belize">Belize</option>
    <option  value="Benin">Benin</option>
    <option  value="Bermuda">Bermuda</option>
    <option  value="Bhutan">Bhutan</option>
    <option  value="Bolivia">Bolivia</option>
    <option  value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
    <option  value="Botswana">Botswana</option>
    <option  value="Bouvet Island">Bouvet Island</option>
    <option  value="Brazil">Brazil</option>
    <option  value="British Antarctic Territory">British Antarctic Territory</option>
    <option  value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option  value="British Virgin Islands">British Virgin Islands</option>
    <option  value="Brunei">Brunei</option>
    <option  value="Bulgaria">Bulgaria</option>
    <option  value="Burkina Faso">Burkina Faso</option>
    <option  value="Burundi">Burundi</option>
    <option  value="Cambodia">Cambodia</option>
    <option  value="Cameroon">Cameroon</option>
    <option  value="Canada">Canada</option>
    <option  value="Canton and Enderbury Islands">Canton and Enderbury Islands</option>
    <option  value="Cape Verde">Cape Verde</option>
    <option  value="Cayman Islands">Cayman Islands</option>
    <option  value="Central African Republic">Central African Republic</option>
    <option  value="Chad">Chad</option>
    <option  value="Chile">Chile</option>
    <option  value="China">China</option>
    <option  value="Christmas Island">Christmas Island</option>
    <option  value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
    <option  value="Colombia">Colombia</option>
    <option  value="Comoros">Comoros</option>
    <option  value="Congo - Brazzaville">Congo - Brazzaville</option>
    <option  value="Congo - Kinshasa">Congo - Kinshasa</option>
    <option  value="Cook Islands">Cook Islands</option>
    <option  value="Costa Rica">Costa Rica</option>
    <option  value="Croatia">Croatia</option>
    <option  value="Cuba">Cuba</option>
    <option  value="Cyprus">Cyprus</option>
    <option  value="Czech Republic">Czech Republic</option>
    <option  value="Côte d'Ivoire">Côte d'Ivoire</option>
    <option  value="Denmark">Denmark</option>
    <option  value="Djibouti">Djibouti</option>
    <option  value="Dominica">Dominica</option>
    <option  value="Dominican Republic">Dominican Republic</option>
    <option  value="Dronning Maud Land">Dronning Maud Land</option>
    <option  value="East Germany">East Germany</option>
    <option  value="Ecuador">Ecuador</option>
    <option  value="Egypt">Egypt</option>
    <option  value="El Salvador">El Salvador</option>
    <option  value="Equatorial Guinea">Equatorial Guinea</option>
    <option  value="Eritrea">Eritrea</option>
    <option  value="Estonia">Estonia</option>
    <option  value="Ethiopia">Ethiopia</option>
    <option  value="Falkland Islands">Falkland Islands</option>
    <option  value="Faroe Islands">Faroe Islands</option>
    <option  value="Fiji">Fiji</option>
    <option  value="Finland">Finland</option>
    <option  value="France">France</option>
    <option  value="French Guiana">French Guiana</option>
    <option  value="French Polynesia">French Polynesia</option>
    <option  value="French Southern Territories">French Southern Territories</option>
    <option  value="French Southern and Antarctic Territories">French Southern and Antarctic Territories</option>
    <option  value="Gabon">Gabon</option>
    <option  value="Gambia">Gambia</option>
    <option  value="Georgia">Georgia</option>
    <option  value="Germany">Germany</option>
    <option  value="Ghana">Ghana</option>
    <option  value="Gibraltar">Gibraltar</option>
    <option  value="Greece">Greece</option>
    <option  value="Greenland">Greenland</option>
    <option  value="Grenada">Grenada</option>
    <option  value="Guadeloupe">Guadeloupe</option>
    <option  value="Guam">Guam</option>
    <option  value="Guatemala">Guatemala</option>
    <option  value="Guernsey">Guernsey</option>
    <option  value="Guinea">Guinea</option>
    <option  value="Guinea-Bissau">Guinea-Bissau</option>
    <option  value="Guyana">Guyana</option>
    <option  value="Haiti">Haiti</option>
    <option  value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
    <option  value="Honduras">Honduras</option>
    <option  value="Hong Kong SAR China">Hong Kong SAR China</option>
    <option  value="Hungary">Hungary</option>
    <option  value="Iceland">Iceland</option>
    <option  value="India">India</option>
    <option  value="Indonesia">Indonesia</option>
    <option  value="Iran">Iran</option>
    <option  value="Iraq">Iraq</option>
    <option  value="Ireland">Ireland</option>
    <option  value="Isle of Man">Isle of Man</option>
    <option  value="Israel">Israel</option>
    <option  value="Italy">Italy</option>
    <option  value="Jamaica">Jamaica</option>
    <option  value="Japan">Japan</option>
    <option  value="Jersey">Jersey</option>
    <option  value="Johnston Island">Johnston Island</option>
    <option  value="Jordan">Jordan</option>
    <option  value="Kazakhstan">Kazakhstan</option>
    <option  value="Kenya">Kenya</option>
    <option  value="Kiribati">Kiribati</option>
    <option  value="Kuwait">Kuwait</option>
    <option  value="Kyrgyzstan">Kyrgyzstan</option>
    <option  value="Laos">Laos</option>
    <option  value="Latvia">Latvia</option>
    <option  value="Lebanon">Lebanon</option>
    <option  value="Lesotho">Lesotho</option>
    <option  value="Liberia">Liberia</option>
    <option  value="Libya">Libya</option>
    <option  value="Liechtenstein">Liechtenstein</option>
    <option  value="Lithuania">Lithuania</option>
    <option  value="Luxembourg">Luxembourg</option>
    <option  value="Macau SAR China">Macau SAR China</option>
    <option  value="Macedonia">Macedonia</option>
    <option  value="Madagascar">Madagascar</option>
    <option  value="Malawi">Malawi</option>
    <option  value="Malaysia">Malaysia</option>
    <option  value="Maldives">Maldives</option>
    <option  value="Mali">Mali</option>
    <option  value="Malta">Malta</option>
    <option  value="Marshall Islands">Marshall Islands</option>
    <option  value="Martinique">Martinique</option>
    <option  value="Mauritania">Mauritania</option>
    <option  value="Mauritius">Mauritius</option>
    <option  value="Mayotte">Mayotte</option>
    <option  value="Metropolitan France">Metropolitan France</option>
    <option  value="Mexico">Mexico</option>
    <option  value="Micronesia">Micronesia</option>
    <option  value="Midway Islands">Midway Islands</option>
    <option  value="Moldova">Moldova</option>
    <option  value="Monaco">Monaco</option>
    <option  value="Mongolia">Mongolia</option>
    <option  value="Montenegro">Montenegro</option>
    <option  value="Montserrat">Montserrat</option>
    <option  value="Morocco">Morocco</option>
    <option  value="Mozambique">Mozambique</option>
    <option  value="Myanmar [Burma]">Myanmar [Burma]</option>
    <option  value="Namibia">Namibia</option>
    <option  value="Nauru">Nauru</option>
    <option  value="Nepal">Nepal</option>
    <option  value="Netherlands">Netherlands</option>
    <option  value="Netherlands Antilles">Netherlands Antilles</option>
    <option  value="Neutral Zone">Neutral Zone</option>
    <option  value="New Caledonia">New Caledonia</option>
    <option  value="New Zealand">New Zealand</option>
    <option  value="Nicaragua">Nicaragua</option>
    <option  value="Niger">Niger</option>
    <option  value="Nigeria">Nigeria</option>
    <option  value="Niue">Niue</option>
    <option  value="Norfolk Island">Norfolk Island</option>
    <option  value="North Korea">North Korea</option>
    <option  value="North Vietnam">North Vietnam</option>
    <option  value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option  value="Norway">Norway</option>
    <option  value="Oman">Oman</option>
    <option  value="Pacific Islands Trust Territory">Pacific Islands Trust Territory</option>
    <option  value="Pakistan">Pakistan</option>
    <option  value="Palau">Palau</option>
    <option  value="Palestinian Territories">Palestinian Territories</option>
    <option  value="Panama">Panama</option>
    <option  value="Panama Canal Zone">Panama Canal Zone</option>
    <option  value="Papua New Guinea">Papua New Guinea</option>
    <option  value="Paraguay">Paraguay</option>
    <option  value="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
    <option  value="Peru">Peru</option>
    <option  value="Philippines">Philippines</option>
    <option  value="Pitcairn Islands">Pitcairn Islands</option>
    <option  value="Poland">Poland</option>
    <option  value="Portugal">Portugal</option>
    <option  value="Puerto Rico">Puerto Rico</option>
    <option  value="Qatar">Qatar</option>
    <option  value="Romania">Romania</option>
    <option  value="Russia">Russia</option>
    <option  value="Rwanda">Rwanda</option>
    <option  value="Réunion">Réunion</option>
    <option  value="Saint Barthélemy">Saint Barthélemy</option>
    <option  value="Saint Helena">Saint Helena</option>
    <option  value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
    <option  value="Saint Lucia">Saint Lucia</option>
    <option  value="Saint Martin">Saint Martin</option>
    <option  value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
    <option  value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
    <option  value="Samoa">Samoa</option>
    <option  value="San Marino">San Marino</option>
    <option  value="Saudi Arabia">Saudi Arabia</option>
    <option  value="Senegal">Senegal</option>
    <option  value="Serbia">Serbia</option>
    <option  value="Serbia and Montenegro">Serbia and Montenegro</option>
    <option  value="Seychelles">Seychelles</option>
    <option  value="Sierra Leone">Sierra Leone</option>
    <option  value="Singapore">Singapore</option>
    <option  value="Slovakia">Slovakia</option>
    <option  value="Slovenia">Slovenia</option>
    <option  value="Solomon Islands">Solomon Islands</option>
    <option  value="Somalia">Somalia</option>
    <option  value="South Africa">South Africa</option>
    <option  value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
    <option  value="South Korea">South Korea</option>
    <option  value="Spain">Spain</option>
    <option  value="Sri Lanka">Sri Lanka</option>
    <option  value="Sudan">Sudan</option>
    <option  value="Suriname">Suriname</option>
    <option  value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
    <option  value="Swaziland">Swaziland</option>
    <option  value="Sweden">Sweden</option>
    <option  value="Switzerland">Switzerland</option>
    <option  value="Syria">Syria</option>
    <option  value="São Tomé and Príncipe">São Tomé and Príncipe</option>
    <option  value="Taiwan">Taiwan</option>
    <option  value="Tajikistan">Tajikistan</option>
    <option  value="Tanzania">Tanzania</option>
    <option  value="Thailand">Thailand</option>
    <option  value="Timor-Leste">Timor-Leste</option>
    <option  value="Togo">Togo</option>
    <option  value="Tokelau">Tokelau</option>
    <option  value="Tonga">Tonga</option>
    <option  value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option  value="Tunisia">Tunisia</option>
    <option  value="Turkey">Turkey</option>
    <option  value="Turkmenistan">Turkmenistan</option>
    <option  value="Turks and Caicos Islands">Turks and Caicos Islands</option>
    <option  value="Tuvalu">Tuvalu</option>
    <option  value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
    <option  value="U.S. Miscellaneous Pacific Islands">U.S. Miscellaneous Pacific Islands</option>
    <option  value="U.S. Virgin Islands">U.S. Virgin Islands</option>
    <option  value="Uganda">Uganda</option>
    <option  value="Ukraine">Ukraine</option>
    <option  value="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
    <option  value="United Arab Emirates">United Arab Emirates</option>
    <option  value="United Kingdom">United Kingdom</option>
    <option  value="United States">United States</option>
    <option  value="Unknown or Invalid Region">Unknown or Invalid Region</option>
    <option  value="Uruguay">Uruguay</option>
    <option  value="Uzbekistan">Uzbekistan</option>
    <option  value="Vanuatu">Vanuatu</option>
    <option  value="Vatican City">Vatican City</option>
    <option  value="Venezuela">Venezuela</option>
    <option  value="Vietnam">Vietnam</option>
    <option  value="Wake Island">Wake Island</option>
    <option  value="Wallis and Futuna">Wallis and Futuna</option>
    <option  value="Western Sahara">Western Sahara</option>
    <option  value="Yemen">Yemen</option>
    <option  value="Zambia">Zambia</option>
    <option  value="Zimbabwe">Zimbabwe</option>   
</select>
</div>




<div class="member_panel_data_title_frame">
<div class="add_new_titles">RECEIPIENT'S FULL NAME</div>
<div class="add_new_titles" style="margin-left:62px;"><input name="getname" id="getname"  type="checkbox" value="" onclick="javascript:getmyname('getname', 'shippingname');" class="add_new_checkbox" /></div>
<div class="add_new_titles">Add My Name</div>
</div>

<div class="member_panel_data_frame">
<input   name="shippingname" id="shippingname" type="text" class="add_new_long_text" />
</div>




<div class="member_panel_data_title_frame" >
<div class="add_new_titles">RECEIPIENT'S FULL ADDRESS</div>
<div class="add_new_titles" style="margin-left:40px;"><input name="getadrs" id="getadrs" onchange="javascript:getmyaddress('getadrs', 'shippingadrs');" type="checkbox" value="" class="add_new_checkbox" /></div>
<div class="add_new_titles">Add My Address</div>
</div>

<div class="member_panel_data_frame">
<input name="shippingadrs" id="shippingadrs" type="text" class="add_new_long_text" />
</div>


<div class="member_panel_data_title_frame" >
<div class="add_new_titles" >COUNTRY OF DESTINATION</div>
<div class="add_new_titles" style="margin-left:104px;">PACKAGE VALUE</div>
<div class="add_new_titles" style="margin-left:40px;">SELECT YOUR PREFERRED COURIER</div>
</div>

<div class="member_panel_data_frame">
<select name="destination" id="destination" class="add_new_selectbox" style="width:221px;" >
<option value="0">Select Your Destination ...</option>
<option value="australia">Australia</option>
<option value="newzeland">NewZeland</option>
</select>
<div style="width:100px; height:31px; float:left; margin-left:32px;  background-color:#FFF; border:1px solid; border-color:#999;">
<input name="" type="text" class="add_new_long_text" value="US$" style="width:30px; border:0px solid;" />
<input name="packagevalue" id="packagevalue" type="text" class="add_new_long_text"   onkeypress="return validateFloatKeyPress(this,event);"  style="width:68px; height:30px; padding:0px; border:0px solid;" />
</div>
<select name="courier" id="courier" class="add_new_selectbox" style="width:224px; float:left; margin-left:32px;" >
<option value="0">Select Your Courier ...</option>
<option value="UPS">UPS</option>
<option value="FedEx">FedEx</option>
</select>
</div>




<input type="hidden" name="status" id="status" value="<?php echo $status; ?>" />
 
<div id="add_new_msg_frame" style="xbackground-color:#60C;">
<div id="add_new_msg_frame_inner"><input name="addnew_msg" id="addnew_msg" type="text"   class="member_panel_msg_text" /></div>
<div class="add_new_btn_frame" onclick="javascript:save_tracking_no();">NEXT</div>
</div>

</div>
  
</div>


</div>



</div>
</div>  
 
 
 

 </div>
 </form>
 
 












































 

 
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
