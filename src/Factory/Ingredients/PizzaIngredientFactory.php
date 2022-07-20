<?php

namespace DesignPattern\Factory\Ingredients;

use DesignPattern\Factory\Ingredients\Cheese\Cheese;
use DesignPattern\Factory\Ingredients\Clam\Clam;
use DesignPattern\Factory\Ingredients\Dough\Dough;
use DesignPattern\Factory\Ingredients\Pepperoni\Pepperoni;
use DesignPattern\Factory\Ingredients\Sauce\Sauce;

interface PizzaIngredientFactory
{
    public function createDough(): Dough;
    public function createSauce(): Sauce;
    public function createCheese(): Cheese;
    public function createVeggies(): array;
    public function createPepperoni(): Pepperoni;
    public function createClam(): Clam;
}