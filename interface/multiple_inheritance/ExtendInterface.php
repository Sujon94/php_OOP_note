<?php

namespace multiple_inheritance\ExtendInterface;
include 'BaseInterface.php';
include 'AnotherInterface.php';

use multiple_inheritance\AnotherInterface\AnotherInterface ;
use multiple_interface\BaseInterface\BaseInterface;

interface ExtendInterface extends BaseInterface, AnotherInterface
{
    public function anotherAnotherMethod();
}