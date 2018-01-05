<?php

class Soy extends CondimentDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Soy';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.25;
    }
}
