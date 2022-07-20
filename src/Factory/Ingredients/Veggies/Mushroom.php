<?php

namespace DesignPattern\Factory\Ingredients\Veggies;

use DesignPattern\Factory\Ingredients\Ingredients;

class Mushroom extends Ingredients implements Veggies
{
    public function __construct()
    {
        $this->name = 'Mushroom';
    }
}