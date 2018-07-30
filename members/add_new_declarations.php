<?php
session_start();
include("../config.php");
error_reporting(E_ERROR);
include(ROOT_PATH."/external_links.php");

$page = 'member/index';

redirectIfNotsignedIn();

$memid = $_SESSION['member_id'];
// get user info
$sql = "SELECT * FROM  `members` WHERE id =  $memid";
$results = mysql_query($sql,$connection) or die(mysql_error());
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


// Post Data
$tracking =  $_POST['tracking'];
$country_of_origin = strtoupper($_POST['country']);
$shipping_name = ucfirst($_POST['shippingname']);
$shipping_adrs = ucfirst($_POST['shippingadrs']);
$destination = $_POST['destination'];
$packagevalue = $_POST['packagevalue'];
$courier = $_POST['courier'];

$memberemail = $_SESSION['emailadrs'];
$memberpass =  $_SESSION['password'];
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
        <div class="member-background member-form container-fluid" style="flex: 1 1 100%">
          <form class="row p-4" name="addnewpackage"  method="POST" action="addnewpackage.php" onsubmit="return add_new_tracking();">
            <div class="col-sm-6">
              <span class="font-weight-bold">TRACKING NO:</span> <span class="text-muted"><?= $tracking ?></span>
            </div>
            <div class="col-sm-6">
              <span class="font-weight-bold">COUNTRY OF ORIGIN:</span> <span class="text-muted"><?= $country_of_origin ?></span>
            </div>
            <div class="col-sm-12">
              <br>
              <span class="font-weight-bold">RECEPIENT'S NAME & ADDRESS:</span>
              <br>
              <span class="text-muted"><?= $shipping_adrs; ?></span>
            </div>
            <div class="col-sm-12">
              <br>
            </div>
            <div class="col-sm-4">
              <span class="font-weight-bold">COUNTRY OF DESTINATION:</span>
              <span class="text-muted"><?php if(isset($destination)){echo strtoupper($destination);} else { echo "&nbsp;  ";}?></span>
            </div>
            <div class="col-sm-4">
              <span class="font-weight-bold">PACKAGE VALUE:</span>
              <span class="text-muted">US$ <?php echo $packagevalue; ?></span>
            </div>
            <div class="col-sm-4">
              <span class="font-weight-bold">PREFERRED COURIER:</span>
              <span class="text-muted"><?php if(isset($courier)){echo strtoupper($courier); } else {echo "&nbsp;";} ?></span>
            </div>

            <div class="col-12">
              FOLLOWING DECLARATION IS REQUIRED BY US GOVERNMENT
              <br>
              <div class="d-flex px-4">
                <div class="">
                  <input class="form-check-input" type="checkbox" value="" id="confirmbox" required>
                </div>
                <div class="text-muted">
                  I hereby declare that these specific commodities are being exported in accordance with all applicable export control laws and regulations including regulations administered by the U.S. Department of Commerce, U.S. Department of State, and the U.S. Department of Treasury (if package is exported from the United States), or any other relevant authority. Customers of ShopitUs agree and  acknowledge not to export, re-export or ship in any method available on this  website to any country that the United States has embargoed or sanctioned.  Including CRIMEA - REGION OF UKRAINE, CUBA, IRAN, IRAQ, NORTH KOREA, SUDAN,  SOMALIA , Myanmar and SYRIA) and prohibit ALL transactions (including imports and  exports) without a license authorization. All export requisite licensing is the  sole responsibility of the customer or individual. or any destination for which United States requires an export license without first obtaining such license(s). Diversion of these commodities contrary to the United States law is prohibited. Any and all export license requirements are the sole responsibility of the individual and/or entity in contractual agreement with ShopitUS and/or RAAV, LLC
                </div>
              </div>
            </div>

            <input type="hidden" name="tracking_code" id="tracking_code" value="<?php echo $tracking; ?>" />
            <input type="hidden" name="origin" id="origin" value="<?php echo $country_of_origin; ?>" />
            <input type="hidden" name="name" id="name" value="<?php echo $shipping_name; ?>" />
            <input type="hidden" name="address" id="address" value="<?php echo $shipping_adrs; ?>" />
            <input type="hidden" name="post_to" id="post_to" value="<?php echo $destination; ?>" />
            <input type="hidden" name="total_value" id="total_value" value="<?php echo $packagevalue; ?>" />
            <input type="hidden" name="selected_courier" id="selected_courier" value="<?php echo $courier; ?>" />
            <div class="col-12">
              <p name="addnew_msg" id="addnew_msg" type="text"   class="text-danger" readonly="readonly" >
                <!-- Tracking No. cannot be blanked -->
              </p>
              <button type="submit" name="button" class="btn btn-primary float-right">Submit</button>
            </div>
          </form>


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
