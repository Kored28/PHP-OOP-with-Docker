<?php

declare(strict_types=1);

use Class\DB;
use Class\PaymentGateway\Paddle\{Transaction};

require __DIR__ . '/..//vendor/autoload.php';

$transaction = new Transaction(25);

$transaction->process();
