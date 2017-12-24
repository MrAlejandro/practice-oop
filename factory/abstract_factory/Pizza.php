<?php

abstract class Pizza
{
    protected $name;
    protected $dough;
    protected $sauce;
    protected $veggies;
    protected $cheese;
    protected $pepperoni;
    protected $clams;
    protected $ingredientFactory;

    public function __construct(PizzaIngredientFactory $ingredientFactory)
    {
        $this->ingredientFactory = $ingredientFactory;
    }

    abstract function prepare() : void;

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

    public function setName(string $name)
    {
        return $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }
}
