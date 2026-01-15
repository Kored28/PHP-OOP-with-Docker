<?php

declare(strict_types=1);

// Using php autoload 
// spl_autoload_register(function($class){
//     $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $class)) . '.php';

//     require $path;
// });

// Composer autoloader

require __DIR__ . '/..//vendor/autoload.php';

use Class\PaymentGateway\Paddle\{Transaction};
use Ramsey\Uuid\UuidFactory;

$paddleTransaction = new Transaction();

$id = new UuidFactory();

echo $id->uuid4() . '<br/>';

var_dump($paddleTransaction);
