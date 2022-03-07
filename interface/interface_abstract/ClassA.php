<?php
use interface_abstract\AbstractClass\AbstractClass;
include 'AbstractClass.php';

class ClassA extends AbstractClass
{
    public function anotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherAnotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function refresh()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}