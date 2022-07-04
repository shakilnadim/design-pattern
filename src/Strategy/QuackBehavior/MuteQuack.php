<?php

namespace DesignPattern\Strategy\QuackBehavior;

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo "Duck is mute\n";
    }
}