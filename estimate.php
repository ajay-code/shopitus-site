<?php
session_start();
ini_set('display_errors', 1);
include("config.php");
include("external_links.php");

//print_r($_POST); exit;

$ausi_dollar = 1.32;
$newzeland_dollar = 1.41;

$country="";
$country_usps="";
$exp_country=explode('~',$_POST["country"]);

$country=$exp_country[0];
$country_usps=$exp_country[1];

$address = $_POST["address"];


//$country = $_POST["country"];
$weight = $_POST["weight"];
$getmetrics = $_POST["metrics"];
$date = $_POST["setdate"];
$courier = $_POST["service"];
$value = $_POST["dollarvalue"];

$setdate = $_POST["setdate"];

$shippingzip = $_POST["shippingzip"];
$shippingcity = $_POST["shippingcity"];
$dimension = $_POST["dimension"];

$height="";
$depth="";
$width="";
if($dimension)
{
	$dimension_array=explode('~',$dimension);

	if(sizeof($dimension_array)==3)
	{
		$depth=$dimension_array[0];
		$width=$dimension_array[1];
		$height=$dimension_array[2];
	}
	else
	{
		$depth=0;
		$width=$dimension_array[0];
		$height=$dimension_array[1];
	}
}

/*echo $height.'<br/>';
echo $depth.'<br/>';
echo $width.'<br/>';*/
/*  DHL API */
use DHL\Entity\AM\GetQuote;
use DHL\Datatype\AM\PieceType;
use DHL\Client\Web as WebserviceClient;
require('init.php');

// Test a getQuote using DHL XML API
$sample = new GetQuote();
//$sample->SiteID = 'CustomerTest';  --  Test Code
//$sample->Password = 'alkd89nBV';    --  Test Code

$sample->SiteID = 'xmlRAAV';
$sample->Password = 'trk7ZyYbH8';

// Set values of the request
//$sample->MessageTime = $setdate.'T09:30:47-05:00';
$sample->MessageTime = '2017-12-15T09:30:47-05:00';
$sample->MessageReference = '1234567890123456789012345678901';
$sample->BkgDetails->Date = $setdate;

$piece = new PieceType();
$piece->PieceID = 1;
$piece->Height = $height;
$piece->Depth = $depth;
$piece->Width = $width;
$piece->Weight = $weight;
$sample->BkgDetails->addPiece($piece);
$sample->BkgDetails->IsDutiable = 'Y';
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';
$sample->BkgDetails->ReadyTime = 'PT10H21M';
$sample->BkgDetails->ReadyTimeGMTOffset = '+01:00';
$sample->BkgDetails->DimensionUnit = 'IN';
$sample->BkgDetails->WeightUnit = $getmetrics;
$sample->BkgDetails->PaymentCountryCode = 'US';
$sample->BkgDetails->IsDutiable = 'Y';

// Request Paperless trade
$sample->BkgDetails->QtdShp->QtdShpExChrg->SpecialServiceType = 'WY';

$sample->From->CountryCode = 'US';
$sample->From->Postalcode = '32835';
$sample->From->City = 'Orlando';

$sample->To->CountryCode = $country;
$sample->To->Postalcode = $shippingzip;
$sample->To->City = $shippingcity;
$sample->Dutiable->DeclaredValue = $value;
$sample->Dutiable->DeclaredCurrency = 'USD';

// Call DHL XML API
$start = microtime(true);
$sample->toXML();
$client = new WebserviceClient('staging');
$xml = $client->call($sample);
//echo PHP_EOL . 'Executed in ' . (microtime(true) - $start) . ' seconds.' . PHP_EOL;
//echo $xml . PHP_EOL;
$xml_str = simplexml_load_string($xml);
//print_r($xml_str);
$val_dhl=array();
$val_dhl=$xml_str->GetQuoteResponse->BkgDetails->QtdShp;

/*for($i=0; $i<sizeof($val_dhl); $i++)
{
	print_r($val_dhl[$i]);
}*/

/*  DHL API Delete*/ 



/* FOR FEDEX */

// Copyright 2009, FedEx Corporation. All rights reserved.
require_once('fedex-common.php');
$newline = "<br />";
//The WSDL is not included with the sample code.
//Please include and reference in $path_to_wsdl variable.
$path_to_wsdl = "RateService_v22.wsdl";

