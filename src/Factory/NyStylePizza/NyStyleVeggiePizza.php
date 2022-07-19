<?php

namespace DesignPattern\Factory\NyStylePizza;

class NyStyleVeggiePizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Ny Style Veggie Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Veggies', 'Mushroom'];
    }
}