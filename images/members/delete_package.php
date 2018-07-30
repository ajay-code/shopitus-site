<?php
session_start();

include("../external_links.php");
include("../config.php");


if(($_SESSION['emailadrs'] == '') && ($_SESSION['password'] == '')){

			 header("Location: ../login.php");
			 die();  	
}
$emailadrs = $_SESSION['emailadrs']; 
$deleteorder =  $_GET['deleteorder'];

$sql = "DELETE FROM `packages_expected` WHERE sn = '$deleteorder' && email = '$emailadrs'";
mysql_query($sql,$connection) or die(mysql_error());

header("Location: packages_expected.php");
die();
?>