<?php

namespace DesignPattern\Factory\Ingredients\Pepperoni;

use DesignPattern\Factory\Ingredients\Ingredients;

class SlicedPepperoni extends Ingredients implements Pepperoni
{
    public function __construct()
    {
        $this->name = 'Sliced Pepperoni';
    }
}