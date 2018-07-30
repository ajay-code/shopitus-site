<?php
require_once __DIR__."/../../../config.php";
require_once __DIR__."/../bootstrap.php";

// Set your secret key: remember to change this to your live secret key in production
// See your keys here: https://dashboard.stripe.com/account/apikeys

// You can find your endpoint's secret in your webhook settings
$endpoint_secret = 'whsec_DyLJfrfvSXwuCVrVHFyunIbBY61g8LaP';

$payload = @file_get_contents('php://input');
$sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
$event = null;

try {
    $event = \Stripe\Webhook::constructEvent(
      $payload,
      $sig_header,
      $endpoint_secret
  );
} catch (\UnexpectedValueException $e) {
    // Invalid payload
  http_response_code(400); // PHP 5.4 or greater
  exit();
} catch (\Stripe\Error\SignatureVerification $e) {
    // Invalid signature
  http_response_code(400); // PHP 5.4 or greater
  exit();
}

$subscription = $event->data->object->lines->data[0];
$stripe_subscription_id = $subscription->id;
$start = Carbon\Carbon::createFromTimestamp($subscription->period->start);
$end = Carbon\Carbon::createFromTimestamp($subscription->period->end);
StripeManager::updateSubscriptionDates($stripe_subscription_id, $start, $end);
