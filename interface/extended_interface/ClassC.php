<?php


class ClassC
{
    public $base;
    public function __construct(ExtendInterface $base)
    {
        $this->base = $base;
    }

    public function callerMethod()
    {
        $this->base->execute();
        $this->base->anotherMethod();
    }
}