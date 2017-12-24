<?php

class ChicagoStylePepperoniPizza extends Pizza
{
    public function __construct()
    {
        $this->name = 'Chicago style Pepperoni Pizza';
        $this->dough = 'Thin Crust Dough';
        $this->sauce = 'Onion Sauce';
        array_push($this->toppings, 'Grated Cheese');
    }
}