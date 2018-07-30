<?php
session_start();
include("../external_links.php");
include("../config.php");

 if(($_SESSION['memberpass'] != "valid")){
	header("Location: ../login.php");
	die();
}else{

$memberemail = $_SESSION['emailadrs'] ;
$memberpass = $_SESSION['password'];


$address = $_POST['address'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$telephone = $_POST['telephone'];
$mobile = $_POST['mobile'];

      $updatesql = "UPDATE members SET address = '$address', city = '$city', state = '$state', zip = '$zip', country = '$country', telephone = '$telephone', mobile = '$mobile' WHERE email = '$memberemail'";
	 mysql_query($updatesql, $connection) or die(mysql_error());
 
}


?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyshopUS</title>
<script type="text/javascript">
function sendconfirmation(){
	document.profile.submit();	
}
</script>
</head>

<body onload="javascript:sendconfirmation();">
<form name="profile" action="edit_account.php" method="POST">
<input type="hidden" name="profilemsg" id="profilemsg" value="profilesaved" />
</form>
</body>
</html>
