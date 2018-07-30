<?php
error_reporting(E_ERROR | E_PARSE);
session_start();
include("config.php");
include("external_links.php");


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShopItUS.com :: Package Forwarding to Australia & NewZeland</title>

<link rel="stylesheet" href="css/layout.css" type="text/css" />
<link rel="stylesheet" media="(min-width: 1001px)" href="css/style.css" type="text/css" />

<link rel="stylesheet" media="(max-width:1000px)" href="css/1000px.css" type="text/css" />
 <link rel="stylesheet" media="(max-width: 720px)" href="css/720px.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator1.css" type="text/css">
<link rel="stylesheet" media="(max-width: 720px)" href="css/navigator2.css" type="text/css">

<script src="http://static.tumblr.com/jdwzxqr/rhgmjsptj/fastclick.js"></script>
<script src="cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.1/modernizr.min.js"></script>
<script   src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
     <link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <style>
        html,body{
                max-width: 100%;overflow-x:hidden;
            }
       .btn-round{
border-radius: 20px;
}
    </style>
    <style>
.fa {
  padding: 4px;
  font-size: 15px;
  width: 30px;
  text-align: center;
  text-decoration: NOne;
  margin: 5px 2px;
  border-radius: 50%;
}

.fa:hover {
    
}

.fa-facebook {
  background: #3B5998;
  color: white;
}

.fa-twitter {
  background: #55ACEE;
  color: white;
}

.fa-google {
  background: #dd4b39;
  color: white;
}


.fa-pinterest {
  background: #cb2027;
  color: white;
}


