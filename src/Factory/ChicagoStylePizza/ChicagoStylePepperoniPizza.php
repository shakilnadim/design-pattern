<?php

namespace DesignPattern\Factory\ChicagoStylePizza;

class ChicagoStylePepperoniPizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago Style Pepperoni Pizza';
        $this->dough = 'Medium Crust Dough';
        $this->sauce = 'Plum Tomato Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Pepperoni', 'Sausage'];
    }
}