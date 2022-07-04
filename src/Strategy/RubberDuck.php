<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyNoWay;
use DesignPattern\Strategy\QuackBehavior\Squeak;

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Squeak();
        $this->flyBehavior = new FlyNoWay();
    }

    function display()
    {
        echo "Rubber duck display\n";
    }
}