ini_set("soap.wsdl_cache_enabled", "0");
 
$client = new SoapClient($path_to_wsdl, array('trace' => 1)); // Refer to http://us3.php.net/manual/en/ref.soap.php for more information

$request['WebAuthenticationDetail'] = array(
	'ParentCredential' => array(
		'Key' => 'raecampus',
		'Password' => 'Yomamma@21'
	),
	'UserCredential' => array(
		'Key' => 'sG797qeBjmADYBoD', 
		'Password' => 'U4HPbVn5CdCj1CAB3Vadd0DmM'
	)
); 
$request['ClientDetail'] = array(
	'AccountNumber' => '983616313', 
	'MeterNumber' => '111352835'
);
$request['TransactionDetail'] = array('CustomerTransactionId' => ' *** Rate Request using PHP ***');
$request['Version'] = array(
	'ServiceId' => 'crs', 
	'Major' => '22', 
	'Intermediate' => '0', 
	'Minor' => '0'
);
$request['ReturnTransitAndCommit'] = true;
$request['RequestedShipment']['DropoffType'] = 'REGULAR_PICKUP'; // valid values REGULAR_PICKUP, REQUEST_COURIER, ...
$request['RequestedShipment']['ShipTimestamp'] = date('c',strtotime($setdate));
$request['RequestedShipment']['ServiceType'] = 'INTERNATIONAL_PRIORITY'; // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
$request['RequestedShipment']['PackagingType'] = 'YOUR_PACKAGING'; // valid values FEDEX_BOX, FEDEX_PAK, FEDEX_TUBE, YOUR_PACKAGING, ...
$request['RequestedShipment']['TotalInsuredValue']=array(
	'Ammount'=>0,
	'Currency'=>'USD'
);
$request['RequestedShipment']['Shipper'] = array(
		'Contact' => array(
			'PersonName' => 'Randall Anderson',
			'CompanyName' => '',
			'PhoneNumber' => '1-4075329292'
		),
		'Address' => array(
			'StreetLines' => array('10 Fed Ex Pkwy'),
			'City' => 'Orlando',
			'StateOrProvinceCode' => 'FL',
			'PostalCode' => '32835',
			'CountryCode' => 'US'
		)
	);
$request['RequestedShipment']['Recipient'] = array(
		'Address' => array(
			'StreetLines' => array($address),
			'City' => $shippingcity,
			'StateOrProvinceCode' => '',
			'PostalCode' => $shippingzip,
			'CountryCode' => $country,
			'Residential' => false
		)
	);
$request['RequestedShipment']['PackageCount'] = '1';
$request['RequestedShipment']['RequestedPackageLineItems'] = array(
		'SequenceNumber'=>1,
		'GroupPackageCount'=>1,
		'Weight' => array(
			'Value' => $weight,
			'Units' => 'LB'
		),
		'Dimensions' => array(
			'Length' => $depth,
			'Width' => $width,
			'Height' => $height,
			'Units' => 'IN'
		)
	);


$tabl1="";

