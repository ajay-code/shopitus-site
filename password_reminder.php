<?php
session_start();
include("config.php");
include("external_links.php");
$_SESSION['memberpass'] = "";  

$getmemberemail =  $_POST['emailreminder'];  

		  $sql = "SELECT email, password FROM  `members` WHERE email = '$getmemberemail'";
		  $results = mysql_query($sql,$connection) or die(mysql_error());
		  $row = mysql_fetch_assoc($results);
		  
		  $mememail = $row['email'];
		  $mempass = $row['password'];
		  
          if(!isset($mememail)){
			 header("Location: reminder.php?email=false");
			 die(); 
		  }else{
			  //SEND PASSWORD TO THIS EMAIL;/////////////////////////////////////////////////////////////////////////////////////////////
 			 $to      = 'serviceteam@shopitus.com';
			 $subject = 'Your password for ShopitUS';

			 $message = 'Dear Member,'."\r\n\n\n".'You have requested your Shopitus member password'."\r\n\n".'Please log in with - '.$mempass."\r\n\n".'Regards,'."\r\n\n".'Client Support'."\r\n".'myshopus'.".".'com';

			$headers = 'From: Password Reminder' . "\r\n" .
    			'Reply-To: serviceteam@shopitus.com' . "\r\n" .
    			'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers); 
			  
             header("Location: reminder.php?email=sent");
			 die(); 

		  }

 ?>
 