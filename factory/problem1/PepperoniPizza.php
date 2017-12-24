<?php

class PepperoniPizza extends Pizza
{
    public function prepare()
    {
        echo 'Preparing ingredients for Pepperoni pizza' . PHP_EOL;
    }

    public function bake()
    {
        echo 'Baking pepperoni pizza (170 degrees Celsius)' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting pepperoni pizza into slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Boxing pepperoni pizza' . PHP_EOL;
    }
}