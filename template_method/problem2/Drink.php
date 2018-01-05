<?php

abstract class Drink
{
    abstract function prepareRecipe();

    public function boilWater()
    {
        echo 'Boiling water' . PHP_EOL;
    }

    public function pourInCup()
    {
        echo 'Pouring drink into cup' . PHP_EOL;
    }

}
