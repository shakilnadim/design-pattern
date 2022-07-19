<?php

namespace DesignPattern\Factory\ChicagoStylePizza;

class ChicagoStyleVeggiePizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Veggie Pizza';
        $this->dough = 'Medium Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Veggies'];
    }
}