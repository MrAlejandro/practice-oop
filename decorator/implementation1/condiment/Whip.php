<?php

class Whip extends CondimenDecorator
{
    public function getDescription()
    {
        return $this->beverage->getDescription() . ', Whip';
    }

    public function cost()
    {
        return $this->beverage->cost() + 0.1;
    }
}
