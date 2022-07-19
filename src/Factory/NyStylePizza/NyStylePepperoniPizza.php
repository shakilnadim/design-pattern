<?php

namespace DesignPattern\Factory\NyStylePizza;

class NyStylePepperoniPizza extends \DesignPattern\Factory\Pizza
{
    public function __construct()
    {
        $this->name = 'Ny Style Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'BBQ Sauce';
        $this->toppings = ['Grated Reggiano Cheese', 'Pepperoni'];
    }
}