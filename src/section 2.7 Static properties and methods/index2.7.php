<?php

declare(strict_types=1);

use Class\DB;
use Class\PaymentGateway\Paddle\{Transaction};

require __DIR__ . '/..//vendor/autoload.php';

$transaction = new Transaction(25, 'Transaction 1');


var_dump(Transaction::getCount());

$db = DB::getInstance([]);

