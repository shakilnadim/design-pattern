<?php

namespace DesignPattern\Strategy\FlyBehavior;

class FlyWithTail implements FlyBehavior
{

    public function fly()
    {
        echo "Duck is flying with tail\n";
    }
}