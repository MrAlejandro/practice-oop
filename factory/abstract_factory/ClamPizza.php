<?php

class ClamPizza extends Pizza
{
    public function prepare() : void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->sauce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
        $this->clams = $this->ingredientFactory->createClam();
    }
}