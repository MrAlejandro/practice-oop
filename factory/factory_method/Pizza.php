<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $toppings = [];

    public function prepare()
    {
        echo "Preparing ingredients for {$this->name}" . PHP_EOL;
        echo "Dough: {$this->dough}" . PHP_EOL;
        echo "Adding souse: {$this->sauce}" . PHP_EOL;
        echo 'Adding toppings:' . PHP_EOL;
        foreach ($this->toppings as $topping) {
            echo ' ' . $topping . PHP_EOL;
        }
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

    public function getName()
    {
        return $this->name;
    }
}