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
    <h1 style="text-align: center;color: #0033cc"><strong>Terms Of Service and Use Agreement </strong></h1>
      <p style="text-align: justify;">This Terms of use agreement (“Agreement”) constitutes a legally binding agreement made between you,
who personally or on behalf of an entity (“user” or “you”) RAAV, LLC  and ShopitUS.com (collectively “company or “we” or “us” or “our”), concerning your access and use of the website http://www.shopitus.com as well as any other media form, media channel,mobile website, mobile application, related or connected to (collectively, the “website”). PLEASE READ THE ENTIRE TERMS AND CONDITIONS OF USE CAREFULLY BEFORE YOU USE SHOPITUS.COM.  IF YOU DO NOT AGREE TO ALL THESE TERMS AND CONDITIONS, YOU MAY NOT USE THE SITE. BY USING THE SITE, YOU ARE DEEMED TO HAVE ACCEPTED THESE TERMS AND CONDITIONS. The website provides the following service (s): Package and mail forwarding for export, package consolidation for  export  from the USA to global countries throughout the world.  Activated accounts will be issued  USA address here in our Orlando, Florida facility that you can use to receive packages ordered from USA retailers.  You will be notified by by email  and on your member page on the Shopit us website notifying you of  packages that we received that were ordered by you. The packages will be shipped to you via your instructions set up on your members account page.  The account must be fully funded and customs form must be completed along with forwarding information. Packages received that you have ordered on free accounts with single packages with be shipped in same packaging as received. Photos may be requested as set up on your members page instructions. Accounts set up as Premium with be offered package consolidation service into a single shipping box, when applicable, offing a significant savings on shipping costs.</p>
    <p style="text-align: justify;">All users which are minors in the jurisdiction in which they reside, usually under 18 years of age,  must have the permission of their parents and be directly supervised by your parent or guardian and agree to the terms of this agreement.</p>
    <h3>Payment</h3>
    <p style="text-align: justify;">ShopitUS, RAAV, LLC bills you through the online billing account for purchases, products or services. You agree to make payments for all services you have agreed to make through you chosen payment method with re occurring charges that you have agreed to without prior approval from you. ShopitUS reserves the right to correct any error or mistakes in pricing even if it has already received payment.</p>
    <h3>User Representations</h3>
    <p style="text-align: justify;">By using ShopitUS RAAV, LLC you represent and warrant that:</p>
<ul>
  <li>All information you submit is truthful and accurate.</li>
  <li>You will maintain the accuracy of your information.</li>
  <li> You will keep you password confidential and will be reponsible for all use of your password and account.</li>
  <li> You are not a minor in the jursidiction in which you reside, or if a minor you have received permission from your parent or guardian to use this website.</li>
  <li>ShopitUS RAAV, LLC reserves the right to suspend or terminate any account in violation of Terms Of Service agreement.</li>
