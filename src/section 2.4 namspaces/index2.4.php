<?php

declare(strict_types=1);

require_once '../class/PaymentGateway/Paddle/Transaction.php';
require_once '../class/PaymentGateway/Paddle/CustomerProfile.php';
require_once '../class/PaymentGateway/Stripe/Transaction.php';
require_once '../class/Notification/Email.php';

use PaymentGateway\Paddle\{Transaction, CustomerProfile};
use PaymentGateway\Stripe\Transaction as StripeTransaction;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransaction();

var_dump($paddleTransaction, $stripeTransaction);


