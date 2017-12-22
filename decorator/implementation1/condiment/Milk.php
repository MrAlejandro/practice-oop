<?php

class Milk extends CondimenDecorator
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