<?php

namespace DesignPattern\Factory\Ingredients\Cheese;

use DesignPattern\Factory\Ingredients\Ingredients;

class ReggianoCheese extends Ingredients implements Cheese
{
    public function __construct()
    {
        $this->name = 'Reggiano Cheese';
    }
}