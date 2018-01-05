<?php

abstract class CaffeineBeverage
{
    final public function prepareRecipe()
    {
        $this->boilWater();
        $this->brew();
        $this->pourInCup();

        if ($this->wantCondiments()) {
            $this->addCondiments();
        }

        $this->hook();
    }

    abstract function brew();

    abstract function addCondiments();

    public function boilWater()
    {
        echo 'Boiling water' . PHP_EOL;
    }

    public function pourInCup()
    {
        echo 'Pouring drink into cup' . PHP_EOL;
    }

    public function wantCondiments()
    {
        return true;
    }

    public function hook() {}
}