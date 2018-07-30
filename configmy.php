<?php
$db_name ="shopitus_db";
$dbusername = "root"; /** MySQL database username */
$dbpassword = "c0965779"; /** MySQL database password */
$server = "localhost"; //** Probably don't need to change this */

$connection = mysql_connect($server, $dbusername, $dbpassword) or die(mysql_error());
$db = mysql_select_db($db_name,$connection)or die(mysql_error());



?>