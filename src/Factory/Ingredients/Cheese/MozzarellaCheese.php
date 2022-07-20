<?php

namespace DesignPattern\Factory\Ingredients\Cheese;

use DesignPattern\Factory\Ingredients\Ingredients;

class MozzarellaCheese extends Ingredients implements Cheese
{
    public function __construct()
    {
        $this->name = 'Mozzarella Cheese';
    }
}