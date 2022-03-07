<?php


class ClassA implements ExtendInterface
{
    public function execute()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function anotherMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}