<?php

namespace DesignPattern\Factory\Ingredients;

use DesignPattern\Factory\Ingredients\Cheese\Cheese;
use DesignPattern\Factory\Ingredients\Cheese\ReggianoCheese;
use DesignPattern\Factory\Ingredients\Clam\Clam;
use DesignPattern\Factory\Ingredients\Clam\FreshClams;
use DesignPattern\Factory\Ingredients\Dough\Dough;
use DesignPattern\Factory\Ingredients\Dough\ThinCrustDough;
use DesignPattern\Factory\Ingredients\Pepperoni\Pepperoni;
use DesignPattern\Factory\Ingredients\Pepperoni\SlicedPepperoni;
use DesignPattern\Factory\Ingredients\Sauce\MarinaraSauce;
use DesignPattern\Factory\Ingredients\Sauce\Sauce;
use DesignPattern\Factory\Ingredients\Veggies\Garlic;
use DesignPattern\Factory\Ingredients\Veggies\Mushroom;
use DesignPattern\Factory\Ingredients\Veggies\Onion;
use DesignPattern\Factory\Ingredients\Veggies\RedPepper;

class NyPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThinCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese(): Cheese
    {
        return new ReggianoCheese();
    }

    public function createVeggies(): array
    {
        return [
            new Garlic(),
            new Onion(),
            new Mushroom(),
            new RedPepper()
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FreshClams();
    }
}