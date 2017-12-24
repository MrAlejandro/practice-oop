<?php

class NYStyleCheesePizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY style Sauce and Cheese Pizza';
        $this->dough = 'Thick Crust Dough';
        $this->sauce = 'Marinara Sauce';
        array_push($this->toppings, 'Grated Reggiano Cheese');
    }
}