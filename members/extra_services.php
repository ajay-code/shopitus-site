<?php
session_start();
include("../config.php");
error_reporting(E_ERROR);
include(ROOT_PATH."/external_links.php");

$page = 'member/extra-services';

if (isset($_POST['memberemail']) && isset($_POST['memberpass'])) {
    $memberemail = $_POST['memberemail'];
    $memberpass = $_POST['memberpass'];
    $sql1 = "SELECT id, email, password FROM  `members` WHERE email = '$memberemail' && password = '$memberpass'";
    $results1 = mysql_query($sql1, $connection) or die(mysql_error());
    $row1 = mysql_fetch_assoc($results1);
    $mememail = $row1['email'];
    $mempass =  $row1['password'];
    $memid =  $row1['id'];

    if (isset($mememail) && isset($mempass)) {
        $_SESSION['memberpass'] = "valid";  // validate 'memberpass' session variable.
        $_SESSION['emailadrs'] = $mememail;
        $_SESSION['password'] = $mempass;
        $_SESSION['member_id'] = $memid;
    } else {
        $_SESSION['memberpass'] = "";
        header("Location: ../login.php?login=false");
        die();
    }
}
redirectIfNotsignedIn();
$memid = $_SESSION['member_id'];
// get user info
$sql = "SELECT * FROM  `members` WHERE id =  $memid";
$results = mysql_query($sql, $connection) or die(mysql_error());
$row = mysql_fetch_assoc($results);
$member_id = $row['id'];
$mememail = $row['email'];
$mempass =  $row['password'];
$firstname = $row['first_name'];
$lastname = $row['last_name'];
$uuid = $row['uuid'];

$address = $row['address'];
$city = $row['city'];
$state = $row['state'];
$zip = $row['zip'];
$country = $row['country'];


$adrs_1 = $address.", ".$city.", ".$state.", ".$zip.", ";
$adrs_2 = $country;
?>
<?php include ROOT_PATH."/layouts/partials/header.php"; ?>
<script type="text/javascript">
</script>
<div class="main">
  <section class="container py-4 mb-4">
    <h2 class="text-center display-4">MEMBER PANEL</h2>
    <div class="row members-row">
      <div class="col-lg-3 d-flex flex-column">
        <?php include "partials/left-side.php" ?>
      </div>

      <div class="col-lg-9 d-flex flex-column">
        <?php include 'partials/navbar.php'; ?>
        <div class="member-background member-form" style="flex: 1 1 100%">
          
        </div>


      </div>
    </div>
  </section>
  <section class="bg-gray py-5">
    <div class="container text-center">
      <h4 class="text-muted">We work with world's leading package forwarding agencies.</h4>
      <h5 class="text-dark py-4">We accept extra large packages too.</h5>
      <h5 class="">Safe arrival of your package to your doorstep is Guaranteed!</h5>
    </div>
  </section>
</div>

<?php include ROOT_PATH."/layouts/partials/footer.php"; ?>
