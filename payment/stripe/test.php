<?php

use Stripe\Subscription;

require_once "bootstrap.php";

$event = \Stripe\Event::retrieve("evt_1CIvX3FR0IGk2r2FwkJn0XNc");
$subscription = $event->data->object->lines->data[0];
$stripe_subscription_id = $subscription->id;
$start = Carbon\Carbon::createFromTimestamp($subscription->period->start);
$end = Carbon\Carbon::createFromTimestamp($subscription->period->end);
StripeManager::updateSubscriptionDates($stripe_subscription_id, $start, $end);
