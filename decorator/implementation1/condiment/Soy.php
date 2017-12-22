<?php

class Soy extends CondimenDecorator
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
