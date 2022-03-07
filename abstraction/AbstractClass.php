<?php


abstract class AbstractClass
{
    public $p1;
    public $p2;

    protected function optionalMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    abstract protected function mustDefine() : string ;

    public function anotherOptionalMethod(){
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}