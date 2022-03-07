<?php

include 'BaseInterface.php';
include 'AnotherInterface.php';
include 'AnotherAnotherInterface.php';

use extending_implementing\BaseInterface\BaseInterface;
use extending_implementing\AnotherInterface\AnotherInterface;
use extending_implementing\ExtendInterface\AnotherAnotherInterface;

class ClassB extends ClassA implements BaseInterface, AnotherInterface, AnotherAnotherInterface
{

    public function anotherAnotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function print_hello()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function classBmethod()
    {
        $this->method();
    }
}