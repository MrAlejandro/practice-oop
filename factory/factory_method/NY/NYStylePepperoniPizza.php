<?php

class NYStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'NY style Pepperoni Pizza';
        $this->dough = 'Thick Crust Dough';
        $this->sauce = 'Onion Sauce';
        array_push($this->toppings, 'Grated Cheese');
    }
}