<?php
session_start();
include("../config.php");
error_reporting(E_ERROR);
include(ROOT_PATH."/external_links.php");

$page = 'member/index';

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
?>
<?php include ROOT_PATH."/layouts/partials/header.php"; ?>
<script type="text/javascript">
function getmyname(checkboxID, toggleID) {
  var shippersname = "<?= $firstname." ".$lastname; ?>";
  if(shippersname.trim()  == ""){
    document.getElementById("addnew_msg").value = "Please update your name in your profile.";
  }else{
    document.getElementById("addnew_msg").value = "";
    shippersname == shippersname;
  }
     var checkbox = document.getElementById(checkboxID);
     var toggle = document.getElementById(toggleID);
    checkbox.checked ? toggle.value = shippersname : toggle.value = "";
}

function getmyaddress(nextcheckboxID, nexttoggleID) {
	var shippersadrs = "<?php echo $adrs_1." ".$adrs_2; ?>";
	if(shippersadrs.trim()  == ""){
		document.getElementById("addnew_msg").value = "Please update your Home Address in your profile.";
	}else{
		document.getElementById("addnew_msg").value = "";
		shippersadrs == shippersadrs;
	}
     var nextcheckbox = document.getElementById(nextcheckboxID);
     var nexttoggle = document.getElementById(nexttoggleID);
    nextcheckbox.checked ? nexttoggle.value = shippersadrs : nexttoggle.value = "";
}
function save_tracking_no(){
  console.log('Hello');
 	if(document.getElementById("tracking").value == ""){
    	$("#addnew_msg").html("Tracking No. cannot be blanked");
      return false;
	}else if(document.getElementById("tracking").value.length < 4){
    	$("#addnew_msg").html("Tracking No. too small. Please check again.");
      return false;
	}else if(document.getElementById("country").value == 0){
      $("#addnew_msg").html("Please select country of origin.");
      return false;
	}else if(document.getElementById("shippingname").value == ""){
      $("#addnew_msg").html("Recipient's name cannot be blanked.");
      return false;
	}else if(document.getElementById("shippingname").value.length < 4){
      $("#addnew_msg").html("Recipient's name is too small. Please check again.");
      return false;
	}else if(document.getElementById("shippingadrs").value == ""){
      $("#addnew_msg").html("Recipient's address cannot be blanked.");
      return false;
	}else if(document.getElementById("shippingadrs").value.length < 4){
      $("#addnew_msg").html("Recipient's address is too small. Please check again.");
      return false;
	}else if(document.getElementById("destination").value == 0){
      $("#addnew_msg").html("Please select a country of destination.");
      return false;
	}else if(document.getElementById("packagevalue").value == 0){
      $("#addnew_msg").html("Please enter package value.");
      return false;
	}else if(document.getElementById("courier").value == 0){
      $("#addnew_msg").html("Please select your courier.");
      return false;
	}else if(document.getElementById("status").value == ''){
      $("#addnew_msg").html("Please Purchase a FREE or PAID Subscription Plan to Proceed.");
      return false;
	}else if(document.getElementById("status").value == "expired"){
      $("#addnew_msg").html("Please Renew Your Subscription Plan to Proceed.");
      return false;
	}else{document.getElementById("addnew_msg").value = "";
	 return true;
	}
  return false;
}
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
        <div class="member-background member-form" >
          <form class="row p-4" name="addnew" id="addnew" method="POST" action="add_new_declarations.php" onsubmit="return save_tracking_no();">
            <div class="form-group col-md-6">
              <label for="tracking">ENTER TRACKING NO.</label>
              <input name="tracking" id="tracking" type="text" class="form-control" style="xwidth:310px;"  />

            </div>
            <div class="form-group col-md-6">
              <label for="country">COUNTRY OF ORIGIN</label>
              <select name="country" id="country" class="form-control" >
                  <option  value=0 selected="selected">Select a country ... </option>
                  <option  value ="Afghanistan">Afghanistan</option>
                  <option  value="Albania">Albania</option>
                  <option  value="Algeria">Algeria</option>
                  <option  value="American Samoa">American Samoa</option>
                  <option value="Andorra">Andorra</option>
                  <option  value="Angola">Angola</option>
                  <option  value="Anguilla">Anguilla</option>
                  <option  value="Antarctica">Antarctica</option>
                  <option  value="Antigua and Barbuda">Antigua and Barbuda</option>
                  <option  value="Argentina">Argentina</option>
                  <option  value="Armenia">Armenia</option>
                  <option  value="Aruba">Aruba</option>
                  <option  value="Australia">Australia</option>
                  <option  value="Austria">Austria</option>
                  <option  value="Azerbaijan">Azerbaijan</option>
                  <option  value="Bahamas">Bahamas</option>
                  <option  value="Bahrain">Bahrain</option>
                  <option  value="Bangladesh">Bangladesh</option>
                  <option  value="Barbados">Barbados</option>
                  <option  value="Belarus">Belarus</option>
                  <option  value="Belgium">Belgium</option>
                  <option  value="Belize">Belize</option>
                  <option  value="Benin">Benin</option>
                  <option  value="Bermuda">Bermuda</option>
                  <option  value="Bhutan">Bhutan</option>
                  <option  value="Bolivia">Bolivia</option>
                  <option  value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                  <option  value="Botswana">Botswana</option>
                  <option  value="Bouvet Island">Bouvet Island</option>
                  <option  value="Brazil">Brazil</option>
                  <option  value="British Antarctic Territory">British Antarctic Territory</option>
                  <option  value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                  <option  value="British Virgin Islands">British Virgin Islands</option>
                  <option  value="Brunei">Brunei</option>
                  <option  value="Bulgaria">Bulgaria</option>
                  <option  value="Burkina Faso">Burkina Faso</option>
                  <option  value="Burundi">Burundi</option>
                  <option  value="Cambodia">Cambodia</option>
                  <option  value="Cameroon">Cameroon</option>
                  <option  value="Canada">Canada</option>
                  <option  value="Canton and Enderbury Islands">Canton and Enderbury Islands</option>
                  <option  value="Cape Verde">Cape Verde</option>
                  <option  value="Cayman Islands">Cayman Islands</option>
                  <option  value="Central African Republic">Central African Republic</option>
                  <option  value="Chad">Chad</option>
                  <option  value="Chile">Chile</option>
                  <option  value="China">China</option>
                  <option  value="Christmas Island">Christmas Island</option>
                  <option  value="Cocos [Keeling] Islands">Cocos [Keeling] Islands</option>
                  <option  value="Colombia">Colombia</option>
                  <option  value="Comoros">Comoros</option>
                  <option  value="Congo - Brazzaville">Congo - Brazzaville</option>
                  <option  value="Congo - Kinshasa">Congo - Kinshasa</option>
                  <option  value="Cook Islands">Cook Islands</option>
                  <option  value="Costa Rica">Costa Rica</option>
                  <option  value="Croatia">Croatia</option>
                  <option  value="Cuba">Cuba</option>
                  <option  value="Cyprus">Cyprus</option>
                  <option  value="Czech Republic">Czech Republic</option>
                  <option  value="Côte d'Ivoire">Côte d'Ivoire</option>
                  <option  value="Denmark">Denmark</option>
                  <option  value="Djibouti">Djibouti</option>
                  <option  value="Dominica">Dominica</option>
                  <option  value="Dominican Republic">Dominican Republic</option>
                  <option  value="Dronning Maud Land">Dronning Maud Land</option>
                  <option  value="East Germany">East Germany</option>
                  <option  value="Ecuador">Ecuador</option>
                  <option  value="Egypt">Egypt</option>
                  <option  value="El Salvador">El Salvador</option>
                  <option  value="Equatorial Guinea">Equatorial Guinea</option>
                  <option  value="Eritrea">Eritrea</option>
                  <option  value="Estonia">Estonia</option>
                  <option  value="Ethiopia">Ethiopia</option>
                  <option  value="Falkland Islands">Falkland Islands</option>
                  <option  value="Faroe Islands">Faroe Islands</option>
                  <option  value="Fiji">Fiji</option>
                  <option  value="Finland">Finland</option>
                  <option  value="France">France</option>
                  <option  value="French Guiana">French Guiana</option>
                  <option  value="French Polynesia">French Polynesia</option>
                  <option  value="French Southern Territories">French Southern Territories</option>
                  <option  value="French Southern and Antarctic Territories">French Southern and Antarctic Territories</option>
                  <option  value="Gabon">Gabon</option>
                  <option  value="Gambia">Gambia</option>
                  <option  value="Georgia">Georgia</option>
                  <option  value="Germany">Germany</option>
                  <option  value="Ghana">Ghana</option>
                  <option  value="Gibraltar">Gibraltar</option>
                  <option  value="Greece">Greece</option>
                  <option  value="Greenland">Greenland</option>
                  <option  value="Grenada">Grenada</option>
                  <option  value="Guadeloupe">Guadeloupe</option>
                  <option  value="Guam">Guam</option>
                  <option  value="Guatemala">Guatemala</option>
                  <option  value="Guernsey">Guernsey</option>
                  <option  value="Guinea">Guinea</option>
                  <option  value="Guinea-Bissau">Guinea-Bissau</option>
                  <option  value="Guyana">Guyana</option>
                  <option  value="Haiti">Haiti</option>
                  <option  value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option>
                  <option  value="Honduras">Honduras</option>
                  <option  value="Hong Kong SAR China">Hong Kong SAR China</option>
                  <option  value="Hungary">Hungary</option>
                  <option  value="Iceland">Iceland</option>
                  <option  value="India">India</option>
                  <option  value="Indonesia">Indonesia</option>
                  <option  value="Iran">Iran</option>
                  <option  value="Iraq">Iraq</option>
                  <option  value="Ireland">Ireland</option>
                  <option  value="Isle of Man">Isle of Man</option>
                  <option  value="Israel">Israel</option>
                  <option  value="Italy">Italy</option>
                  <option  value="Jamaica">Jamaica</option>
                  <option  value="Japan">Japan</option>
                  <option  value="Jersey">Jersey</option>
                  <option  value="Johnston Island">Johnston Island</option>
                  <option  value="Jordan">Jordan</option>
                  <option  value="Kazakhstan">Kazakhstan</option>
                  <option  value="Kenya">Kenya</option>
                  <option  value="Kiribati">Kiribati</option>
                  <option  value="Kuwait">Kuwait</option>
                  <option  value="Kyrgyzstan">Kyrgyzstan</option>
                  <option  value="Laos">Laos</option>
                  <option  value="Latvia">Latvia</option>
                  <option  value="Lebanon">Lebanon</option>
                  <option  value="Lesotho">Lesotho</option>
                  <option  value="Liberia">Liberia</option>
                  <option  value="Libya">Libya</option>
                  <option  value="Liechtenstein">Liechtenstein</option>
                  <option  value="Lithuania">Lithuania</option>
                  <option  value="Luxembourg">Luxembourg</option>
                  <option  value="Macau SAR China">Macau SAR China</option>
                  <option  value="Macedonia">Macedonia</option>
                  <option  value="Madagascar">Madagascar</option>
                  <option  value="Malawi">Malawi</option>
                  <option  value="Malaysia">Malaysia</option>
                  <option  value="Maldives">Maldives</option>
                  <option  value="Mali">Mali</option>
                  <option  value="Malta">Malta</option>
                  <option  value="Marshall Islands">Marshall Islands</option>
                  <option  value="Martinique">Martinique</option>
                  <option  value="Mauritania">Mauritania</option>
                  <option  value="Mauritius">Mauritius</option>
                  <option  value="Mayotte">Mayotte</option>
                  <option  value="Metropolitan France">Metropolitan France</option>
                  <option  value="Mexico">Mexico</option>
                  <option  value="Micronesia">Micronesia</option>
                  <option  value="Midway Islands">Midway Islands</option>
                  <option  value="Moldova">Moldova</option>
                  <option  value="Monaco">Monaco</option>
                  <option  value="Mongolia">Mongolia</option>
                  <option  value="Montenegro">Montenegro</option>
                  <option  value="Montserrat">Montserrat</option>
                  <option  value="Morocco">Morocco</option>
                  <option  value="Mozambique">Mozambique</option>
                  <option  value="Myanmar [Burma]">Myanmar [Burma]</option>
                  <option  value="Namibia">Namibia</option>
                  <option  value="Nauru">Nauru</option>
                  <option  value="Nepal">Nepal</option>
                  <option  value="Netherlands">Netherlands</option>
                  <option  value="Netherlands Antilles">Netherlands Antilles</option>
                  <option  value="Neutral Zone">Neutral Zone</option>
                  <option  value="New Caledonia">New Caledonia</option>
                  <option  value="New Zealand">New Zealand</option>
                  <option  value="Nicaragua">Nicaragua</option>
                  <option  value="Niger">Niger</option>
                  <option  value="Nigeria">Nigeria</option>
                  <option  value="Niue">Niue</option>
                  <option  value="Norfolk Island">Norfolk Island</option>
                  <option  value="North Korea">North Korea</option>
                  <option  value="North Vietnam">North Vietnam</option>
                  <option  value="Northern Mariana Islands">Northern Mariana Islands</option>
                  <option  value="Norway">Norway</option>
                  <option  value="Oman">Oman</option>
                  <option  value="Pacific Islands Trust Territory">Pacific Islands Trust Territory</option>
                  <option  value="Pakistan">Pakistan</option>
                  <option  value="Palau">Palau</option>
                  <option  value="Palestinian Territories">Palestinian Territories</option>
                  <option  value="Panama">Panama</option>
                  <option  value="Panama Canal Zone">Panama Canal Zone</option>
                  <option  value="Papua New Guinea">Papua New Guinea</option>
                  <option  value="Paraguay">Paraguay</option>
                  <option  value="People's Democratic Republic of Yemen">People's Democratic Republic of Yemen</option>
                  <option  value="Peru">Peru</option>
                  <option  value="Philippines">Philippines</option>
                  <option  value="Pitcairn Islands">Pitcairn Islands</option>
                  <option  value="Poland">Poland</option>
                  <option  value="Portugal">Portugal</option>
                  <option  value="Puerto Rico">Puerto Rico</option>
                  <option  value="Qatar">Qatar</option>
                  <option  value="Romania">Romania</option>
                  <option  value="Russia">Russia</option>
                  <option  value="Rwanda">Rwanda</option>
                  <option  value="Réunion">Réunion</option>
                  <option  value="Saint Barthélemy">Saint Barthélemy</option>
                  <option  value="Saint Helena">Saint Helena</option>
                  <option  value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                  <option  value="Saint Lucia">Saint Lucia</option>
                  <option  value="Saint Martin">Saint Martin</option>
                  <option  value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                  <option  value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
                  <option  value="Samoa">Samoa</option>
                  <option  value="San Marino">San Marino</option>
                  <option  value="Saudi Arabia">Saudi Arabia</option>
                  <option  value="Senegal">Senegal</option>
                  <option  value="Serbia">Serbia</option>
                  <option  value="Serbia and Montenegro">Serbia and Montenegro</option>
                  <option  value="Seychelles">Seychelles</option>
                  <option  value="Sierra Leone">Sierra Leone</option>
                  <option  value="Singapore">Singapore</option>
                  <option  value="Slovakia">Slovakia</option>
                  <option  value="Slovenia">Slovenia</option>
                  <option  value="Solomon Islands">Solomon Islands</option>
                  <option  value="Somalia">Somalia</option>
                  <option  value="South Africa">South Africa</option>
                  <option  value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option>
                  <option  value="South Korea">South Korea</option>
                  <option  value="Spain">Spain</option>
                  <option  value="Sri Lanka">Sri Lanka</option>
                  <option  value="Sudan">Sudan</option>
                  <option  value="Suriname">Suriname</option>
                  <option  value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                  <option  value="Swaziland">Swaziland</option>
                  <option  value="Sweden">Sweden</option>
                  <option  value="Switzerland">Switzerland</option>
                  <option  value="Syria">Syria</option>
                  <option  value="São Tomé and Príncipe">São Tomé and Príncipe</option>
                  <option  value="Taiwan">Taiwan</option>
                  <option  value="Tajikistan">Tajikistan</option>
                  <option  value="Tanzania">Tanzania</option>
                  <option  value="Thailand">Thailand</option>
                  <option  value="Timor-Leste">Timor-Leste</option>
                  <option  value="Togo">Togo</option>
                  <option  value="Tokelau">Tokelau</option>
                  <option  value="Tonga">Tonga</option>
                  <option  value="Trinidad and Tobago">Trinidad and Tobago</option>
                  <option  value="Tunisia">Tunisia</option>
                  <option  value="Turkey">Turkey</option>
                  <option  value="Turkmenistan">Turkmenistan</option>
                  <option  value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                  <option  value="Tuvalu">Tuvalu</option>
                  <option  value="U.S. Minor Outlying Islands">U.S. Minor Outlying Islands</option>
                  <option  value="U.S. Miscellaneous Pacific Islands">U.S. Miscellaneous Pacific Islands</option>
                  <option  value="U.S. Virgin Islands">U.S. Virgin Islands</option>
                  <option  value="Uganda">Uganda</option>
                  <option  value="Ukraine">Ukraine</option>
                  <option  value="Union of Soviet Socialist Republics">Union of Soviet Socialist Republics</option>
                  <option  value="United Arab Emirates">United Arab Emirates</option>
                  <option  value="United Kingdom">United Kingdom</option>
                  <option  value="United States">United States</option>
                  <option  value="Unknown or Invalid Region">Unknown or Invalid Region</option>
                  <option  value="Uruguay">Uruguay</option>
                  <option  value="Uzbekistan">Uzbekistan</option>
                  <option  value="Vanuatu">Vanuatu</option>
                  <option  value="Vatican City">Vatican City</option>
                  <option  value="Venezuela">Venezuela</option>
                  <option  value="Vietnam">Vietnam</option>
                  <option  value="Wake Island">Wake Island</option>
                  <option  value="Wallis and Futuna">Wallis and Futuna</option>
                  <option  value="Western Sahara">Western Sahara</option>
                  <option  value="Yemen">Yemen</option>
                  <option  value="Zambia">Zambia</option>
                  <option  value="Zimbabwe">Zimbabwe</option>
              </select>
            </div>

            <div class="form-group col-12">
              <label for="tracking">RECEIPIENT'S FULL NAME</label>
              <span class="d-inline-block ml-4">
                <label><input name="getname" id="getname"  type="checkbox" value="" onclick="getmyname('getname', 'shippingname');" class="add_new_checkbox_1" /> Add My Name</label> </span>
                <input   name="shippingname" id="shippingname" type="text" class="form-control" />
            </div>
            <div class="form-group col-12">
              <label for="tracking">RECEIPIENT'S FULL ADDRESS</label>
              <span class="d-inline-block ml-4">
                <label><input name="getadrs" id="getadrs"  type="checkbox" value="" onclick="getmyaddress('getadrs', 'shippingadrs');" class="add_new_checkbox_1" /> Add My Address</label> </span>
                <input name="shippingadrs" id="shippingadrs" type="text"  class="form-control" />
            </div>

            <div class="col-12">
              <div class="form-group row">
                <label for="destination" class="col-sm-6 col-form-label">COUNTRY OF DESTINATION</label>
                <div class="col-sm-6">
                  <select name="destination" id="destination" class="form-control" >
                    <option value="0">Select Your Destination ...</option>
                    <option value="australia">Australia</option>
                    <option value="newzeland">NewZeland</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label for="destination" class="col-sm-6 col-form-label">SELECT YOUR PREFERRED COURIER</label>
                <div class="col-sm-6">
                  <select name="courier" id="courier" class="form-control"  >
                    <option value="0">Select Your Courier ...</option>
                    <option value="UPS">DHL</option>
                    <option value="UPS">UPS</option>
                    <option value="FedEx" selected="selected">FedEx</option>
                  </select>
                </div>
              </div>
            </div>
            <div class="col-12">
              <div class="form-group row">
                <label for="destination" class="col-sm-6 col-form-label">PACKAGE VALUE</label>
                <div class="col-sm-6">
                  US$ <input name="packagevalue" id="packagevalue" type="text" class="form-control d-inline-block"   onkeypress="return validateFloatKeyPress(this,event);"  style="width:62px; height:30px; padding:0px; border:0px solid;" />

                </div>
              </div>
            </div>
            <div class="col-12">
              <p name="addnew_msg" id="addnew_msg" type="text"   class="text-danger" readonly="readonly" >
                <!-- Tracking No. cannot be blanked -->
              </p>
              <button type="submit" name="button" class="btn btn-primary float-right">Next</button>
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
