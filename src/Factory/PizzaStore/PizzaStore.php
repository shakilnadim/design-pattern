<?php

namespace DesignPattern\Factory\PizzaStore;

use DesignPattern\Factory\Pizzas\Pizza;

abstract class PizzaStore
{
    public function orderPizza(string $type): Pizza
    {
        $pizza = $this->createPizza($type);
        $pizza->prepare();
        $pizza->bake();
        $pizza->cut();
        $pizza->box();

        return $pizza;
    }

    abstract function createPizza(string $type): Pizza|null;

}