<?php

namespace DesignPattern\Factory\NyStylePizza;

class NyStyleCheesePizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Ny Style Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Grated Reggiano Cheese'];
    }
}