<?php
/**
 * Get Query Results
 *
 * @param $query
 */
function getQueryResults($query)
{
    global $conn;

    $results = mysqli_query($conn, $query);
    if (!$results) {
        return false;
    }
    $rows = [];
    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $rows;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $rows[] = $row;
    }

    return $rows;
}
/**
 * Get Query Results
 *
 * @param $query
 */
function getSingleQueryResult($query)
{
    global $conn;

    $row = getQueryResults($query);
    if (count($row) <= 0) {
        return false;
    }

    return $row[0];
}
/**
 * Execute Query
 *
 * @param $query
 */
function executeQuery($query)
{
    global $conn;
    $results = mysqli_query($conn, $query);
    return $results;
}

/**
 * Begin DB Transaction
 *
 * @param $query
 */
function transaction_begin()
{
    global $conn;
    mysqli_query($conn, "START TRANSACTION");
}

/**
 * Rollback DB Transaction
 *
 * @param $query
 */
function transaction_rollback()
{
    global $conn;
    mysqli_query($conn, "ROLLBACK");
}

/**
 * End DB Transaction
 *
 * @param $query
 */
function transaction_commit()
{
    global $conn;
    mysqli_query($conn, "COMMIT");
}

/**
 * Reset Password
 */

function change_password($new_password=null)
{
    if (!$new_password) {
        return false;
    }
    $new_password=md5($new_password);
    $ar_id = $_SESSION['ar_id'];
    doUpdate('ambit_registration', ['password' => $new_password], ['ar_id' => $ar_id]);
    return true;
}

function reset_password($new_password=null, $ar_id)
{
    if (!$new_password) {
        return false;
    }
    $new_password=md5($new_password);
    doUpdate('ambit_registration', ['password' => $new_password, 'token' => ''], ['ar_id' => $ar_id]);
    return true;
}

function check_old_password($password)
{
    global $conn;
    $password=md5($password);
    $ar_id = $_SESSION['ar_id'];
    $q="SELECT * from ambit_registration where ar_id={$ar_id} and password='{$password}'";
    $results = mysqli_query($conn, $q);

    if (!$results) {
        die('Invalid query: ' . mysqli_info($conn));
    } else {
        return !! mysqli_num_rows($results);
    }

    return false;
}

function property_extra_fields($ap_id = null)
{
    global $conn;
    $fields = [];
    if (!$ap_id) {
        return $fields;
    }

    $query = "Select apef.* , pcef.field_name, pcef.label_name, pcef.extra_field_type, pcef.value as value_expected  from add_property_extra_field as apef left join  property_cat_extra_field as pcef on pcef.pcef_id = apef.pcef_id where apef.ap_id={$ap_id}";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        die('Invalid query: ' . mysqli_info($conn));
    }

    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $fields;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $fields[] = $row;
    }

    return $fields;
}

function car_extra_fields($acm_id = null)
{
    global $conn;
    $fields = [];
    if (!$acm_id) {
        return $fields;
    }

    $query = "Select acmef.* , ccef.field_name, ccef.label_name, ccef.extra_field_type, ccef.value as value_expected  from add_car_motorcycle_extra_field as acmef left join  car_cat_extra_field as ccef on ccef.ccef_id = acmef.ccef_id where acmef.acm_id={$acm_id}";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        die('Invalid query: ' . mysqli_info($conn));
    }

    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $fields;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $fields[] = $row;
    }

    return $fields;
}

function car_extra_fields_relisting($acm_id = null)
{
    global $conn;
    $fields = [];
    if (!$acm_id) {
        return $fields;
    }

    $query = "Select acmef.* , ccef.field_name, ccef.label_name, ccef.extra_field_type, ccef.value as value_expected  from add_car_motorcycle_extra_field_relisting as acmef left join  car_cat_extra_field as ccef on ccef.ccef_id = acmef.ccef_id where acmef.acm_id={$acm_id}";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        die('Invalid query: ' . mysqli_info($conn));
    }

    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $fields;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $fields[] = $row;
    }

    return $fields;
}