try {
	if(setEndpoint('changeEndpoint')){
		$newLocation = $client->__setLocation(setEndpoint('endpoint'));
	}
	
	$response = $client -> getRates($request);
        
    if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR'){  	
    	$rateReply = $response -> RateReplyDetails;
    	
    	$serviceType = $rateReply -> ServiceType;
    	if($rateReply->RatedShipmentDetails && is_array($rateReply->RatedShipmentDetails)){
			$amount = number_format($rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
		}elseif($rateReply->RatedShipmentDetails && ! is_array($rateReply->RatedShipmentDetails)){
			$amount = number_format($rateReply->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
		}
        if(array_key_exists('DeliveryTimestamp',$rateReply)){
        	$deliveryDate= $rateReply->DeliveryTimestamp;
        }else if(array_key_exists('TransitTime',$rateReply)){
        	$deliveryDate=$rateReply->TransitTime ;
        }else {
        	$deliveryDate='';
        }  

		if($serviceType!="" && $amount!="" && $deliveryDate!="")
		{
			$tabl1='<div class="courier_services_frame">
			<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/fedex.jpg" /></div></div>
			<div class="courier_name_holder"><div class="courier_name">'.$serviceType.'</div></div>
			<div class="courier_price_holder"><div class="courier_price">$'.$amount.'</div></div>

			 <div class="c_s_special_rates_left"></div>
			<div class="c_s_special_rates_mid">Pickup Date: '.$date.'&nbsp;&nbsp;&nbsp;Delivery Date: '.$deliveryDate.'</div>
			<div class="arrow_holder"><div class="arrow-right"></div></div>
			<div class="c_s_special_rates_right">&nbsp;&nbsp;$'.$amount.'</div>
			 </div>';
		}
        
        //printSuccess($client, $response);
    }else{
        printError($client, $response);
    } 
   // writeToLog($client);    // Write to log file   
} catch (SoapFault $exception) {
   //printFault($exception, $client);        
}



/**/

$tabl2="";
$request['RequestedShipment']['ServiceType'] = 'INTERNATIONAL_ECONOMY'; // valid values STANDARD_OVERNIGHT, PRIORITY_OVERNIGHT, FEDEX_GROUND, ...
try {
	if(setEndpoint('changeEndpoint')){
		$newLocation = $client->__setLocation(setEndpoint('endpoint'));
	}
	
	$response = $client -> getRates($request);
        
    if ($response -> HighestSeverity != 'FAILURE' && $response -> HighestSeverity != 'ERROR')
	{  	
    	$rateReply = $response -> RateReplyDetails;


		$serviceType = $rateReply -> ServiceType;
    	if($rateReply->RatedShipmentDetails && is_array($rateReply->RatedShipmentDetails)){
			$amount = number_format($rateReply->RatedShipmentDetails[0]->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
		}elseif($rateReply->RatedShipmentDetails && ! is_array($rateReply->RatedShipmentDetails)){
			$amount = number_format($rateReply->RatedShipmentDetails->ShipmentRateDetail->TotalNetCharge->Amount,2,".",",");
		}
        if(array_key_exists('DeliveryTimestamp',$rateReply)){
        	$deliveryDate= $rateReply->DeliveryTimestamp;
        }else if(array_key_exists('TransitTime',$rateReply)){
        	$deliveryDate= $rateReply->TransitTime ;
        }else {
        	$deliveryDate='';
        }
        //echo $serviceType . $amount. $deliveryDate;

		if($serviceType!="" && $amount!="" && $deliveryDate!="")
		{
			$tabl2='<div class="courier_services_frame">
			<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/fedex.jpg" /></div></div>
			<div class="courier_name_holder"><div class="courier_name">'.$serviceType.'</div></div>
			<div class="courier_price_holder"><div class="courier_price">$'.$amount.'</div></div>

			 <div class="c_s_special_rates_left"></div>
			<div class="c_s_special_rates_mid">Pickup Date: '.$date.'&nbsp;&nbsp;&nbsp;Delivery Date: '.$deliveryDate.'</div>
			<div class="arrow_holder"><div class="arrow-right"></div></div>
			<div class="c_s_special_rates_right">&nbsp;&nbsp;$'.$amount.'</div>
			 </div>';
		}   	
        
        //printSuccess($client, $response);
    }else{
        printError($client, $response);
    } 
    //writeToLog($client);    // Write to log file   
} catch (SoapFault $exception) {
   //printFault($exception, $client);        
}


/* FOR FEDEX */



/* FOR USPS */


function USPSParcelRate($weight,$width,$depth,$height,$dest_zip,$dest_country,$origin_zip,$pack_size,$userName,$servicecode) {
// =============== DON'T CHANGE BELOW THIS LINE API CALL===============
$url = "http://Production.ShippingAPIs.com/ShippingAPI.dll";
$ch = curl_init();
// set the target url
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// parameters to post
curl_setopt($ch, CURLOPT_POST, 1);
$data = "API=IntlRateV2&XML=<IntlRateV2Request USERID=\"$userName\">
	<Revision>2</Revision>
	<Package ID=\"0\">
	<Pounds>$weight</Pounds>
	<Ounces>0</Ounces>
	<Machinable>False</Machinable>
	<MailType>All</MailType>	
	<ValueOfContents>0.0</ValueOfContents>
	<Country>$dest_country</Country>
	<Container>SM FLAT RATE BOX</Container>
	<Size>$pack_size</Size>
	<Width>$width</Width>
	<Length>$depth</Length>
	<Height>$height</Height>
	<Girth>0</Girth>
	<OriginZip>$origin_zip</OriginZip>
	<!-- <ZipDestination>$dest_zip</ZipDestination> -->
	<CommercialFlag>Y</CommercialFlag>
	<ExtraServices>
	<ExtraService>$servicecode</ExtraService>
	</ExtraServices>
	</Package>

	</IntlRateV2Request>";	

// send the POST values to USPS
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$result=curl_exec ($ch);
$data = strstr($result, '<?');
// echo '<!-- '. $data. ' -->'; // Uncomment to show XML in comments
$xml_parser = xml_parser_create();
xml_parse_into_struct($xml_parser, $data, $vals, $index);
xml_parser_free($xml_parser);
$params = array();
$level = array();

//print_r($result); 
foreach ($vals as $xml_elem) {
if ($xml_elem['type'] == 'open') {
if (array_key_exists('attributes',$xml_elem)) {
list($level[$xml_elem['level']]) = array_values($xml_elem['attributes']);
} else {
$level[$xml_elem['level']] = $xml_elem['tag'];
}
}
if ($xml_elem['type'] == 'complete') {
$start_level = 1;
$php_stmt = '$params';
while($start_level < $xml_elem['level']) {
$php_stmt .= '[$level['.$start_level.']]';
$start_level++;
}
$php_stmt .= '[$xml_elem[\'tag\']] = $xml_elem[\'value\'];';
eval($php_stmt);
}
}
curl_close($ch);
 //echo '<pre>'; print_r($params); echo'</pre>'; // Uncomment to see the full array
return $params['INTLRATEV2RESPONSE'];
}

$res = USPSParcelRate($weight,$width,$depth,$height,$shippingzip,$country_usps,'32835',"REGULAR","607RAAVL6910","106");

//print_r($res);
$new_array=array();
foreach ($res as $res_val) 
{
	if($res_val)
	{
		for($j=0; $j < sizeof($res_val); $j++)
		{	
			if(isset($res_val[$j]))
			{
				array_push($new_array,$res_val[$j]);
			}
		}


		//if($new_array)
		//{
			//for($j=0; $j < sizeof($new_array)+1; $j++)
			//{
				//echo $new_array[$j]["SVCDESCRIPTION"].'<br/>';
				//echo $new_array[$j]["COMMERCIALPOSTAGE"].'<br/>';
				//echo $new_array[$j]["SVCCOMMITMENTS"].'<br/>';

			//}
		//}	
	}
}
/* FOR USPS */
   
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
            <button type="button" onclick="location.href='http://localhost:88/shopitus/login.php'" class="btn btn-danger btn-round">Sign In</button>
            <button type="button" onclick="location.href='http://localhost:88/shopitus/contact.php'" class="btn btn-danger btn-round">Sign Up</button>
        </div>
    </div>
  </div>
</div>

<!-- By amit  <div id="header">

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
</div>  By amit  -->


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


<!-- <div id="navigator_frame" >
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
</div> -->



 <div id="shipping_calculator_frame" style="xbackground-color:#F30; min-height:1350px;display: table;">
 <!-- <div id="xs_c_main_image" style="height:100px;"></div> -->
 
 
 <div id="s_c_inner" style="  xbackground-color:#CFF;">
 <div id="s_c_top_separator"></div>
 <div id="s_c_title" style="xbackground-color:#6C6;">International Shipping Calculator</div>
 <div id="s_c_top_description">Your estimated shipping cost appear below.</div> 
<div id="shipping_calculation_top_frame" style="padding: 0;  margin: 0px auto; font-size: 14px !important; font-family: inherit;">
<div class="shipping_calculator_basic_details">
<div class="basic_details_title"> Shipped From</div> 
<div class="basic_details_content">
MyShopUS Warehouse<br />
Orlando, Florida,<br />
United States of America.
</div>
 </div>
<div class="shipping_calculator_basic_details" style="float:right;">
<div class="basic_details_title">Shipped To</div>
<div class="basic_details_content">

<?php
echo $address."<br />".ucfirst($country);
?>

</div>

</div>

</div> 
 


<div id="package_weight_main">
<div class="package_weight_details"><div class="package_weight_inner_left">Package Weight</div><div class="package_weight_inner_right"><?php echo $weight.$metrics;?></div></div>
<div class="package_weight_details" style="margin-top:35px;"><div class="package_weight_inner_left">Date of Pickup</div><div class="package_weight_inner_right"><?php echo $date; ?></div></div>
</div>  
 
 







<div id="courier_main_frame">

<!-- <div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/dhl.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">DHL Express</div></div>
<div class="courier_price_holder"><div class="courier_price">$45</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div> -->

<?PHP 
$val_dhl_all=$xml_str->GetQuoteResponse->BkgDetails;
if($val_dhl_all)
{
for($i=0; $i<sizeof($val_dhl); $i++)
{
	?>

	<div class="courier_services_frame">
	<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/dhl.jpg" /></div></div>
	<div class="courier_name_holder"><div class="courier_name"><?php echo($val_dhl[$i]->ProductShortName); ?></div></div>
	<div class="courier_price_holder"><div class="courier_price">$<?php echo(number_format((float)$val_dhl[$i]->ShippingCharge, 2, '.', '')); ?></div></div>

	 <div class="c_s_special_rates_left"></div>
	<div class="c_s_special_rates_mid">Pickup Date: <?php echo($val_dhl[$i]->PickupDate); ?>&nbsp;&nbsp;&nbsp;Delivery Date: <?php echo($val_dhl[$i]->DeliveryDate); ?></div>
	<div class="arrow_holder"><div class="arrow-right"></div></div>
	<div class="c_s_special_rates_right">&nbsp;&nbsp;$<?php echo(number_format((float)$val_dhl[$i]->ShippingCharge, 2, '.', '')); ?></div>
	 </div>
	<?PHP
}

}
else
{
	//echo"<span style='color:red'>Please enter all the valid record</span>";
}
?>


<?PHP 

//print_r($fedex_record);

if($tabl1)
{
	echo $tabl1;
}
else
{
	//echo"<span style='color:red'>Please enter all the valid record</span>";
}
if($tabl2)
{
	echo $tabl2;
}
else
{
	//echo"<span style='color:red'>Please enter all the valid record</span>";
}
?>


<?PHP
//print_r($new_array);
if($new_array)
	{
		for($j=0; $j < sizeof($new_array); $j++)
		{
			?>
			<div class="courier_services_frame">
			<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/airmail.jpg" /></div></div>
			<div class="courier_name_holder"><div class="courier_name"><?PHP echo html_entity_decode($new_array[$j]["SVCDESCRIPTION"]); ?></div></div>
			<div class="courier_price_holder"><div class="courier_price">$<?PHP echo $new_array[$j]["POSTAGE"]; ?></div></div>

			 <div class="c_s_special_rates_left"></div>
			<div class="c_s_special_rates_mid">Pickup Date: <?php echo $date; ?>&nbsp;&nbsp;&nbsp;<?PHP echo $new_array[$j]["SVCCOMMITMENTS"]; ?></div>
			<div class="arrow_holder"><div class="arrow-right"></div></div>
			<div class="c_s_special_rates_right">&nbsp;&nbsp;$<?PHP echo $new_array[$j]["POSTAGE"]; ?></div>
			 </div>

			<?PHP
			//echo $new_array[$j]["SVCDESCRIPTION"].'<br/>';
			//echo $new_array[$j]["POSTAGE"].'<br/>';
			//echo $new_array[$j]["SVCCOMMITMENTS"].'<br/>';

		}
	}	
?>

<?php if($val_dhl_all=="" && $fedex_record=="" && $new_array="") { echo "Please select valid filde first from previous page.";  } ?>

<!-- <div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/airmail.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">USPS Economy</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>





<div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/tnt.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">TNT Economy</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>





<div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/tnt.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">TNT Express</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>
 -->











<!-- <div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/fedex.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">Fedex Priority</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>




<div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/airmail.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">USPS Priority</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>




<div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/airmail.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">USPS Express</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div>





<div class="courier_services_frame">
<div class="courier_icon_holder"><div class="courier_icon"><img src="images/courier_logos/airmail.jpg" /></div></div>
<div class="courier_name_holder"><div class="courier_name">USPS First Class International Parcel</div></div>
<div class="courier_price_holder"><div class="courier_price">$34</div></div>

 <div class="c_s_special_rates_left"></div>
<div class="c_s_special_rates_mid">20% discount for silver members</div>
<div class="arrow_holder"><div class="arrow-right"></div></div>
<div class="c_s_special_rates_right">&nbsp;&nbsp;$23</div>
 </div> -->





</div> 







</div>
<div style="float: left;clear:both">&nbsp;</div>
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
