<?php

namespace DesignPattern\Decorator\Condiments;

use DesignPattern\Decorator\Beverage;

class Soy extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', soy';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .15;
    }
}