function car_extra_fields_editing($acm_id = null)
{
    global $conn;
    $fields = [];
    if (!$acm_id) {
        return $fields;
    }

    $query = "Select acmef.* , ccef.field_name, ccef.label_name, ccef.extra_field_type, ccef.value as value_expected  from add_car_motorcycle_extra_field_editing as acmef left join  car_cat_extra_field as ccef on ccef.ccef_id = acmef.ccef_id where acmef.acm_id={$acm_id}";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        die('Invalid query: ' . mysqli_info($conn));
    }

    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $fields;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $fields[] = $row;
    }

    return $fields;
}

function general_item_extra_fields($agi_id = null)
{
    global $conn;
    $fields = [];
    if (!$agi_id) {
        return $fields;
    }

    $query = "Select agief.* , gcef.field_name, gcef.label_name, gcef.extra_field_type, gcef.value as value_expected  from add_general_items_extra_field as agief left join  general_cat_extra_field as gcef on gcef.gcef_id = agief.gcef_id where agief.agi_id={$agi_id}";
    $results = mysqli_query($conn, $query);
    if (!$results) {
        return false;
    }

    $num_rows = mysqli_num_rows($results);
    if ($num_rows <= 0) {
        return $fields;
    }

    while ($row = mysqli_fetch_assoc($results)) {
        $fields[] = $row;
    }

    return $fields;
}


/**
 * Car Q\A functions
 */
function getCarQuestions($car_id)
{
    global $conn;
    $dbdata=array();
    $query="select * from car_questions where car_id='$car_id'";
    $rows=mysqli_query($conn, $query);
    if ($rows) {
        while ($data=mysqli_fetch_assoc($rows)) {
            array_push($dbdata, $data);
        }
    }
    return $dbdata;
}
function getCarNumberQuestions($id)
{
    global $conn;
    $query="select * from car_questions where car_id=".$id;
    $data= mysqli_query($conn, $query);
    $rows = mysqli_num_rows($data);
    return $rows;
}

function sendMailForCarQNA($type, $car_id, $question)
{
    if ($type=='question') {
        $listing_title=getValue("add_car_motorcycle", "listing_title", $car_id, "acm_id");
        $send_to=getValue("add_car_motorcycle", "uploader", $car_id, "acm_id");
        $send_email=getValueDetails("ambit_registration", "*", $send_to, "ar_id");
        // var_dump($listing_title,$send_to,$send_email);
        extract($send_email);
        include("car_mailer.php");
    } else {
        $q_id = $car_id;
        $item_id = $listing_id=getValue("car_questions", "car_id", $q_id, "id");
        $listing_title=getValue("add_car_motorcycle", "listing_title", $listing_id, "acm_id");
        $send_to=getValue("car_questions", "cus_id", $q_id, "id");
        $send_email=getValueDetails("ambit_registration", "*", $send_to, "ar_id");
        extract($send_email);
        include("mailer.php");
    }
}

/**
 * Get Property Price Details
 *
 * @param $propertyId
 * @return arry
 */
function propertyPriceDetails($propertyId)
{
    $query = "select * from add_property_price_dtls where ap_id={$propertyId}";

    return getQueryResults($query)[0];
}

/**
 * Get Property vedio link
 *
 * @param $propertyId
 * @return string
 */
function propertyVideoLink($propertyId)
{
    $query = "select video from add_property_video where ap_id={$propertyId}";
    $property = getQueryResults($query);
    if ($property && !empty($property)) {
        return $property[0]['video'];
    }
    return false;
}

function userLeadingOnCarBid($acm_id, $ar_id)
{
    $query = "select * from ambit_car_bid where acm_id={$acm_id} order by `bid_price` desc, acb_id asc limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        if ($result['cus_id'] == $ar_id) {
            return true;
        }
    }
    return false;
}

