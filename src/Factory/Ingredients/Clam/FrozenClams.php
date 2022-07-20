<?php

namespace DesignPattern\Factory\Ingredients\Clam;

use DesignPattern\Factory\Ingredients\Ingredients;

class FrozenClams extends Ingredients implements Clam
{
    public function __construct()
    {
        $this->name = 'Frozen Clams';
    }
}