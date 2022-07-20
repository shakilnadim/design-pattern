<?php

namespace DesignPattern\Factory\Ingredients\Clam;

use DesignPattern\Factory\Ingredients\Ingredients;

class FreshClams extends Ingredients implements Clam
{
    public function __construct()
    {
        $this->name = 'Fresh Clams';
    }
}