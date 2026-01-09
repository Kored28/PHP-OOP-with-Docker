<?php

declare(strict_types=1);

require_once '../class/Transaction.php';
require_once '../class/Student.php';

$transaction = (new Transaction(100, 'Transaction 1'))
    ->addTax(8)
    ->applyDiscount(8)
    ->getAmount();

var_dump($transaction);


$student1 = new Student('John', 20, 'English');

$student2 = new Student('Mike', 21, 'Maths');

echo $student1->introduce() . '<br/>'; 
echo $student2->introduce() . '<br/>'; 

$student1->changeCourse('Web Development');

echo $student1->introduce(); 
echo $student1->isAdult() ? 'This is an Adult' : 'Not yet an Adult'; 
; 