function userLeadingOnGeneralItemBid($agi_id, $ar_id)
{
    $query = "select * from ambit_general_item_bid where agi_id={$agi_id} order by `bid_price` desc, agi_id asc limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        if ($result['cus_id'] == $ar_id) {
            return true;
        }
    }
    return false;
}

function getJobBrand($aj_id)
{
    $query = "select * from add_job_brand where aj_id={$aj_id} limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        return $result;
    }
    return false;
}

function getJobBrandEditing($aj_id)
{
    $query = "select * from add_job_brand_editing where aj_id={$aj_id} limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        return $result;
    }
    return false;
}

function getJobVideo($aj_id)
{
    $query = "select * from add_job_video where aj_id={$aj_id} limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        return $result;
    }
    return false;
}

function getYoutubeVideoId($video)
{
    if (startsWith($video['video'], 'http') || startsWith($video['video'], 'youtube')) {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $video['video'], $match);
        if (isset($match['1'])) {
            return $match['1'];
        }
        return $video['video'];
    } else {
        return $video['video'];
    }
}
function getYoutubeVideoIdFromUrl($videoUrl)
{
    if (startsWith($videoUrl, 'http') || startsWith($videoUrl, 'youtube')) {
        preg_match('%(?:youtube(?:-nocookie)?\.com/(?:[^/]+/.+/|(?:v|e(?:mbed)?)/|.*[?&]v=)|youtu\.be/)([^"&?/ ]{11})%i', $videoUrl, $match);
        if (isset($match['1'])) {
            return $match['1'];
        }
        return $videoUrl;
    } else {
        return $videoUrl;
    }
}

function getJobFeatures($aj_id)
{
    $query = "select * from add_job_listing_features where aj_id={$aj_id} limit 1";
    $result = getQueryResults($query);
    if ($result && !empty($result)) {
        $result = $result[0];
        return $result;
    }
    return false;
}

function startsWith($haystack, $needle)
{
    $length = strlen($needle);
    return (substr($haystack, 0, $length) === $needle);
}

function propertyContacts($ap_id)
{
    $select="*";
    $from="add_property_contact_dtls";
    $condition=array("ap_id"=>$ap_id);
    $contact_detls=getDetails(doSelect1($select, $from, $condition));
    return $contact_detls;
}

function deleteCarQuestions($acm_id)
{
    $query = "DELETE FROM car_questions WHERE car_id = {$acm_id}";
    return executeQuery($query);
}
function deleteGeneralItemQuestions($agi_id)
{
    $query = "DELETE FROM questions WHERE item_id = {$agi_id}";
    return executeQuery($query);
}
function deleteGeneralItemOffers($agi_id)
{
    $query = "DELETE FROM offers WHERE agi_id = {$agi_id}";
    return executeQuery($query);
}
function deleteCarOffers($acm_id)
{
    $query = "DELETE FROM offers_car WHERE acm_id = {$acm_id}";
    return executeQuery($query);
}

function deleteCarBids($acm_id)
{
    $query = "DELETE FROM ambit_car_bid WHERE acm_id = {$acm_id}";
    return executeQuery($query);
}
function deleteGeneralItemBids($agi_id)
{
    $query = "DELETE FROM ambit_general_item_bid WHERE agi_id = {$agi_id}";
    return executeQuery($query);
}

function getWonSoldGeneral($item_id)
{
    $sql = "SELECT * FROM ambit_won_lost WHERE item_id = {$item_id} and status = 1 and db = 'add_general_items'";
    $won = getSingleQueryResult($sql);
    return $won;
}

function getWonSoldCar($item_id)
{
    $sql = "SELECT * FROM ambit_won_lost WHERE item_id = {$item_id} and status = 1 and db = 'add_car_motorcycle'";
    $won = getSingleQueryResult($sql);
    return $won;
}

