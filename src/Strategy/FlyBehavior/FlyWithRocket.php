<?php

namespace DesignPattern\Strategy\FlyBehavior;

class FlyWithRocket implements FlyBehavior
{

    public function fly()
    {
        echo "All ducks can fly with rocket\n";
    }
}