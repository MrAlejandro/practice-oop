<?php

class ChicagoStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago style Sauce and Cheese Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Marinara Sauce';
        array_push($this->toppings, 'Grated Reggiano Cheese');
    }

    public function cut()
    {
        echo 'Cutting pizza into squares' . PHP_EOL;
    }
}