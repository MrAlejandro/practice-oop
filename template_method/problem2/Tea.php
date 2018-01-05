<?php

class Tea extends Drink
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function steepTeaBag()
    {
        echo 'Steeping tea bag' . PHP_EOL;
    }

    public function addLemon()
    {
        echo 'Adding a slice of lemon' . PHP_EOL;
    }
}