<?php

namespace DesignPattern\Factory;

abstract class Pizza
{
    protected String $name;
    protected String $dough;
    protected String $sauce;
    protected array $toppings = [];

    public function prepare(): void
    {
        echo "Preparing {$this->name}\nTossing {$this->dough}...\nAdding {$this->sauce}...\nAdding Toppings:\n";
        foreach ($this->toppings as $topping) {
            echo " {$topping}";
        }
        echo "\n";
    }

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

    public function getName(): string
    {
        return $this->name;
    }
}