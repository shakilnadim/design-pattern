<?php

namespace DesignPattern\Factory\PizzaStore;


use DesignPattern\Factory\Ingredients\ChicagoPizzaIngredientFactory;
use DesignPattern\Factory\Pizzas\CheesePizza;
use DesignPattern\Factory\Pizzas\ClamPizza;
use DesignPattern\Factory\Pizzas\PepperoniPizza;
use DesignPattern\Factory\Pizzas\Pizza;
use DesignPattern\Factory\Pizzas\VeggiePizza;

class ChicagoPizzaStore extends PizzaStore
{

    public function createPizza(string $type): Pizza|null
    {
        $pizza = null;
        $ingredientFactory = new ChicagoPizzaIngredientFactory();
        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientFactory);
            $pizza->setName('Chicago Style Cheese Pizza');
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza($ingredientFactory);
            $pizza->setName('Chicago Style Pepperoni Pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientFactory);
            $pizza->setName('Chicago Style Clam Pizza');
        } elseif ($type === 'veggie') {
            $pizza = new VeggiePizza($ingredientFactory);
            $pizza->setName('Chicago Style Veggie Pizza');
        }
        return $pizza;
    }
}