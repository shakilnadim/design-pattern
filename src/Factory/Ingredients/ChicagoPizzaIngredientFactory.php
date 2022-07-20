<?php

namespace DesignPattern\Factory\Ingredients;

use DesignPattern\Factory\Ingredients\Cheese\Cheese;
use DesignPattern\Factory\Ingredients\Cheese\MozzarellaCheese;
use DesignPattern\Factory\Ingredients\Clam\Clam;
use DesignPattern\Factory\Ingredients\Clam\FrozenClams;
use DesignPattern\Factory\Ingredients\Dough\Dough;
use DesignPattern\Factory\Ingredients\Dough\ThickCrustDough;
use DesignPattern\Factory\Ingredients\Pepperoni\Pepperoni;
use DesignPattern\Factory\Ingredients\Pepperoni\SlicedPepperoni;
use DesignPattern\Factory\Ingredients\Sauce\PlumTomatoSauce;
use DesignPattern\Factory\Ingredients\Sauce\Sauce;
use DesignPattern\Factory\Ingredients\Veggies\BlackOlives;
use DesignPattern\Factory\Ingredients\Veggies\Mushroom;
use DesignPattern\Factory\Ingredients\Veggies\Onion;

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{

    public function createDough(): Dough
    {
        return new ThickCrustDough();
    }

    public function createSauce(): Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese(): Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies(): array
    {
        return [
            new BlackOlives(),
            new Onion(),
            new Mushroom()
        ];
    }

    public function createPepperoni(): Pepperoni
    {
        return new SlicedPepperoni();
    }

    public function createClam(): Clam
    {
        return new FrozenClams();
    }
}