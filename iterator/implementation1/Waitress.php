<?php

class Waitress
{
    protected $pancake;
    protected $diner;

    public function __construct(Menu $pancake, Menu $diner)
    {
        $this->diner = $diner;
        $this->pancake = $pancake;
    }

    public function printMenu()
    {
        $pancakeIterator = $this->pancake->createIterator();
        $dinerIterator = $this->diner->createIterator();

        echo 'Menu BREAKFAST:' . PHP_EOL;
        $this->iterate($pancakeIterator);
        echo 'Menu DINNER:' . PHP_EOL;
        $this->iterate($dinerIterator);
    }

    public function iterate(CustomIterator $pancakeIterator)
    {
        while ($pancakeIterator->hasNext()) {
            /** @var \MenuItem $item */
            $item = $pancakeIterator->next();
            echo $item->getName() . ': ';
            echo $item->getDescription() . ', ';
            echo (string) $item->getPrice() . PHP_EOL;
        }
    }
}