<?php


class ControllerB
{
    public $modalA;
    
    public function __construct()
    {
        $this->modalA = new ModalA(); //Composition
    }

    public function dMethod()
    {
        $this->modalA->bMethod();   //Power of composition
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
        //$this->modalA->aMethod(); //Can't access protected method without extend,
    }
}