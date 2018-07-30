<?php

use Stripe\Stripe;

require_once __DIR__."/../../config.php";
require_once "StripeManager.php";
// define('STRIPE_SECRET_KEY', 'sk_test_fTyppE7SHpOtzadU5kAgSY5Y');
// define('STRIPE_PUBLISHABLE_KEY', 'pk_test_cOdDGI2yhkUHPCXkdLEh2Cff');

$stripe = [
  "secret_key"      => STRIPE_SECRET_KEY,
  "publishable_key" => STRIPE_PUBLISHABLE_KEY
];

Stripe::setApiKey($stripe['secret_key']);
