<?php

namespace DesignPattern\Factory\Ingredients\Veggies;

use DesignPattern\Factory\Ingredients\Ingredients;

class Onion extends Ingredients implements Veggies
{
    public function __construct()
    {
        $this->name = 'Onion';
    }
}