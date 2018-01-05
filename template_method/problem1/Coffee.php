<?php

class Coffee
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->brewingCoffeeGrinds();
        $this->pourInCup();
        $this->addSugarAndMilk();
    }

    public function boilWater()
    {
        echo 'Boiling water' . PHP_EOL;
    }

    public function brewingCoffeeGrinds()
    {
        echo 'Brewing coffee grinds' . PHP_EOL;
    }

    public function pourInCup()
    {
        echo 'Pouring drink into cup' . PHP_EOL;
    }

    public function addSugarAndMilk()
    {
        echo 'Adding sugar and milk' . PHP_EOL;
    }
}