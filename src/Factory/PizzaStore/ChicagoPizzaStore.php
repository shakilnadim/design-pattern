<?php

namespace DesignPattern\Factory\PizzaStore;

use DesignPattern\Factory\ChicagoStylePizza\ChicagoStyleCheesePizza;
use DesignPattern\Factory\ChicagoStylePizza\ChicagoStyleClamPizza;
use DesignPattern\Factory\ChicagoStylePizza\ChicagoStylePepperoniPizza;
use DesignPattern\Factory\ChicagoStylePizza\ChicagoStyleVeggiePizza;
use DesignPattern\Factory\Pizza;
use JetBrains\PhpStorm\Pure;

class ChicagoPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza|null
    {
        if ($type === 'cheese') {
            return new ChicagoStyleCheesePizza();
        } elseif ($type === 'pepperoni') {
            return new ChicagoStylePepperoniPizza();
        } elseif ($type === 'clam') {
            return new ChicagoStyleClamPizza();
        } elseif ($type === 'veggie') {
            return new ChicagoStyleVeggiePizza();
        }
        return null;
    }
}