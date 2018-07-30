<?php
session_start();

include("../external_links.php");
include("../config.php");
// redirect to login if 'memberpass' session_variable is not valid.
 if(($_SESSION['memberpass'] != "valid")) 
{
	header("Location: ../login.php");
	die();
}

$email = $_SESSION['emailadrs']; 
 			 
			 
$tracking = $_POST['tracking_code'];
$origin = strtoupper($_POST['origin']);
$name = ucwords($_POST['name']);
$address = ucwords($_POST['address']);
$destination = strtoupper($_POST['post_to']);
$value = $_POST['total_value'];
$courier = $_POST['selected_courier'];

$date = date('Y-m-d H:i:s');
$sql = "INSERT INTO packages_expected(sn, email, tracking, origin, name, address, destination, value, courier, date_added) VALUES(NULL, '$email', '$tracking', '$origin', '$name', '$address', '$destination', '$value', '$courier', '$date' )";
mysql_query($sql,$connection) or die(mysql_error());

header("Location: packages_expected.php");
die();

?>