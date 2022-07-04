<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyWithWings;
use DesignPattern\Strategy\QuackBehavior\Quack;

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    function display()
    {
        echo "Redhead duck display\n";
    }
}