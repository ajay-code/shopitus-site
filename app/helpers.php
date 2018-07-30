<?php

use PayPal\Api\Agreement;
use PayPal\Api\AgreementDetails;
use PayPal\Api\AgreementStateDescriptor;

require_once "general-helpers.php";

function hasSubscription($user_id)
{
    global $connection;
    $query = "SELECT * from `subscription` where member_id = {$user_id}";
    $result = mysql_query($query, $connection);
    return !!mysql_num_rows($result);
}

function cancelAgreement($agreement_id, $apiContext = null)
{
    if (!$apiContext) {
        $apiContext = require(ROOT_PATH.'/payment/paypal/bootstrap.php');
    }
    $agreement = Agreement::get($agreement_id, $apiContext);
    $agreementStateDescriptor = new AgreementStateDescriptor();
    $agreementStateDescriptor->setNote("Cancel the agreement");
    try {
        $agreement->cancel($agreementStateDescriptor, $apiContext);
        $cancelAgreementDetails = Agreement::get($agreement->getId(), $apiContext);
        return true;
    } catch (Exception $ex) {
        echo $ex->getmessage();
    }
    return false;
}

/**
 * ### getBaseUrl function
 * // utility function that returns base url for
 * // determining return/cancel urls
 *
 * @return string
 */
function getBaseUrl()
{
    return BASE_URL;
}

function setStartAndEndDatesOfSubscription($agreementId = null, $apiContext = null)
{
    global $connection;
    if (!$apiContext) {
        $apiContext = require(ROOT_PATH.'/payment/paypal/bootstrap.php');
    }
    if ($agreementId) {
        $sql = "SELECT * FROM  `subscription` WHERE agreement_id = '{$agreementId}'";
        $results = mysql_query($sql, $connection) or die(mysql_error());
        $subscription = mysql_fetch_assoc($results);

        $agreement = Agreement::get($agreementId, $apiContext);
        $agreement_details = $agreement->getAgreementDetails();
        $renew_date = $agreement_details->getNextBillingDate();
        if (isset($subscription['agreement_id']) && $agreement) {
            $startDate = Carbon\Carbon::now()->toDateString();
            $endDate = (new Carbon\Carbon($renew_date))->toDateString();
            $query = "UPDATE `subscription` SET `start_date` = '{$startDate}', `end_date` = '{$endDate}' WHERE `agreement_id` = '{$agreementId}'";
            mysql_query($query, $connection) or die(mysql_error());
        }
    }
}

/**
 * Functions to execute queries
 */

 /**
 * Get Query Results
 *
 * @param $query
 */
function getQueryResults($query)
{
    global $connection;

    $results = mysql_query($query, $connection);
    if (!$results) {
        return false;
    }
    $rows = [];
    $num_rows = mysql_num_rows($results);
    if ($num_rows <= 0) {
        return $rows;
    }

    while ($row = mysql_fetch_assoc($results)) {
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
    global $connection;

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
    global $connection;
    $results = mysql_query($query, $connection);
    return $results;
}

/**
 * Execute Query
 *
 * @param $query
 */
function getUser($member_id)
{
    $sql = "SELECT * FROM  `members` WHERE id = $member_id";
    $user = getSingleQueryResult($sql);
    return $user;
}

/**
 * min_precision for number
 */
function min_precision($x, $p = 2)
{
    $e = pow(10, $p);
    return floor($x*$e)==$x*$e?sprintf("%.${p}f", $x):$x;
}

function cancelSubscriptions($user, $apiContext = null)
{
    if (hasSubscription($user['id'])) {
        if (!$apiContext) {
            require_once __DIR__ . '/../payment/paypal/bootstrap.php';
        }
        // cancel Paypal subscription
        $query = "SELECT * from `subscription` WHERE `member_id`={$user['id']}";
        $subscription = getSingleQueryResult($query);
        if ($subscription['agreement_id']) {
            $shouldExecute = cancelAgreement($subscription['agreement_id'], $apiContext);
            if ($shouldExecute) {
                $query = "UPDATE `subscription` SET `plan`= 'basic', `cycle`='', `method` = '', `agreement_id` = '', `charges` = ''  WHERE `member_id`={$user['id']}";
                executeQuery($query);
            }
        }
    }
    if ($subscription['stripe_subscription_id']) {
        require_once __DIR__ . '/../payment/stripe/bootstrap.php';
        try {
            StripeManager::cancelAllMembershipsOfCustomer($user['id']);
            $query = "UPDATE `subscription` SET `plan`= 'basic', `cycle`='', `method` = '', `stripe_subscription_id` = '', `charges` = ''  WHERE `member_id`={$user['id']}";
            executeQuery($query);
        } catch (\Exception $e) {
        }
    }
}
