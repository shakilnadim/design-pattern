<?php

namespace DesignPattern\Factory\Pizzas;

use DesignPattern\Factory\Ingredients\PizzaIngredientFactory;

class PepperoniPizza extends Pizza
{
    public function __construct(private PizzaIngredientFactory $ingredientFactory)
    {
    }

    function prepare(): void
    {
        echo "Preparing {$this->name}\n";
        $this->dough = $this->ingredientFactory->createDough();
        echo "{$this->dough->getName()} added\n";
        $this->sauce = $this->ingredientFactory->createSauce();
        echo "{$this->sauce->getName()} added\n";
        $this->cheese = $this->ingredientFactory->createCheese();
        echo "{$this->cheese->getName()} added\n";
        $this->pepperoni = $this->ingredientFactory->createPepperoni();
        echo "{$this->pepperoni->getName()} added\n";
    }
}