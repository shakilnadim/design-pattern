<?php

namespace DesignPattern\Factory\PizzaStore;

use DesignPattern\Factory\NyStylePizza\NyStyleCheesePizza;
use DesignPattern\Factory\NyStylePizza\NyStyleClamPizza;
use DesignPattern\Factory\NyStylePizza\NyStylePepperoniPizza;
use DesignPattern\Factory\NyStylePizza\NyStyleVeggiePizza;
use DesignPattern\Factory\Pizza;

class NyPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza|null
    {
        if ($type === 'cheese') {
            return new NyStyleCheesePizza();
        } elseif ($type === 'pepperoni') {
            return new NyStylePepperoniPizza();
        } elseif ($type === 'clam') {
            return new NyStyleClamPizza();
        } elseif ($type === 'veggie') {
            return new NyStyleVeggiePizza();
        }
        return null;
    }
}