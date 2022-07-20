<?php

namespace DesignPattern\Factory\Ingredients\Sauce;

use DesignPattern\Factory\Ingredients\Ingredients;

class PlumTomatoSauce extends Ingredients implements Sauce
{
    public function __construct()
    {
        $this->name = 'Plum Tomato Sauce';
    }
}