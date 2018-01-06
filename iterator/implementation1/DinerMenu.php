<?php

class DinerMenu implements Menu
{
    protected $items = [];

    public function __construct()
    {
        $this->addItem('Dish1', 'Dish1 description', 3.33);
        $this->addItem('Dish2', 'Dish2 description', 2.33);
        $this->addItem('Dish3', 'Dish3 description', 1.33);
        $this->addItem('Dish4', 'Dish4 description', 0.33);
    }

    public function createIterator() : CustomIterator
    {
        return new DinerMenuIterator($this->items);
    }

    public function addItem(string $name, string $desc, float $price)
    {
        $this->items[] = new MenuItem($name, $desc, $price);
    }
}