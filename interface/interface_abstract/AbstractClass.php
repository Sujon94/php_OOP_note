<?php

namespace interface_abstract\AbstractClass;
include 'BaseInterface.php';

use multiple_interface\BaseInterface\BaseInterface;

abstract class AbstractClass implements BaseInterface
{
    abstract public function anotherAnotherMethod();

    public function print_hello()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}