</ul>
<h3>Terms Of Service Amendments</h3>
<p style="text-align: justify;">Amendments to these Terms of Services  as needed or required by law, will be changed or modified by making those changes directly to the Agreement on this Site. These changes take effect when posted to the site. By continuing to access or use ShopitUS after any such amendment, you agree to be bound by the terms of the amended Terms Of Service.</p>
<h3>Our Privacy Policy</h3>
<p style="text-align: justify;">We care about the privacy of our users. Please review the company privacy policy. By using RAAV, LLC ShopitUS website you are consenting to having your personal data transferred to and processed in The United States. By using the RAAV, LLC ShopitUS website you are consenting to the terms of our Privacy Policy. You may access the Privacy Policy by clicking on this link. Please review the Privacy Policy before you use the Site. If you are unwilling to accept the terms and conditions of the Privacy Policy, please do not use the Site. ShopitUS will not share, rent or lease your personal information to any third party for  FINISH</p>
  <h3>You agree not to use the Site or the Services to:</h3>
  <p style="text-align: justify;">The detriment  of ShopitUS or users in any way, including by using intellectual information you find here to compete against ShopitUS RAAV, LLC . You shall not decompile, reverse engineer, disassemble, attemp to derive the source code of or decrypt the application, make any modification, adaption, improvement, enhancement, derivative work from the application or summaries.
  No Automated Queries for the purpose of obtaining backlink information.
  No Copies</p>
  <h3>Copyrights</h3>
  <p style="text-align: justify;">All content on ShopitUS.com, site design, text, images, Database Interfaces and all content  of arrangements is copyrighted by ShopitUS  RAAV, LLC, reserving all rights.</p>
  <h3>Social Media</h3>
  <p style="text-align: justify;">As part of the functionality of the website, you may link your account with online accounts you may have with third party service providers.</p>

  <h3>Submissions</h3>
  <p style="text-align: justify;">You acknowledge and agree that any questions, comments, suggestions, ideas or feedback or other information about the website or the Company Services “submissions” provided by you to Company are non- confidential and Company (as well as any designee of Company) shall be entitled to the unrestricted use of and dissemination of these submissions for any purpose commercial or otherwise, without acknowledgement or compensation to you.</p>
  <h3>Intellectual Property rights</h3>
  <p style="text-align: justify;">The content on the company website ShopitUS , ShopitUS.com and RAAV, LLC. Are the Tradmarks, Service Marks , trade dress and logos contained therein (“Marks”)  are owned by or licenced by Company.  Service marks/trademarks  will not be used with any products or services  not provided by ShopitUS. Including as part of trademarks and/or as part of domain names in connection with any product or service in any manner that is likely to cause confusion and may not be copied imitated or used in whole or in part without prior written permission for Shopitus, Shopitus.com and RAAV, LLC.
Any Intellectual property Rights issues or concerns should be addressed in witting to:
RAAV, LLC Attn: Legal  7734 Bridgestone Dr., Orlando, Fl. 32835 U.S.A.</p>
  <h3>Between Users</h3>
  <p style="text-align: justify;">If there is a dispute between users of the website, or between users and any third party you understand and agree to that Company is under no obligation to become involved. In the event  you have a dispute with one or more other users, you hereby release company , it’s officers, owners, eemployees, agents and successors in rights from claims,  demands and damages  (actual and consequential) of every kind of nature, known or unknown, suspected and unsuspected, disclosed or undisclosed arising out of or in any way related to such disputes and/or the Company services.
</p>
  <h3>With Company</h3>
  <p style="text-align: justify;">
    <ul>
      <li>Governing Law and Jurisdiction</li>
      <p style="text-align: justify;">This agreement and all aspects of the Company website and Company services a shall be governed by and construed in accordance with internal laws of the State/Commonwealth of Florida, U.S.A. without regard to conflict of law provisions.  You agree not to commence or prosecute any action in connection therewith other than in the states and federal courts located in Orange County Florida </p>
      <li> U.S.A.</li>
      <p style="text-align: justify;">Application of The United States Convention on contracts for the international sale of goods and services is excluded from this agreement of TOS. Additionally  application of the Uniform Computer Information Transaction Act (UCITA), is excluded from this agreement. In no event shall any claim or action or proceeding by you related in any way to the website of company services be instituted more than (2) years after the cause of action arose.
    You and company agree that any arbitration shall be limited to the dispute between company and you individually.</p>
    </ul>
  </p>
  <h3>Corrections</h3>
  <p style="text-align: justify;">Occasionally there may be information on the website that may contain typographical errors or inaccuracies or omissions that may relate to service descriptions, pricing and availability and possible other information. Company reserves the right to correct any of the aforementioned inaccuracies or omissions and change or update the information at any time without prior notice.</p>
  <h3>Trademarks</h3>
  <p style="text-align: justify;">Intellectual Property Rights regarding trademarks inquiries or disputes  mail in writing RAAV, LLC Attn: Legal Trademark Complaints, 7734 Bridgestone dr., Orlando, Fl. 32835 U.S.A. If notice is received regarding trademark dispute ShopitUS will take action to resolve  at it’s discretion, including removal of any disputed content.</p>
  <h3>Termination of agreement.</h3>
  <p style="text-align: justify;">
   A)Termination will occur if the terms of the Terms and Conditions agreement is violated, and
  B)Termination can happen for any reason at the discretion of the Company.
