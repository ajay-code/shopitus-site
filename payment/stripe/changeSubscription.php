<?php
session_start();
require_once "bootstrap.php";
$plan = $_POST['plan'];
$cycle = $_POST['cycle'];
$token = $_POST['stripeToken'];
$member_id = $_SESSION['member_id'];

$user = getUser($member_id);
$shouldExecute = true;
if (hasSubscription($user['id'])) {
    try {
        cancelSubscriptions($user);
    } catch (\Exception $e) {
        $shouldExecute = false;
    }
}
if ($shouldExecute) {
    $cus_id = StripeManager::getCustomerId($member_id);
    if ($cus_id) {
        StripeManager::updateMembership($member_id, $plan, $cycle, $token);
    } else {
        StripeManager::setMembership($member_id, $plan, $cycle, $token);
    }
}