@keyframes example {
    0%   {background-color: #98FB98; left:0px; top:0px;}
    25%  {background-color: #EEE8AA ; left:200px; top:0px;}
    50%  {background-color: #98FB98; left:200px; top:200px;}
    75%  {background-color: #EEE8AA ; left:0px; top:200px;}
    100% {background-color: #98FB98; left:0px; top:0px;}
}



.background-color:hover
{
        background:#53a7ea;
}



</style>
<style>
* {
    box-sizing: border-box;
}

.columns {
  float: left;
    width: 25%;
    padding: 8px;
    margin-top: 70px;

}

.price {
    list-style-type: NOne;
    border: 1px solid #eee;
    margin: 0;
    padding: 0;
    -webkit-transition: 0.3s;
    transition: 0.3s;
}

.price:hover {
    box-shadow: 0 8px 12px 0 rgba(0,0,0,0.2);
    border: 3px solid darkblue;
}

.price .header {
    background-color:;
    color:white;
    font-size: 25px;
}

.price li {
    border-bottom: 1px solid #eee;
    padding: 20px;
    text-align: center;
}

.price .grey {
    background-color: #3E8EE2;
    font-size: 20px;
    color:white;
}

.button {
    background-color: #4CAF50;
    border: NOne;
    color: white;
    padding: 10px 25px;
    text-align: center;
    text-decoration: NOne;
    font-size: 18px;
}

@media only screen and (max-width: 600px) {
    .columns {
        width: 100%;
    }
}
</style>
<style>
.tooltip {
    position: relative;
    display: inline-block;
    border-bottom: 1px dotted black;
}

.tooltip .tooltiptext {
    visibility: hidden;
    width: 120px;
    background-color: lime;
    color: #fff;
    text-align: center;
    border-radius: 6px;
    padding: 5px 0;
    
    /* Position the tooltip */
    position: absolute;
    z-index: 1;
    top: -5px;
    left: 105%;
}
p
{
  color: black;
}
h3
{
	font-style: bold;
	font-weight: 600px;
	font-size: 18px;
}
body
{
  background-color: #CDD9DF;
}

.tooltip:hover .tooltiptext {
    visibility: visible;
}
</style>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>

<body>
   
<div>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="index.php" style="margin-top:8px">
    <img src="images/title.jpg" width="200" height="50" alt="">
  </a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav"  style="margin-top:25px">
        <li><a href="howwework.php">HOW IT WORKS</a></li>
          <li><a href="shippingcalculator.php">SHIPPING CALCULATOR</a></li>
        <li><a href="pricing.php">PRICING</a></li>
        <li><a href="shopmy.php">SHOPE</a></li>
           <li><a href="frequently_asked_questions.php">F.A.Q.</a></li>
           <li><a href="contact.php">CONTACT</a></li>
          
      </ul>
         <ul class="nav navbar-nav navbar-right" style="padding-top:10px;padding-bottom:10px;">
          <button type="button" onclick="location.href='login.php'" class="btn btn-danger btn-round">Sign In</button>
            <button type="button" onclick="location.href='register.php'" class="btn btn-danger btn-round">Sign Up</button><br>
             <a href="#" class="fa fa-facebook"></a>
             <a href="#" class="fa fa-twitter"></a>
             <a href="#" class="fa fa-google"></a>
             <a href="#" class="fa fa-pinterest"></a>
      </ul>
    </div>
  </div>
</nav>
<div ><img src="images/online_shopping.jpg" class="img-responsive">
           </div>
    <div class="container" style="margin-top: 20px;margin-bottom: 50px;background-color: #EAEAEA">
    <h1 style="text-align: center;color: #0033cc"><strong>PRIVACY POLICY</strong></h1>
      <p style="text-align: justify;">ShopitUS.com, RAAV,LLC and its affiliates (collectively, we,our,us or ShoputUS ) is committed to your privacy. This Privacy  Policy applies to and governs data collection and usage on the ShopitUS website  (shopitUS.com, the Site). It is intended to describe for you our practices  regarding: The information we collect and the information we hold on  behalf of our website visitors (you or your); How that information may be  used; and With whom we may share that information</p>
      <p>If you are located in the EU, you will also be asked to provide clear and unequivocal affirmative consent to the collection, processing, and sharing of your user information via cookies and similar technologies.</p>
      <p>Notice to EU Individuals: this Privacy Statement and its enumerated policies are intended to comply with Regulation (EU) 2016/679 of the European Parliament and of the Council of 27 April 2016 (the &ldquo;General Data Protection Regulation&rdquo; or &ldquo;GDPR&rdquo;) and provide appropriate protection and care with respect to the treatment of your user information in accordance with the GDPR.</p>
      <p style="text-align: justify;">&nbsp;</p>
    <p style="text-align: justify;">The ShopitUS Privacy Policy has been compiled to better  serve those who are concerned with how their 'Personally Identifiable  Information' (PII) is being used online. PII, as described in US privacy law  and information security, is information that can be used on its own or with  other information to identify, contact, or locate a single person, or to  identify an individual in context. Please read our privacy policy carefully to  get a clear understanding of how we collect, use, protect or otherwise handle  your Personally Identifiable Information in accordance with our website.What personal information do we collect from the people that  visit our blog, website or app? When ordering or registering on our site, as appropriate,  you may be asked to enter your name, email address, mailing address, phone  number, credit card information or other details to help you with your  experience.</p>
    <h3>When do we collect information?</h3>
    <p style="text-align: justify;">We collect information from you when you register on our  site, use Live Chat or enter information or interact,  provide us with feedback on our products or services on the shopitus.com site. How do we use your information? We may use the information we collect from you when you  register, make a purchase, sign up for our newsletter, respond to a survey or  marketing communication, surf the website, or use certain other site features  in the following ways:</p>
<ul>
  <li>To personalize  your experience and to allow us to deliver the type of content and product  offerings in which you are most interested.</li>
  <li>To improve our  website in order to better serve you.</li>
  <li>To allow us to  better service you in responding to your customer service requests.</li>
  <li>To administer  a contest, promotion, survey or other site feature.</li>
  <li>To quickly  process your transactions.</li>
  <li>To send  periodic emails regarding your order or other products and services.</li>
</ul>
<p style="text-align: justify;">Opt out of email promotions  click on the unsubscribe link located in all of our promotional e–mails (Requests to opt out of promotional emails  will be honored within 5 business days.)</p>
<h3>How do we protect your information?</h3>
<p style="text-align: justify;">Our website is scanned on a regular basis for security holes  and known vulnerabilities in order to make your visit to our site as safe as  possible.</p>
  <h3>We use regular Malware Scanning.</h3>
  <p style="text-align: justify;">Your personal information is contained behind secured  networks and is only accessible by a limited number of persons who have special  access rights to such systems, and are required to keep the information  confidential. In addition, all sensitive/credit information you supply is  encrypted via Secure Socket Layer (SSL) technology. We implement a variety of security measures when a user  places an order to maintain the safety of your personal information. All transactions are processed through a gateway provider  and are not stored or processed on our servers.</p>
  <h3>Do we use cookies'?</h3>
  <p style="text-align: justify;">Yes. Cookies are small files that a site or its service  provider transfers to your computer's hard drive through your Web browser (if  you allow) that enables the site's or service provider's systems to recognize  your browser and capture and remember certain information. For instance, we use  cookies to help us remember and process the items in your shopping cart. They  are also used to help us understand your preferences based on previous or  current site activity, which enables us to provide you with improved services.  We also use cookies to help us compile aggregate data about site traffic and  site interaction so that we can offer better site experiences and tools in the  future.</p>
  <h3>We use cookies to:</h3>
  <p style="text-align: justify;">
    <ul>
      <li>Help remember  and process the items in the shopping cart.</li>
      <li>Understand and  save user's preferences for future visits.</li>
    </ul>
    <p style="text-align: justify;">You can choose to have your computer warn you each time a  cookie is being sent, or you can choose to turn off all cookies. You do this  through your browser settings. Since browser is a little different, look at  your browser's Help Menu to learn the correct way to modify your cookies.If you turn cookies off, Some of the features that make your  site experience more efficient may not function properly. It won't affect the  user's experience that make your site experience more efficient.</p>
  </p>
  <h3>Third-party disclosure</h3>
  <p style="text-align: justify;">We do not sell, trade, or otherwise transfer to outside  parties your Personally Identifiable Information unless we provide users with  advance notice. This does not include website hosting partners and other  parties who assist us in operating our website, conducting our business, or  serving our users, so long as those parties agree to keep this information  confidential. We may also release information when it's release is appropriate  to comply with the law, enforce our site policies, or protect ours or others'  rights, property or safety. However,  non-personally identifiable visitor information may be provided to other  parties for marketing, advertising, or other uses.</p>
  <h3>Third-party links</h3>
  <p style="text-align: justify;">Occasionally, at our discretion, we may include or offer  third-party products or services on our website. These third-party sites have  separate and independent privacy policies. We therefore have no responsibility  or liability for the content and activities of these linked sites. Nonetheless,  we seek to protect the integrity of our site and welcome any feedback about  these sites.</p>
  <h3>Google</h3>
  <p style="text-align: justify;">Google's advertising requirements can be summed up by  Google's Advertising Principles. They are put in place to provide a positive  experience for users.<a href="https://support.google.com/adwordspolicy/answer/1316548?hl=en">https://support.google.com/adwordspolicy/answer/1316548?hl=en</a> </p>
  <h3>We use Google AdSense Advertising on our website.</h3>
  <p style="text-align: justify;">Google, as a third-party vendor, uses cookies to serve ads  on our site. Google's use of the DART cookie enables it to serve ads to our  users based on previous visits to our site and other sites on the Internet.  Users may opt-out of the use of the DART cookie by visiting the Google Ad and  Content Network privacy policy.</p>
  <h3>We have implemented the following:</h3>
  <p style="text-align: justify;">
    <ul>
      <li>Remarketing  with Google AdSense</li>
    </ul>
    <p>We, along with third-party vendors such as Google use  first-party cookies (such as the Google Analytics cookies) and third-party  cookies (such as the DoubleClick cookie) or other third-party identifiers  together to compile data regarding user interactions with ad impressions and  other ad service functions as they relate to our website.
  </p>
    </p>
    <p>For EU individuals, essential cookies also help inform Site whether you require, or have already been served, an affirmative consent request in connection with the GDPR. Essential cookies include analytics cookies, which provide us data that allows Site to better understand its users and improve the Site based on what we have learned from that data.</p>
    <p>Notwithstanding any other provision, we partner with third parties that collect information across various channels, including offline and online, for purposes of delivering more relevant advertising to you. Our partners may place or recognize a cookie on your computer, device, or directly in our emails/communications, and we may share personal information with them if you have submitted such information to us, such as your name, postal address, or email address. Our partners may link the nonpersonal information we share with them to the cookie stored on your browser or device, and they may collect information such as your IP address, browser or operating system type and version, and demographic or inferred-interest information. Our partners use this information to recognize you across different channels and platforms over time for advertising, analytics, attribution, and reporting purposes. For example, our partners may deliver an ad to you in your web browser based on a purchase you made in a physical retail store, or they may send a personalized marketing email to you based on the fact that you visited a particular website.</p>
    <p>To learn more about interest-based advertising in general and to opt out, please visit <a href="http://optout.aboutads.info/" rel="noopener" target="_blank">optout.aboutads.info</a> and/or <a href="http://optout.networkadvertising.org/" rel="noopener" target="_blank">optout.networkadvertising.org</a> and/or <a href="https://preferences-mgr.truste.com/" rel="noopener" target="_blank">preferences-mgr.truste.com</a>, or if located in the European Union please visit <a href="https://youronlinechoices.eu/" rel="noopener" target="_blank">youronlinechoices.eu</a>. Please note this does not opt you out of being served advertising. You will continue to receive generic ads.</p>
    <p>&nbsp; </p>
    <h3>Opting out:</h3>
  <p style="text-align: justify;"> Users can set  preferences for how Google advertises to you using the Google Ad Settings page.  Alternatively, you can opt out by visiting the Network Advertising Initiative  Opt Out page or by using the Google Analytics Opt Out Browser add on.California Online Privacy Protection Act CalOPPA is the first state law in the nation to require  commercial websites and online services to post a privacy policy. The law's  reach stretches well beyond California to require any person or company in the  United States (and conceivably the world) that operates websites collecting  Personally Identifiable Information from California consumers to post a  conspicuous privacy policy on its website stating exactly the information being  collected and those individuals or companies with whom it is being shared. -  See more at:  <a href="http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf">http://consumercal.org/california-online-privacy-protection-act-caloppa/#sthash.0FdRbT51.dpuf</a></p>
  <h3>According to CalOPPA, we agree to the following:</h3>
  <p style="text-align: justify;">Users can visit our site anonymously. Once this privacy policy is created, we will add a link to  it on our home page or as a minimum, on the first significant page after  entering our website. Our Privacy Policy link includes the word 'Privacy' and can  easily be found on the page specified above.</p>
  <h3>You will be notified of any Privacy Policy changes:</h3>
  <p style="text-align: justify;">
    <ul>
      <li>On our Privacy  Policy Page Can change your personal information:</li>
      <li>By logging in  to your account How does our site handle Do Not Track signals?</li>
     <p style="text-align: justify;"> We honor Do Not Track signals and Do Not Track, plant  cookies, or use advertising when a Do Not Track (DNT) browser mechanism is in  place. Does our site allow third-party behavioral tracking? It's also important to note that we allow third-party  behavioral tracking COPPA (Children Online Privacy Protection Act) When it comes to the collection of personal information from  children under the age of 13 years old, the Children's Online Privacy  Protection Act (COPPA) puts parents in control. The Federal Trade Commission,  United States' consumer protection agency, enforces the COPPA Rule, which  spells out what operators of websites and online services must do to protect  children's privacy and safety online. We do not specifically market to children under the age of  13 years old. Do we let third-parties, including ad networks or plug-ins  collect PII from children under 13?</p>
    </ul>
  </p>
  <h3>Fair Information Practices</h3>
  <p style="text-align: justify;">The Fair Information Practices Principles form the backbone  of privacy law in the United States and the concepts they include have played a  significant role in the development of data protection laws around the globe.  Understanding the Fair Information Practice Principles and how they should be  implemented is critical to comply with the various privacy laws that protect personal  information. In order to be in line with Fair Information Practices we  will take the following responsive action, should a data breach occur:
    <ul>
      <li>Within 7  business days</li>
      <p style="text-align: justify;">We will notify the users via in-site notification</p>
      <li>Within 7  business days</li>
      <p style="text-align: justify;">We also agree to the Individual Redress Principle which  requires that individuals have the right to legally pursue enforceable rights  against data collectors and processors who fail to adhere to the law. This  principle requires not only that individuals have enforceable rights against  data users, but also that individuals have recourse to courts or government  agencies to investigate and/or prosecute non-compliance by data processors.</p>
    </ul></p>
    <p><strong>How we use collected information</strong></p>
    <p>This Site collects and uses Users&rsquo; personal information for the following purposes:</p>
    <ul>
      <li>To improve customer service; Your information helps us to more effectively respond to your customer service requests and support needs.</li>
      <li>To personalize user experience; We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li>
      <li>To improve our Site; We continually strive to improve our website offerings based on the information and feedback we receive from you.</li>
      <li>To process transactions; We may use the information Users provide about themselves when placing an order only to provide service to that order. We do not share this information with outside parties except to the extent necessary to provide the service.</li>
      <li>To administer a content, promotion, survey or other Site feature</li>
      <li>To send Users information they agreed to receive about topics we think will be of interest to them.</li>
      <li>To send periodic emails</li>
    </ul>
    <p style="text-align: justify;">Notice to EU Individuals: As outlined in this Privacy Statement, Site will not process your user information without a lawful basis to do so, as such bases are defined in Article 6 of the GDPR. In general, Site will process your user information on the legal bases of consent, contract (if you have entered into an agreement with us and such processing is a necessary part thereof), or legal obligation (as noted above). Site may also process certain user information on the basis of the following legitimate interests, provided that such interests are not overridden by your privacy rights and interests: delivering and continuing to develop and improve the Site, learning from your behavior on the Site (e.g., analyzing traffic) to better serve you and other Site users, helping us modify or enhance the Site and its content, receiving insight as to what users do (and don&rsquo;t) like about our Site or aspects thereof, and providing a stable, consistent, and secure user experience in connection with the Site.
    <p><strong>Cross-border Transfers</strong></p>
    <p>Your user information may be transferred to other countries in connection with your use of the Site. If you access or use the Site outside of the United States, your user information will be transferred to our servers in the United States.</p>
    <p>Site participates in and has certified its compliance with the EU-U.S. Privacy Shield Framework and the Swiss-U.S. Privacy Shield Framework. Site is committed to subjecting all personal data received from European Union (EU) member countries and Switzerland, respectively, in reliance on each Privacy Shield Framework, to the Framework&rsquo;s applicable Principles. To learn more about the Privacy Shield Framework, visit the U.S. Department of Commerce&rsquo;s Privacy Shield List at https://www.privacyshield.gov/list. Site is responsible for the processing of personal data it receives, under each Privacy Shield Framework, and subsequently transfers to a third party acting as an agent on its behalf. Site complies with the Privacy Shield Principles for all onward transfers of personal data from the EU and Switzerland, including the onward transfer liability provisions With respect to personal data received or transferred pursuant to the Privacy Shield Frameworks, Site is subject to the regulatory enforcement powers of the U.S. Federal Trade Commission. In certain situations, Site may be required to disclose personal data in response to lawful requests by public authorities, including to meet national security or law enforcement requirements. If you have an unresolved privacy or data use concern that we have not addressed satisfactorily, please contact our U.S.-based third party dispute resolution provider (free of charge) at https://feedback-form.truste.com/watchdog/request Under certain conditions, more fully described on the Privacy Shield website at https://www.privacyshield.gov/article?id=How-to-Submit-a-Complaint, you may invoke binding arbitration when other dispute resolution procedures have been exhausted.</p>
    <div id="copyright"></div>
    <p style="text-align: justify;">    
    <ul>
      <li>How can I contact Shop It US?</li>
      <li>You may contact us using any of the following options:</li>
      <li>Send an e–mail to us at serviceteam@shopitus.com</li>
      <li>Fax us at 407-520-5424</li>
      <li>Write to us at Shop It Us, RAAV,LLC, 7734 Bridgestone Dr.,  Orlando, Fl. 32835</li>
    </ul>
  </p>
  


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
<div id="footer_map_content" style="text-align:center">
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
 
 <a href="newpricing.php">Pricing</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="shop.php">Shop</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="frequently_asked_questions.php">F.&nbsp;A.&nbsp;Q.</a> &nbsp;&nbsp;|&nbsp;&nbsp; <a href="TOS1.php">Terms of Service</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="privacypolicy.php">Privacy</a>&nbsp;&nbsp;|&nbsp;&nbsp; <a href="contact.php">Contact Us</a>

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
<!--<?php

if($_SESSION['memberpass'] == "valid")
{
  
?>
<a href="members/index.php"><div class="h_mid_inner_button" style="width:55%;  background-color:#FFF; xfont-size:18px; color:#C00;">MY ACCOUNT</div></a><a href="logout.php"><div class="h_mid_inner_button" style="background-color:#69F;">Logout</div></a>

<?php
}else{
?>

<?php
}
?>-->
</div>







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
   var s = document.getElementsByTagName('script')[0]; s.parentNOde.insertBefore(ga, s);
   })();

  </script>

</body>
</html>
