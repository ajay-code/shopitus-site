<?php

if($_POST['msgconfirm' ] == "true")
{
	 $client_name = $_POST['namebox'];
	 $client_email = $_POST['email_msg'];
	 $client_msg = $_POST['msg_box'];
	 
	  $to      = 'raecampus@earthlink.net'; //'raecampus@earthlink.net';
			 $subject = 'ShopitUS Web Contact Form';

			 $message = 'YOU HAVE RECEIVED A MESSAGE FROM   SHOPITUS.COM WEB CONTACT FORM.,'."\r\n\n\n".'Client Name -  '.$client_name."\r\n\n".'Client Email - '.$client_email."\r\n\n".'Message - '.$client_msag."\r\n\n".'Web Contact Form'."\r\n".'shopitUS'.".".'com';

			$headers = 'From: Webform' . "\r\n" .
    			'Reply-To:'.$client_email. "\r\n" .
    			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers); 
			  
             header("Location: contact.php?msg=sent");
			 die(); 
}else{
header("Location: contact.php");
}
?>