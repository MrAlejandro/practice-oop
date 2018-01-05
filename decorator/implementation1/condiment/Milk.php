<?php

class Milk extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Milk';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.3;
    }
}