<?php

class ChicagoStyleGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago style Greek Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Olive Sauce';
        array_push($this->toppings, 'Goat Cheese');
    }

    public function cut()
    {
        echo 'Cutting pizza into squares' . PHP_EOL;
    }
}