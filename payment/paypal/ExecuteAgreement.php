<?php
session_start();

// #Execute Agreement
// This is the second part of CreateAgreement Sample.
// Use this call to execute an agreement after the buyer approves it
require_once __DIR__ . '/bootstrap.php';
// ## Approval Status
// Determine if the user accepted or denied the request
if (isset($_GET['success']) && $_GET['success'] == 'true') {
    $member_id = $_SESSION['member_id'];
    $plan = $_SESSION['selected_plan'];
    $cycle = $_SESSION['selected_cycle'];
    $charges = $_SESSION['charges'];
    $token = $_GET['token'];

    $member_id = $_SESSION['member_id'];
    $user = getUser($member_id);
    $shouldExecute = true;
    if (hasSubscription($user['id'])) {
        try {
            cancelSubscriptions($user, $apiContext);
        } catch (\Exception $e) {
            $shouldExecute = false;
        }
    }

    if ($shouldExecute) {
        $agreement = new \PayPal\Api\Agreement();
        try {
            // ## Execute Agreement
            // Execute the agreement by passing in the token
            $agreement->execute($token, $apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            // ResultPrinter::printError("Executed an Agreement", "Agreement", $agreement->getId(), $_GET['token'], $ex);
            echo $e->getMessage();
            exit(1);
        }
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        // ResultPrinter::printResult("Executed an Agreement", "Agreement", $agreement->getId(), $_GET['token'], $agreement);
        // ## Get Agreement
        // Make a get call to retrieve the executed agreement details
        try {
            $agreement = \PayPal\Api\Agreement::get($agreement->getId(), $apiContext);
        } catch (Exception $ex) {
            // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
            // ResultPrinter::printError("Get Agreement", "Agreement", null, null, $ex);
            echo $ex->getMessage();
            exit(1);
        }
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        // ResultPrinter::printResult("Get Agreement", "Agreement", $agreement->getId(), null, $agreement);
        if ($agreement) {
            $sql = "SELECT * FROM  `members` WHERE id = $member_id";
            $results = mysql_query($sql, $connection) or die(mysql_error());
            $user = mysql_fetch_assoc($results);
            $agreementId = $agreement->getId();
            if (hasSubscription($user['id'])) {
                $query = "UPDATE `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = 'paypal', `agreement_id` = '{$agreementId}', `charges` = '{$charges}'  WHERE `member_id`={$user['id']}";
                $results = mysql_query($query, $connection);
            } else {
                $query = "INSERT INTO `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `member_id`={$user['id']}, `agreement_id` = '{$agreementId}', `charges` = '{$charges}', `method` = 'paypal'";
                $results = mysql_query($query, $connection);
            }
        } else {
            if (hasSubscription($user['id'])) {
                $query = "UPDATE `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = '', `agreement_id` = '', `charges` = '{$charges}' WHERE `member_id`={$user['id']}";
                $results = mysql_query($query, $connection);
            } else {
                $query = "INSERT INTO `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `member_id`={$user['id']}, `charges` = '{$charges}', `method` = 'paypal'";
                $results = mysql_query($query, $connection);
            }
        }
        $url = BASE_URL.'/members/edit_account.php';
        header("LOCATION: {$url}");
    }
} else {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printResult("User Cancelled the Approval", null);
    $url = BASE_URL.'/members/edit_account.php';
    header("LOCATION: {$url}");
}
