<?php

namespace DesignPattern\Decorator\Condiments;

use DesignPattern\Decorator\Beverage;

class Whip extends CondimentDecorator
{
    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ', whip';
    }

    public function cost(): float
    {
        return $this->beverage->cost() + .10;
    }
}