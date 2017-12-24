<?php

class NYStyleGreekPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY style Greek Pizza';
        $this->dough = 'Thick Crust Dough';
        $this->sauce = 'Olive Sauce';
        array_push($this->toppings, 'Goat Cheese');
    }
}