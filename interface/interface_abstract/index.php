<?php
include '../../autoload.php';
$objA = new ClassA();
$objA->print_hello();
$objA->anotherMethod();
$objA->anotherAnotherMethod();
$objA->refresh();

echo "-+-+-+-+-+-+-+-+-+-+-+-+".PHP_EOL;