<?php
session_start();
include("../config.php");
include("../external_links.php");


if(!$_POST['membershipconfirm'] == "asdi%7we"){
			 $_SESSION['memberpass'] = ""; 
			 header("Location: ../login.php?login=false");
			 die();  
}else{
		$first_name = $_POST['firstname'];
		$last_name = $_POST['lastname'];
		$email = $_POST['emailbox'];
		$password = $_POST['passwordbox'];
		$date = date('Y-m-d H:i:s');

		


				$newmemsql = "INSERT INTO members(id, first_name, last_name, address, city, state, zip, country, email, password, date_joined, telephone, mobile) VALUES(NULL, '$first_name', '$last_name', '', '', '', '', '', '$email', '$password', '$date', '0', '0')";
				mysql_query($newmemsql,$connection) or die(mysql_error());
				
				$_SESSION['emailadrs'] = $email;
				$_SESSION['password'] = $password;
				$_SESSION['memberpass'] = "valid"; // validate 'memberpass' session variable.
 
			 header("Location: edit_account.php");
			 die();  

}


?>