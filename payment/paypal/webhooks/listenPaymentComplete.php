<?php
use \PayPal\Api\VerifyWebhookSignature;
use \PayPal\Api\WebhookEvent;

$apiContext = require __DIR__ . '/../bootstrap.php';



// # Validate Webhook
// PHP Currently does not support certificate chain validation, that is necessary to validate webhook directly, from received data
// To resolve that, we need to use alternative, which makes a call to PayPal's verify-webhook-signature API.
/**
 * This is one way to receive the entire body that you received from PayPal webhook. This is one of the way to retrieve that information.
 * Just uncomment the below line to read the data from actual request.
 */
/** @var String $requestBody */
$requestBody = '{"id":"WH-9UG43882HX7271132-6E0871324L7949614","event_version":"1.0","create_time":"2016-09-21T22:00:45Z","resource_type":"sale","event_type":"PAYMENT.SALE.COMPLETED","summary":"Payment completed for $ 21.0 USD","resource":{"id":"80F85758S3080410K","state":"completed","amount":{"total":"21.00","currency":"USD","details":{"subtotal":"17.50","tax":"1.30","shipping":"2.20"}},"payment_mode":"INSTANT_TRANSFER","protection_eligibility":"ELIGIBLE","protection_eligibility_type":"ITEM_NOT_RECEIVED_ELIGIBLE,UNAUTHORIZED_PAYMENT_ELIGIBLE","transaction_fee":{"value":"0.91","currency":"USD"},"invoice_number":"57e3028db8d1b","custom":"","parent_payment":"PAY-7F371669SL612941HK7RQFDQ","create_time":"2016-09-21T21:59:02Z","update_time":"2016-09-21T22:00:06Z","links":[{"href":"https://api.sandbox.paypal.com/v1/payments/sale/80F85758S3080410K","rel":"self","method":"GET"},{"href":"https://api.sandbox.paypal.com/v1/payments/sale/80F85758S3080410K/refund","rel":"refund","method":"POST"},{"href":"https://api.sandbox.paypal.com/v1/payments/payment/PAY-7F371669SL612941HK7RQFDQ","rel":"parent_payment","method":"GET"}]},"links":[{"href":"https://api.sandbox.paypal.com/v1/notifications/webhooks-events/WH-9UG43882HX7271132-6E0871324L7949614","rel":"self","method":"GET"},{"href":"https://api.sandbox.paypal.com/v1/notifications/webhooks-events/WH-9UG43882HX7271132-6E0871324L7949614/resend","rel":"resend","method":"POST"}]}';
/**
* Receive the entire body that you received from PayPal webhook.
* Just uncomment the below line to read the data from actual request.
*/
/** @var String $bodyReceived */
$bodyReceived = file_get_contents('php://input');
$requestBody = $bodyReceived;


/**
* Receive HTTP headers that you received from PayPal webhook.
* Just uncomment the below line to read the data from actual request.
*/
/** @var Array $headers */
$headers = getallheaders();

/**
* In Documentions https://developer.paypal.com/docs/api/webhooks/#verify-webhook-signature_post
* All header keys as UPPERCASE, but I recive the header key as the example array, First letter as UPPERCASE
*/
$headers = array_change_key_case($headers, CASE_UPPER);

$signatureVerification = new VerifyWebhookSignature();
$signatureVerification->setAuthAlgo($headers['PAYPAL-AUTH-ALGO']);
$signatureVerification->setTransmissionId($headers['PAYPAL-TRANSMISSION-ID']);
$signatureVerification->setCertUrl($headers['PAYPAL-CERT-URL']);
$signatureVerification->setWebhookId("9XL90610J3647323C"); // Note that the Webhook ID must be a currently valid Webhook that you created with your client ID/secret.
$signatureVerification->setTransmissionSig($headers['PAYPAL-TRANSMISSION-SIG']);
$signatureVerification->setTransmissionTime($headers['PAYPAL-TRANSMISSION-TIME']);

$signatureVerification->setRequestBody($requestBody);
$request = clone $signatureVerification;

try {
    /** @var \PayPal\Api\VerifyWebhookSignatureResponse $output */
    $output = $signatureVerification->post($apiContext);
} catch (Exception $ex) {
    // NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
    ResultPrinter::printError("Validate Received Webhook Event", "WebhookEvent", null, $request->toJSON(), $ex);
    file_put_contents('complete.log', $request->toJSON(), FILE_APPEND);
    exit(1);
}

// NOTE: PLEASE DO NOT USE RESULTPRINTER CLASS IN YOUR ORIGINAL CODE. FOR SAMPLE ONLY
ResultPrinter::printResult("Validate Received Webhook Event", "WebhookEvent", $output->getVerificationStatus(), $request->toJSON(), $output);
//Something to write to txt log
$json = $request->toJSON();
$data = json_decode($json, true);
$agreementId = $data['webhook_event']['resource']['billing_agreement_id'];
setStartAndEndDatesOfSubscription($agreementId, $apiContext);
$log  = $json.PHP_EOL.
        "-------------------------".PHP_EOL;
//Save string to log, use FILE_APPEND to append.
file_put_contents('complete.log', $log, FILE_APPEND);
