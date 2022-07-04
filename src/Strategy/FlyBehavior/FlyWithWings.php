<?php

namespace DesignPattern\Strategy\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        echo "Duck is flying with wings\n";
    }
}