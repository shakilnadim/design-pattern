<?php

namespace DesignPattern\Strategy\QuackBehavior;

class Quack implements QuackBehavior
{

    public function quack()
    {
        echo "Duck is quacking\n";
    }
}