<?php

use Stripe\Customer;

require_once "bootstrap.php";
$stripPlans = require("plans/plans.php");
$customer = Customer::create([
  'source'   => 'tok_visa',
  'email'    => 'ajay10mar96@gmail.com',
  'plan'     => $stripPlans['gold_monthly']['id'],
  'account_balance' => $stripPlans['gold_monthly']['setup_fee'],
  'description' => "Charge with one time setup fee"
]);