function getCus($ar_id)
{
    $sql = "SELECT * FROM ambit_registration WHERE ar_id = {$ar_id}";
    $cus = getSingleQueryResult($sql);
    return $cus;
}

function isAuthenticated()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['ar_id'])) {
        $query = "Select * from ambit_registration where ar_id = {$_SESSION['ar_id']}";
        $user = getSingleQueryResult($query);
        if ($user['authenticated'] == 1) {
            return true;
        }
    }
    return false;
}

function authenticateUser()
{
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    if (isset($_SESSION['ar_id'])) {
        doUpdate('ambit_registration', ['authenticated' => true], ['ar_id' => $_SESSION['ar_id']]);
    }
}

function getCarBodyStyles()
{
    $query = "SELECT * from car_cat_extra_field where cc_id = 1 and label_name = 'Body style' LIMIT 1";
    $result = getSingleQueryResult($query);
    $bodyStyles = [];
    if ($result) {
        for ($i=0;$i< $result["value_no"];$i++) {
            $value=explode("||", $result["value"]);
            $field_value=explode("::", $value[$i]);
            $bodyStyles[] = $field_value[0];
        }
    }
    return $bodyStyles;
}

function getMotorbikeMake()
{
    $query = "SELECT * from car_cat_extra_field where cc_id = 32 and label_name = 'Make' LIMIT 1";
    $result = getSingleQueryResult($query);
    $make = [];
    if ($result) {
        for ($i=0;$i< $result["value_no"];$i++) {
            $value=explode("||", $result["value"]);
            $field_value=explode("::", $value[$i]);
            $make[] = $field_value[0];
        }
    }
    return $make;
}

function carExtraFieldMatching($keyword)
{
    $query = "select DISTINCT acm_id from `add_car_motorcycle_extra_field` where value like '%{$keyword}%'";
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getUsersIDFromCity($city)
{
    $query = "SELECT DISTINCT ar_id from `ambit_registration` where city = {$city}";
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ar_id'];
        }
    }
    return $rows;
}

function getUsersIDFromCountry($country)
{
    $query = "SELECT DISTINCT ar_id from `ambit_registration` where country = {$country}";
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ar_id'];
        }
    }
    return $rows;
}

function getUsersIDFromCityAndCountry($country, $city)
{
    $query = "SELECT DISTINCT ar_id from `ambit_registration` where country = {$country} AND city = {$city}";
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ar_id'];
        }
    }
    return $rows;
}

function getBodyTypeCarsWith($body_type)
{
    $ccef_id = 15;
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value LIKE '%{$body_type}%' AND ccef_id = {$ccef_id}";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getMakeCarsWith($make)
{
    $ccef_id = 29;
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value LIKE '%{$make}%' AND ccef_id = {$ccef_id}";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getYearFieldCcefIdWith()
{
    $query = "select ccef_id from `car_cat_extra_field` where field_name = 'year'";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ccef_id'];
        }
    }
    return $rows;
}

function getGreaterOrEqualYearCarsWith($year_start)
{
    $ccef_ids = getYearFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value >= {$year_start} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getLessOrEqualYearCarsWith($year_end)
{
    $ccef_ids = getYearFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value <= {$year_end} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}


// Engin
function getEngineFieldCcefIdWith()
{
    $query = "select ccef_id from `car_cat_extra_field` where field_name LIKE '%Engine size%'";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ccef_id'];
        }
    }
    return $rows;
}

function getGreaterOrEqualEngineCarsWith($engine_start)
{
    $ccef_ids = getEngineFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value >= {$engine_start} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getLessOrEqualEngineCarsWith($engine_end)
{
    $ccef_ids = getEngineFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value <= {$engine_end} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

// Odometer
function getOdometerFieldCcefIdWith()
{
    $query = "select ccef_id from `car_cat_extra_field` where field_name LIKE '%Kilometers%'";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['ccef_id'];
        }
    }
    return $rows;
}

