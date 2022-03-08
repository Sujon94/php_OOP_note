<?php


class ModalA extends CEloquentModel
{
    public function bMethod()
    {
        $this->aMethod();
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

    protected function cMethod()
    {
        echo __CLASS__.' '.__FUNCTION__.PHP_EOL;
    }

}