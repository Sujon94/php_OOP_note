<?php


class ClassC
{
    public $base;
    public function __construct(BaseInterface $base)
    {
        $this->base = $base;
    }

    public function callerMethod()
    {
        $this->base->execute();
    }
}