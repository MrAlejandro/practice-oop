<?php

class PancakeHouseMenu implements Menu
{
    public $items;

    public function __construct()
    {
        $this->items = new SplObjectStorage();
        $this->addItem('Pancake1', 'Pancake1 description', 3.33);
        $this->addItem('Pancake2', 'Pancake2 description', 2.33);
        $this->addItem('Pancake3', 'Pancake3 description', 1.33);
        $this->addItem('Pancake4', 'Pancake4 description', 0.33);
    }

    public function createIterator() : CustomIterator
    {
        return new PancakeHouseMenuIterator($this->items);
    }

    public function addItem(string $name, string $desc, float $price)
    {
        $this->items->attach(new MenuItem($name, $desc, $price));
    }
}