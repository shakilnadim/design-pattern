<?php

namespace DesignPattern\Strategy;

use DesignPattern\Strategy\FlyBehavior\FlyWithRocket;

class Main
{
    public function main(Duck $duck)
    {
        $duck->swim();
        $duck->performQuack();
        $duck->performFly();
        $duck->setFlyBehavior(new FlyWithRocket());
        $duck->performFly();
        $duck->display();
    }
}