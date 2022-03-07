<?php
use multiple_inheritance\ExtendInterface\ExtendInterface;

class ClassB implements ExtendInterface
{

    public function anotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherAnotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function print_hello()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}