<?php


class ModelC extends ModelB
{
    public function bMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
        //parent::bMethod();  //Can call parent method
    }

    public function dMethod(){
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function eMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}