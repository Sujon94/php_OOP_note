<?php
include '../../autoload.php';
//NOTE: PHP only support single inheritance
$a = new CEloquentModel();
$b = new ModelB();
$c = new ModelC();

$a->aMethod('PHP');
$a->bMethod();
echo '-+-+-+-+-+-+-+-+-+-'.PHP_EOL;
$b->aMethod('OOP PHP');
$b->bMethod();
$b->cMethod();
