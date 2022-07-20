<?php

namespace DesignPattern\Factory\Ingredients\Sauce;

use DesignPattern\Factory\Ingredients\Ingredients;

class MarinaraSauce extends Ingredients implements Sauce
{
    public function __construct()
    {
        $this->name = 'Marinara Sauce';
    }
}