<?php

namespace DesignPattern\Factory\Ingredients;

abstract class Ingredients implements IngredientsInterface
{
    protected $name;

    public function getName(): string
    {
        return $this->name;
    }
}