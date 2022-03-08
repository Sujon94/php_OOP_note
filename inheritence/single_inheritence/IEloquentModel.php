<?php

class IEloquentModel
{
    final public function aMethod($string){
        echo __CLASS__.' '.__FUNCTION__.' '.$string.PHP_EOL;
    }

    public function bMethod(){
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }
}