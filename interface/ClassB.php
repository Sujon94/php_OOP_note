<?php


class ClassB implements BaseInterface
{

    public function execute()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}