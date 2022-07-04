<?php

namespace DesignPattern\Strategy\QuackBehavior;

class Squeak implements QuackBehavior
{

    public function quack()
    {
        echo "Duck is squeaking\n";
    }
}