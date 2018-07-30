<?php
// Url =>  /payment/stripe/plans/plans_json.php
$plans = require('plans.php');
echo json_encode($plans);
