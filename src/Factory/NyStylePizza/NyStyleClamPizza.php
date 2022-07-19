<?php

namespace DesignPattern\Factory\NyStylePizza;

class NyStyleClamPizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Ny Style Clam Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Clam'];
    }
}