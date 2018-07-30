<?php
// error_reporting(1);
error_reporting(E_ERROR | E_PARSE);
include __DIR__."/vendor/autoload.php";
define('ROOT_PATH', __DIR__);
define('BASE_URL', 'https://www.shopitus.com');

// paypal Keys
define('PAYPAL_CLIENT_ID', 'Aa8DIY3d0AJNLf1QHEMC8u7NzMPEtrZf5DTnT-JLamZywcd7fLqQv4XoYMvG0ygCh5EBVYrZym4XaZB-');
define('PAYPAL_SECRET', 'EE-rwwpkHBAtZ1HzC41ewNfAViMy85ISX-1daaA6-eE5cdFMTizy6YLLtzwVYjAGRPJid-Cyv_Ujf_I2');
// Stripe keys
define('STRIPE_SECRET_KEY', 'sk_test_4GLNIPJihIz7m3ERCp0sFvrB');
define('STRIPE_PUBLISHABLE_KEY', 'pk_test_1UI86VZINym4I4qmw9cylKHI');

$db_name ="shopitus_db";
$dbusername = "root"; /** MySQL database username */
$dbpassword = ""; /** MySQL database password */
$server = "127.0.0.1"; //** Probably don't need to change this */

$connection = mysql_connect($server, $dbusername, $dbpassword) or die(mysql_error());
$db = mysql_select_db($db_name,$connection)or die(mysql_error());



?>