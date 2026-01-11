<?php

declare(strict_types=1);

require_once '../class/Transaction.php';
require_once '../class/Customer.php';
require_once '../class/PaymentProfile.php';

$transaction = new Transaction(5, 'Test');

echo $transaction->getCustomer()?->getPaymentProfile()?->id;


