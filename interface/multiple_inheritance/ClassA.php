<?php
use multiple_inheritance\ExtendInterface\ExtendInterface;

class ClassA implements ExtendInterface
{
    public function print_hello()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherAnotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}