You can cancel your account at any time by contacting ShopitUS Customer Support. We can cancel your account or otherwise refuse service to you at any time for any reason. Passwords are very important in fraud prevention, SAFEGUARD YOUR PASSWORD!
  </p>
  <p style="text-align: justify;">As a member or using shopitUS services you agree not to disclose your password to any third party. You /members are respsonsible and by using ShopitUS agree to take sole responsibility for any activities or actions under your password, whether or not you have authorized such activities or actions. You will immediately notify ShopitUS of any suspicious or unauthorized use of your password.</p>
  <h3>Account Verification</h3>
  <p style="text-align: justify;">
    ID Verification for your account During the account registration process you may be asked to submit forms of identification on your members account page. A driving license, passport or a USPS form 1583 (https://about.usps.com/forms/ps1583.pdf) are forms of identification. More ID is encouraged  in evaluating a customers spending limits without restrictions.
  </p>
  <h3>CREDIT CARD AUTHORIZATION</h3>
  <p style="text-align: justify;">Your Credit Card will be validated and a small charge of $9.00 will be charged. You will see a second $9.00 fee which is a refund for the Credit Card Authorization process.</p>
  <h3>Authorization Hold</h3>
  <p style="text-align: justify;">There may be occasion where an account staus has problems with funding or other. Your account may be place on a hold status until any discrepancies are resolved. No costs will be incurred on accounts in hold status.</p>
  <h3>USA Export Controls and Regulations</h3>
  <p style="text-align: justify;">The U.S. Departments of State, Commerce, Homeland Security, Treasury, Defense, and Energy each play a critical role in export control and nonproliferation activities both within the United States and outside its borders. Please review this excellent ressource link (<a href="https://www.state.gov/strategictrade/resources/c43182.htm">https://www.state.gov/strategictrade/resources/c43182.htm</a>)
Customers of ShopitUs agree and acknowledge not to export, re-export or ship in any method available on this website to any country that the United States has embargoed or sanctioned. Including CRIMEA - REGION OF UKRAINE, CUBA, IRAN, IRAQ, NORTH KOREA, SUDAN, SOMALIA , Myanmar and SYRIA) prohibit ALL transactions (including imports and exports) without a license authorization. All export requisite licensing is the sole responsibility of the customer or individual.</p>
  <h3>A few items prohibited for export with ShopitUS:</h3>
  <p style="text-align: justify;">Counterfit, Bootlegged merchandise, controlled or illicit substances, drugs, weapons, ammunition, chemicals (identified or unidentified), alcohol and tobacco, some countries exempts. Medical devices for human or animals, currency, gems, stones, monetary instruments, animal products, fruit or vegetable products. To see the complete list link (<a href="https://www.cbp.gov/travel/us-citizens/know-before-you-go/prohibited-and-restricted-items"> https://www.cbp.gov/travel/us-citizens/know-before-you-go/prohibited-and-restricted-items</a>)
Items arriving at Shopitus warehouse will be confiscated, disposed of as required by US law. As a member of ShopitUS and entering into this agreement  you accept and agree to routine inspections of your packages by law enforcement agencies.</p>
  <h3>Storage</h3>
  <p style="text-align: justify;">ShopitUS will store packages free of charge for a period of 60 days from the date of delivery for Standard Accounts and 90 days for Gold accounts. After 60days or 90 days per account type, ShopitUS will charge you a fee of $1 a day per pound which must be paid prior to shipment to you. After 60/90 days in storage per account type, ShopitUS reserves the right to sell, destroy or otherwise dispose of such packages without incurring any liability to you or any other party whatsoever. Standard storage is 22.5 cubic feet
  Orders stored for 30 days and longer and you want to do a return be sure the stores return date is adhered to. If packages are stored and the stores return date lapses you are responsible for package(s). Abandoned Packages after 90 days, disposed .
  Photos of Packages $1.00 each Consoldated Packages in Gold Account $1.50 each Up to 10.
  CHECK REWRITE 8/26
</p>
  <h3>Consolidation and Repacking</h3>
  <p style="text-align: justify;">Save big on shipping with Consolidation of multiple packages into one box. Gold Account customers can request that goods be consolidated, Please Note: Large boxes used for consolidating packages will be considered in splitting order for possible less damage on larger orders. Contact serviceteam@shopitus.com. Large single boxes are more suseptible to damage in our experience. We will ship but will not be responsible for any damage incurred.

For obviouse weight considerations all catalogues and ad slicks will be removed unless otherwise notified on your member plan page.

If you believe we have made a mistake in consolidation, weighing or processing of any other special requests, you may place another special request for ($4 fee) refundable if we are in error.

Expired Gold accounts will renew automatically unless advised. There will be no downgrades of plans with mulrtiple package that are active or in storage. Accounts that have N.S.F (no funding) can be downgraded to single parcle.</p>
  <h3>CHECK HERE 9/5</h3>
  <p style="text-align: justify;">If your Shopitus Mailbox subscription expires, it will be automatically renewed unless you notify us otherwise. If there are multiple package on your account, your account cannot be downgraded to Individual packages and will be automatically extended even if you do not currently have sufficient funds to renew. If there are insufficient funds in your account to renew and you have only one or no package in your mailbox, the account will be switched to Basic (single) Package plan.</p>
  <h3>Sales Tax</h3>
  <p style="text-align: justify;">The sales tax (if applicable) amount may change from the initial quote to actual charges to our account. In this event the difference will reflect as an added or subtracted to our service fee.
Service Fee 4.3% 4.3% 4.3%

A service fee of 4.3% is added to the cost of postage. If you fund your account by wire transfer or Bitcoin, however, we will automatically credit your account with an additional 4.3% more than the amount you send us.
</p>
    <h3>Wire Transfer Fee</h3>
  <p style="text-align: justify;">A fee of $14 for each incoming wire transfer is assessed by our bank and charged to the customer.
Assisted Purchases Fee
Assisted purchase charges are subject to a 4.3% service fee and are subject to your account spending limits.</p>
    <h3>Refunds</h3>
  <p style="text-align: justify;">Payments made for ShopitUS Mailboxs are not refundable. Payment for deposit or postage is refundable. We charge $5 administrative fee per each individual payment/order refunded plus the cost of the refund (for example bank fee for wire transfer). ShopitUS will charge a fee for every charge-back/payment reversal on customer account. Charge-back/reversal fee for PayPal payments is $20 and charge-back/reversal fee on credit card payments is $35. ShopitUS also charges 4.3% of the refund amount plus $5 on all refunds.</p>
    <h3>Import and Export Documentation</h3>
  <p style="text-align: justify;">The customer is responsible for determining and following the regulations for their shipments, including all customs requirements of the destination country. ShopitUS does not guarantee delivery of packages that do not comply with U.S. export regulations or the import regulations of the country to which they are sent.
</p>
<p style="text-align: justify;">You are responsible for the accuracy of all customs declarations and documentation and for all customs duties in the destination country. Any such duties or charges are in addition to the fees earned by ShopitUS for its package/mail forwarding service.</p>
  <p style="text-align: justify;">You acknowledge that you have a duty to and are solely liable for providing all information required by the laws of the country that is the final destination of your package and the laws and regulations of the United States, including without limitation, information required by 15 CFR sec. 30 and that you are responsible for maintaining all records as required under any applicable customs or other government agency laws. ShopitUS assumes no responsibility to act as a record-keeper or record-keeping agent for you or the USPPI. You are responsible to supply to ShopitUS all information regarding the USPPI, including its name and employer identification number (EIN), and the ECCN, Schedule B classification and all other information required under a routed export transaction as described in Title 15, Code of Federal Regulations, Part 30, the Foreign Trade Statistics Regulations (FTSR).</p>
    <p style="text-align: justify;">All shipments are shipped on a limited liability basis. In no event shall ShopitUs liability exceed the amount of handling or $100.00 per shipment which is ever lower. Under no circumstances will ShopitUs be liable for any special, incidental, indirect, punitive, exemplary or consequential damages, including but not limited to loss of income or revenue, lost profits or market, lost opportunity, sentimental value or the like in excess of the limit described above. Force Majeure  or Unforeseeable circumstances Natural catastrophic events, natural emergencies, communications or power outages, emergencies acts of war declared or not declared.</p>
    <h3>Problems with Delivery</h3>
  <p style="text-align: justify;">You are responsible for confirming that the package that arrived in our warehouse is the same one that you ordered. ShopitUS provides photos of the incoming package so you can double check that the correct package is received based on the address and tracking number. ShopitUS will close account of dishonest customers who fill out customs and ask us to mail out packages that belong to a different customer. Further, you must immediately notify ShopitUS in case you receive an incorrect package. Mistakes happen. Stores sometimes confuse customer names or misprint the mailbox number. Therefore, we expect every customer to extend the courtesy and inform us immediately so we can arrange for forwarding of package to the correct customer.</p>
  <h3>Missing and Lost Packages 8/30 8/30</h3>
  <p style="text-align: justify;">In case of lost or damaged package please use your account to file a claim. False claims will be charged minimum $5 plus ShopitUS's investigation expenses. All claims for lost or damaged packages must be reported to ShopitUS within 10 days. Otherwise they will be automatically denied. Packages are insured by combination of carrier shipping insurance and ShopitUS's private insurance. Insurance for packages lost in the warehouse or lost during the shipping covers only the value entered in the customs declaration. You have to be able to prove value entered by invoice or order. If you claim lower value in customs declaration that is what you get paid. You have to support insurance claims for lost or damaged items with a proof that those items were really received at our warehouse and were in good condition. The best way is to let us take content photos of your incoming packages or use special request to inspect content. See how to avoid problems.</p>
  <h3>Delay in locating your package.</h3>
  <p style="text-align: justify;">Sometimes ShopitUS needs more time to locate your package in our warehouse. ShopitUS cannot offer any additional compensation for the delay or provide free postage if such package is mailed to you later. If we send a package to the wrong address then we do everything to get the package to the correct customer. We will cover the cost of shipping and handling, but we will not compensate for delays or inconvenience. If we cannot get package to the correct person we will compensate for the content, our fees and postage. We process such claims in 30 days.</p>

  <p style="text-align: justify;">You can cancel your account at any time by contacting Customer Support. We can cancel your account or otherwise refuse service to you at any time for any reason (including repeat infringement).
Contact Us:RAAV, LLC Attn: TEAM ShopitUS  7734 Bridgestone Dr., Orlando, Fl. 32835 U.S.A.
407-532-9292 email serviceteam@shopitus.co:</p>
  <h3>Miscellaneous</h3>
  <h3>Indemnity</h3>
  <p style="text-align: justify;">By choosing to use shopitUS.com, you agree to indemnify ShopitUS, its officers, agents, partners and employees from any and all claims or damage, including reasonable attorney’s fees, made by third parties due to or arising out of 1) content you choose to submit, post or transmit through shopitUS.comcom; 2) your use of or connection to shopitUS.comcom; 3) your violation of the User Agreement; or 4) your violation of any rights of another.</p>
  <h3>Release.</h3>
  <h3>Force Majeure</h3>
  <p style="text-align: justify;">We shall be excused for any problem caused by a factor beyond our control.

Severability Clause
In case any provision in this agreement shall be held invalid, illegal or unenforceable, the validity, legality and enforceability of the remaining provisions shall not in any way be affected or impaired thereby.

Safe arrival of your package to your doorstep is Guaranteed!</p>


  


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
