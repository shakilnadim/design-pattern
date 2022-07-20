<?php

namespace DesignPattern\Factory\Ingredients\Dough;

use DesignPattern\Factory\Ingredients\Ingredients;

class ThinCrustDough extends Ingredients implements Dough
{
    public function __construct()
    {
        $this->name = 'Thin Crust Dough';
    }
}