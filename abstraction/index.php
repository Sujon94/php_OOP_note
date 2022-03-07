<?php
include '../autoload.php';

$objA = new ClassA();

$objA->optionalMethod();
$objA->mustDefine();

//$absObj = new AbstractClass(); //Not allowed.