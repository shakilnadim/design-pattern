<?php

namespace DesignPattern\Factory;

use DesignPattern\Factory\PizzaStore\ChicagoPizzaStore;
use DesignPattern\Factory\PizzaStore\NyPizzaStore;

class Main
{
    public function main()
    {
        $nyStore = new NyPizzaStore();
        $chicagoStore = new ChicagoPizzaStore();

        $pizza = $nyStore->orderPizza('cheese');
        echo "Ethan ordered a {$pizza->getName()}\n";

        $pizza = $chicagoStore->orderPizza('pepperoni');
        echo "Joel ordered a {$pizza->getName()}\n";
    }
}