<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyWithTail;
use DesignPattern\Strategy\QuackBehavior\Squeak;

class WeirdDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyWithTail();
        $this->quackBehavior = new Squeak();
    }

    function display()
    {
        echo "Weird duck display\n";
    }
}