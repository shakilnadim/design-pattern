<?php

namespace DesignPattern\Decorator\Condiments;

use DesignPattern\Decorator\Beverage;

abstract class CondimentDecorator extends Beverage
{
    protected Beverage $beverage;
}