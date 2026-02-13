<?php

declare(strict_types=1);

use Class\Enums\Status;
use Class\PaymentGateway\Paddle\{Transaction};

require __DIR__ . '/..//vendor/autoload.php';

$transaction = new Transaction();

$transaction->setStatus(Status::PAID);

var_dump($transaction);

