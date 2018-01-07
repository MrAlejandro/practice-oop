<?php

class MenuItem extends MenuComponent
{
    protected $name;
    protected $desc;
    protected $price;
    protected $vegetarian;

    public function __construct(string $name, string $desc, float $price, bool $vegetarian)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
        $this->vegetarian = $vegetarian;
    }

    public function isVegetarian() : bool
    {
        return $this->vegetarian;
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->desc;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function print()
    {
        echo $this->getName() . ': ';
        echo $this->getDescription() . ', ';
        echo (string) $this->getPrice() . PHP_EOL;
    }
}