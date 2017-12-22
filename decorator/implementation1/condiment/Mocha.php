<?php

class Mocha extends CondimenDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Mocha';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.2;
    }
}
