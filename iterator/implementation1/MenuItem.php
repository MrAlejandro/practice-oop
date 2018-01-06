<?php

class MenuItem
{
    protected $name;
    protected $desc;
    protected $price;

    public function __construct(string $name, string $desc, float $price)
    {
        $this->name = $name;
        $this->desc = $desc;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->desc;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

