<?php
require_once "vendor/autoload.php";

use Omnipay\Omnipay;

define('CLIENT_ID', 'PAYPAL_CLIENT_ID_HERE');
define('CLIENT_SECRET', 'PAYPAL_CLIENT_SECRET_HERE');

define('PAYPAL_RETURN_URL', 'YOUR_SITE_URL/success.php');
define('PAYPAL_CANCEL_URL', 'YOUR_SITE_URL/cancel.php');
define('PAYPAL_CURRENCY', 'USD'); // set your currency here

// Connect with the database
$db = new mysqli('localhost', 'MYSQL_DB_USERNAME', 'MYSQL_DB_PASSWORD', 'MYSQL_DB_NAME');

if ($db->connect_errno) {
    die("Connect failed: " . $db->connect_error);
}

$gateway = Omnipay::create('PayPal_Rest');
$gateway->setClientId(CLIENT_ID);
$gateway->setSecret(CLIENT_SECRET);
$gateway->setTestMode(true); //set it to 'false' when go live
