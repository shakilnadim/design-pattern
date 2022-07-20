<?php

namespace DesignPattern\Factory\Ingredients\Veggies;

use DesignPattern\Factory\Ingredients\Ingredients;

class RedPepper extends Ingredients implements Veggies
{
    public function __construct()
    {
        $this->name = 'Red Pepper';
    }
}