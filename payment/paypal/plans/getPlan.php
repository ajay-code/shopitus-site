<?php

include __DIR__.'/../bootstrap.php';
$plans = require "plans.php";
$palnId = null;
// $plan = 'gold';
// $cycle = 'annual';
if ($plan=='gold' && $cycle=='monthly') {
    $palnId = $plans['gold_monthly'];
} elseif ($plan=='gold' && $cycle=='annual') {
    $palnId = $plans['gold_annual'];
} elseif ($plan=='gold_mail' && $cycle=='monthly') {
    $palnId = $plans['gold_mail_monthly'];
} elseif ($plan=='gold_mail' && $cycle=='annual') {
    $palnId = $plans['gold_mail_annual'];
}
$createdPlan = null;

use PayPal\Api\Plan;

if ($palnId) {
    try {
        $plan = Plan::get($palnId, $apiContext);
    } catch (Exception $ex) {
        // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
        // ResultPrinter::printError("Retrieved a Plan", "Plan", $plan->getId(), null, $ex);
        exit(1);
    }
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    // ResultPrinter::printResult("Retrieved a Plan", "Plan", $plan->getId(), null, $plan);
    return $plan;
}
return null;
