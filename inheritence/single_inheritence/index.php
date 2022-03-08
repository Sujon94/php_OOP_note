<?php
include '../../autoload.php';

$a = new IEloquentModel();
$b = new ModelB();
$c = new ModelC();

$a->aMethod('PHP');
$a->bMethod();
echo '-+-+-+-+-+-+-+-+-+-'.PHP_EOL;
$b->aMethod('OOP PHP');
$b->bMethod();
$b->cMethod();
echo '-+-+-+-+-+-+-+-+-+-'.PHP_EOL;
$c->aMethod('OOP Advance PHP');
$c->bMethod();
$c->cMethod();
echo '-+-+-+-+-+-+-+-+-+-'.PHP_EOL;
$c->dMethod();
$c->eMethod();
