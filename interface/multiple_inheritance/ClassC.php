<?php
include 'ExtendInterface.php';
use multiple_inheritance\ExtendInterface\ExtendInterface;


class ClassC
{
    public $base;
    public function __construct(ExtendInterface $base)
    {
        $this->base = $base;
    }

    public function callerMethod()
    {
        $this->base->print_hello();
        $this->base->anotherMethod();
        $this->base->anotherAnotherMethod();
    }
}