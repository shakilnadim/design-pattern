<?php

namespace DesignPattern\Strategy\FlyBehavior;

class FlyNoWay implements FlyBehavior
{

    public function fly()
    {
        echo "Duck can't fly\n";
    }
}