<?php

class CheesePizza extends Pizza
{
    public function prepare()
    {
        echo 'Preparing ingredients for cheese pizza' . PHP_EOL;
    }

    public function bake()
    {
        echo 'Baking cheese pizza (150 degrees Celsius)' . PHP_EOL;
    }

    public function cut()
    {
        echo 'Cutting cheese pizza into slices' . PHP_EOL;
    }

    public function box()
    {
        echo 'Boxing cheese pizza' . PHP_EOL;
    }
}