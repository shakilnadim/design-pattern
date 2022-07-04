<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyNoWay;
use DesignPattern\Strategy\QuackBehavior\MuteQuack;

class DecoyDuck extends Duck
{
    public function __construct()
    {
        $this->flyBehavior = new FlyNoWay();
        $this->quackBehavior = new MuteQuack();
    }

    public function display()
    {
        echo "Decoy duck display\n";
    }
}