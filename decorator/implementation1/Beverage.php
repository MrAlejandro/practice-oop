<?php

abstract class Beverage
{
    protected $description;

    abstract public function cost();

    public function getDescription()
    {
        return $this->description;
    }
}
