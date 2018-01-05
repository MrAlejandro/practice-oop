<?php

class Coffee extends Drink
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brewingCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function brewingCoffeeGrinds()
    {
        echo 'Brewing coffee grinds' . PHP_EOL;
    }

    public function addSugarAndMilk()
    {
        echo 'Adding sugar and milk' . PHP_EOL;
    }
}