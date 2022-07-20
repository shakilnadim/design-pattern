<?php

namespace DesignPattern\Factory\Pizzas;

use DesignPattern\Factory\Ingredients\Cheese\Cheese;
use DesignPattern\Factory\Ingredients\Clam\Clam;
use DesignPattern\Factory\Ingredients\Dough\Dough;
use DesignPattern\Factory\Ingredients\Pepperoni\Pepperoni;
use DesignPattern\Factory\Ingredients\Sauce\Sauce;

abstract class Pizza
{
    protected String $name;
    protected Dough $dough;
    protected Sauce $sauce;
    protected array $veggies = [];
    protected Cheese $cheese;
    protected Clam $clam;
    protected Pepperoni $pepperoni;

    abstract function prepare(): void;

    public function bake(): void
    {
        echo "Baking for 25 minutes at 350\n";
    }

    public function cut(): void
    {
        echo "Cutting the pizza into diagonal slices\n";
    }

    public function box(): void
    {
        echo "Place pizza in official PizzaStore box\n";
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}