function getGreaterOrEqualOdometerCarsWith($odometer_start)
{
    $ccef_ids = getOdometerFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value >= {$odometer_start} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}

function getLessOrEqualOdometerCarsWith($odometer_end)
{
    $ccef_ids = getOdometerFieldCcefIdWith();
    $query = "SELECT DISTINCT acm_id from `add_car_motorcycle_extra_field` where value <= {$odometer_end} AND ccef_id IN (".implode(',', $ccef_ids).")";
    // echo $query.'<br>';
    $results = getQueryResults($query);
    $rows = [];
    if ($results) {
        foreach ($results as $row) {
            $rows[] = $row['acm_id'];
        }
    }
    return $rows;
}


/**
 * Edit functions
 */
function getListingData($id, $table_id, $table)
{
    $query = "SELECT * from {$table} where {$table_id} = ${id} LIMIT 1";
    $result = getSingleQueryResult($query);
    return $result;
}

function checkCarEditing($acm_id)
{
    $table = 'add_car_motorcycle_editing';
    $query = "SELECT * from {$table} where acm_id = {$acm_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkUpdatingCarExtraField($acmef_id)
{
    $table = 'add_car_motorcycle_extra_field_editing';
    $query = "SELECT * from {$table} where acmef_id = {$acmef_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkUpdatingCarFeatures($acm_id)
{
    $table = 'add_car_motorcycle_listing_features_editing';
    $query = "SELECT * from {$table} where acm_id = {$acm_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

// Car relisting functions
function checkCarRelisting($acm_id)
{
    $table = 'add_car_motorcycle_relisting';
    $query = "SELECT * from {$table} where acm_id = {$acm_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkRelistingCarExtraField($acmef_id)
{
    $table = 'add_car_motorcycle_extra_field_relisting';
    $query = "SELECT * from {$table} where acmef_id = {$acmef_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkRelistingCarFeatures($acm_id)
{
    $table = 'add_car_motorcycle_listing_features_relisting';
    $query = "SELECT * from {$table} where acm_id = {$acm_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function chk_car_listing_editing_fld_exist($field, $acm_id)
{
    return trim(seeMoreDetails($field, "add_car_motorcycle_listing_features_editing", array("acm_id"=>$acm_id)));
}

function chk_car_listing_fld_exist_relist($field, $acm_id)
{
    return trim(seeMoreDetails($field, "add_car_motorcycle_listing_features_relisting", array("acm_id"=>$acm_id)));
}
// General Item editing
function checkGeneralEditing($agi_id)
{
    $table = 'add_general_items_editing';
    $query = "SELECT * from {$table} where agi_id = {$agi_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}
// General relisting
function checkGeneralRelisting($agi_id)
{
    $table = 'add_general_items_relisting';
    $query = "SELECT * from {$table} where agi_id = {$agi_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}
// Job Editing
function checkJobEditing($aj_id)
{
    $table = 'add_job_editing';
    $query = "SELECT * from {$table} where aj_id = {$aj_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkJobFeatureEditing($aj_id)
{
    $table = 'add_job_listing_features_editing';
    $query = "SELECT * from {$table} where aj_id = {$aj_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkJobBrandEditing($aj_id)
{
    $table = 'add_job_brand_editing';
    $query = "SELECT * from {$table} where aj_id = {$aj_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}
// Property Edit functions
function checkPropertyEditing($ap_id)
{
    $table = 'add_property_editing';
    $query = "SELECT * from {$table} where ap_id = {$ap_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkPropertyContactDetail($apcd_id)
{
    $table = 'add_property_contact_dtls_editing';
    $query = "SELECT * from {$table} where apcd_id = {$apcd_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkPropertyContactDetailInOriginal($apcd_id, $ap_id)
{
    $table = 'add_property_contact_dtls';
    $query = "SELECT * from {$table} where apcd_id = {$apcd_id} and ap_id = {$ap_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkPropertyPriceDetail($ap_id)
{
    $table = 'add_property_price_dtls_editing';
    $query = "SELECT * from {$table} where ap_id = {$ap_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function checkPropertyListingEditing($ap_id)
{
    $table = 'add_property_listing_features_editing';
    $query = "SELECT * from {$table} where ap_id = {$ap_id}";
    if (getSingleQueryResult($query)) {
        return true;
    }
    return false;
}

function chk_property_listing_fld_exist_editing($field, $ap_id)
{
    return trim(seeMoreDetails($field, "add_property_listing_features_editing", array("ap_id"=>$ap_id)));
}

function convert_money($number)
{
    return round((float) $number, 2);
}

function convert_money_display($number)
{
    return number_format(convert_money($number), 2, ".", ",");
}

function min_precision($x, $p = 2)
{
    $e = pow(10, $p);
    return floor($x*$e)==$x*$e?sprintf("%.${p}f", $x):$x;
}


// Car Offers
function acceptOfferCar($acm_id, $ar_id, $offer_id)
{
    global $conn;
    $query="SELECT * from add_car_motorcycle  where acm_id = {$acm_id} and sold_status = 1";
    if (getSingleQueryResult($query)) {
        return 'offer aleady accepted';
    }
    $comm=getComm($_POST['price']);
    $seller_id=getValue("add_car_motorcycle", "uploader", $acm_id, "acm_id");
    $query="insert into offers_accepted_car (`offer_id`,`accepted_by`) values ('$offer_id','$ar_id')";
    $q = "select * from add_car_motorcycle where `acm_id`={$acm_id}";
    $data = mysqli_query($conn, $q);
    $acm_item_details = getDetails($data);
    $amount = getValue('offers_car', 'amount', $acm_id, 'acm_id');
    if (mysqli_query($conn, $query)) {
        if (changeOfferStatusCar($offer_id, $acm_id) && changeSoldStatusCar($acm_id) && amountDeduct($comm, $seller_id) && addTransaction($comm, $seller_id, $acm_id, 'add_car_motorcycle')) {
            // Delete lost enterie if there of accepted item
            $query = "DELETE from ambit_won_lost where db = 'add_car_motorcycle' and  item_id = {$acm_id} and cus_id = {$ar_id} and status = 0";
            executeQuery($query);
            $q = "insert into ambit_won_lost (`db`,`item_id`, `price`, `cus_id` , `status`) values ('add_car_motorcycle', '{$acm_id}', '{$amount}', '{$ar_id}', '1')";
            if (mysqli_query($conn, $q)) {
                // indiacator for emailing seller if no one responds to offer
                $query = "UPDATE add_car_motorcycle set offer_mail = NULL where acm_id = {$acm_id}";
                executeQuery($query);
                // sending respective Emails
                sendBuyerMailCar($acm_id, $ar_id, $offer_id, $comm);
                sendOfferSoldMailCar($acm_id, $ar_id, $offer_id);
                return true;
            }
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function changeOfferStatusCar($offer_id, $acm_id)
{
    global $conn;
    $query="update offers_car set `accept_status`=1 where id='$offer_id'";
    if (mysqli_query($conn, $query)) {
        $query="update offers_car set `status`=1 where acm_id='$acm_id'";
        if (mysqli_query($conn, $query)) {
            return true;
        } else {
            return false;
        }
    } else {
        return false;
    }
}

function changeSoldStatusCar($acm_id)
{
    global $conn;
    $query="update add_car_motorcycle set `sold_status`=1 where acm_id='$acm_id'";
    if (mysqli_query($conn, $query)) {
        return true;
    } else {
        return false;
    }
}

function declineOfferCar($ar_id, $acm_id, $id)
{
    global $conn;
    $query="update offers_car set `accept_status`=0, `status`=1 where id='$id'";
    if (mysqli_query($conn, $query)) {
        // indiacator for emailing seller if no one responds to offer
        $query = "UPDATE add_car_motorcycle set offer_mail = NULL where acm_id = {$acm_id}";
        executeQuery($query);
        // sending respective Emails
        sendDeclineMailCar($ar_id, $acm_id, $id);
        return true;
    } else {
        return false;
    }
}
function sendDeclineMailCar($ar_id, $acm_id, $id)
{
    $listing_title=getValue("add_car_motorcycle", "listing_title", $acm_id, "acm_id");
    $price=getValue("offers_car", "amount", $id, "id");
    //$buyer=getValue("offers_car","sent_to_id",$id,"id");
    $buyer_name=getValue("ambit_registration", "name", $ar_id, "ar_id");

    $seller_id=getValue("add_car_motorcycle", "uploader", $acm_id, "acm_id");
    $seller=getValue("ambit_registration", "name", $seller_id, "ar_id");
    $email=getValue("ambit_registration", "email", $seller_id, "ar_id");
    include("decline_offer_car_mail.php");
}

function sendBuyerMailCar($acm_id, $ar_id, $offer_id, $comm)
{
    $listing_title=getValue("add_car_motorcycle", "listing_title", $acm_id, "acm_id");
    $price=getValue("offers_car", "amount", $offer_id, "id");

    $buyer_name=getValue("ambit_registration", "name", $ar_id, "ar_id");
    $buyer_email=getValue("ambit_registration", "email", $ar_id, "ar_id");

    $seller_id=getValue("offers_car", "sent_from_id", $offer_id, "id");
    $seller_name=getValue("ambit_registration", "name", $seller_id, "ar_id");
    $seller_email=getValue("ambit_registration", "email", $seller_id, "ar_id");

    include("buyer_offer_car_mail.php");
    include("seller_offer_car_mail.php");
}

function sendOfferSoldMailCar($acm_id, $ar_id, $offer_id)
{
    global $conn;
    $listing_title=getValue("add_car_motorcycle", "listing_title", $acm_id, "acm_id");
    $price=getValue("offers_car", "amount", $offer_id, "id");
    $listing = $acm_id;
    $query = "select sent_to_id from offers_car where acm_id = {$acm_id} and sent_to_id != {$ar_id}";
    $data = mysqli_query($conn, $query);
    $otherWatchers = getDetails($data);

    foreach ($otherWatchers as $otherWatcher) {
        $query = "select email, name from ambit_registration where ar_id = {$otherWatcher['sent_to_id']}";
        $data = mysqli_query($conn, $query);
        $otherWatcherDetails = mysqli_fetch_assoc($data);
        $send_to = $otherWatcherDetails['name'];
        $email = $otherWatcherDetails['email'];
        include 'offer_sold_car_mail.php';
    }
}

function checkIfCarSold($acm_id)
{
    $query = "SELECT * from add_car_motorcycle where acm_id = {$acm_id} LIMIT 1";
    $car = getSingleQueryResult($query);
    if ($car) {
        if ($car['sold_status'] == 1) {
            return true;
        }
    }
    return false;
}

function checkIfGeneralItemSold($agi_id)
{
    $query = "SELECT * from add_general_items where agi_id = {$agi_id} LIMIT 1";
    $car = getSingleQueryResult($query);
    if ($car) {
        if ($car['sold_status'] == 1) {
            return true;
        }
    }
    return false;
}

function removeEmptyIndex($data)
{
    foreach ($data as $key => $value) {
        if ($value === '' || $value === null) {
            unset($data[$key]);
        } elseif ($value == 'true') {
            $data[$key] = 1;
        } elseif ($value == 'false') {
            $data[$key] = 0;
        }
    }
    return $data;
}

function propertyFixData($data)
{
    foreach ($data as $key => $value) {
        if ($value === '') {
            unset($data[$key]);
        } elseif ($value == 'true') {
            $data[$key] = 1;
        } elseif ($value == 'false') {
            $data[$key] = 0;
        }
    }
    return $data;
}
