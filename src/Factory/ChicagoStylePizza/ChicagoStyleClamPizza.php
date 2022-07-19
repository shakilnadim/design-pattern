<?php

namespace DesignPattern\Factory\ChicagoStylePizza;

class ChicagoStyleClamPizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Clam Pizza';
        $this->dough = 'Medium Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Clam', 'Mushroom'];
    }
}