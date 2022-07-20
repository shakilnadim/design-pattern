<?php

namespace DesignPattern\Factory\Ingredients\Dough;

use DesignPattern\Factory\Ingredients\Ingredients;

class ThickCrustDough extends Ingredients implements Dough
{
    public function __construct()
    {
        $this->name = 'Thick Crust Dough';
    }
}