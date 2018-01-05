<?php

class Tea
{
    public function prepareRecipe()
    {
        $this->boilWater();
        $this->steepTeaBag();
        $this->pourInCup();
        $this->addLemon();
    }

    public function boilWater()
    {
        echo 'Boiling water' . PHP_EOL;
    }

    public function steepTeaBag()
    {
        echo 'Steeping tea bag' . PHP_EOL;
    }

    public function pourInCup()
    {
        echo 'Pouring drink into cup' . PHP_EOL;
    }

    public function addLemon()
    {
        echo 'Adding a slice of lemon' . PHP_EOL;
    }
}