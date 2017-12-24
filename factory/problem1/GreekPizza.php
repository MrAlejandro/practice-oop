<?php

class GreekPizza extends Pizza
{
    public function prepare()
    {
        echo 'Preparing ingredients for greek pizza' . PHP_EOL;
    }

    public function bake()
    {
        echo 'Baking greek pizza (180 degrees Celsius)' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting greek pizza into slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Boxing greek pizza' . PHP_EOL;
    }
}