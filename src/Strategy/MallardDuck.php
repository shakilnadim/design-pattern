<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyWithWings;
use DesignPattern\Strategy\QuackBehavior\Quack;

class MallardDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    function display()
    {
        echo "Mallard duck display\n";
    }
}