<?php
session_start();
include '../../config.php';
$plan = false;

$plan = $_SESSION['plan'];
$cycle = $_SESSION['cycle'];
$charges = $_SESSION['charges'];
$member_id = $_SESSION['member_id'];

// $createdPlan = require __DIR__.'/plans/getPlan.php';
// $request = clone $createdPlan;

// ResultPrinter::printResult("Created Plan", "Plan", $createdPlan->getId(), $request, $createdPlan);

if ($member_id) {
    if ($plan) {
        $_SESSION['selected_plan'] = $plan;
        $_SESSION['selected_cycle'] = $cycle;
        $_SESSION['charges'] = $charges;
        $agreement = require "CreateBillingAgreementWithPayPal.php";
        if (!$agreement) {
            $sql = "SELECT * FROM  `members` WHERE id = $member_id";
            $results = mysql_query($sql, $connection) or die(mysql_error());
            $user = mysql_fetch_assoc($results);
            if ($user) {
                $shouldExecute = true;
                if (hasSubscription($user['id'])) {
                    try {
                        cancelSubscriptions($user, $apiContext);
                    } catch (\Exception $e) {
                        $shouldExecute = false;
                    }
                }
                if ($shouldExecute) {
                    $query = "UPDATE `subscription` SET `plan`= '{$plan}', `cycle`='{$cycle}', `method` = '', `agreement_id` = '', `charges` = '{$charges}' WHERE `member_id`={$user['id']}";
                    $results = mysql_query($query, $connection);
                }
                $url = BASE_URL.'/members/edit_account.php';
                header("LOCATION: {$url}");
            }
        }
    } else {
        $url = BASE_URL.'/members/edit_account.php';
        header("LOCATION: {$url}");
    }
}
