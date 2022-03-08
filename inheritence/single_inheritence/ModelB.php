<?php

class ModelB extends IEloquentModel
{

    /*public function aMethod($string) //Fatal error: Final method can't be override.
    {
        echo __CLASS__.' '.__FUNCTION__.' '.$string.PHP_EOL;
    }*/

    public function bMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    public function cMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}