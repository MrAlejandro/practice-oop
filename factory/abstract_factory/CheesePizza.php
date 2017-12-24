<?php

class CheesePizza extends Pizza
{
    public function prepare() : void
    {
        echo 'Preparing ' . $this->name . PHP_EOL;
        $this->dough = $this->ingredientFactory->createDough();
        $this->souce = $this->ingredientFactory->createSauce();
        $this->cheese = $this->ingredientFactory->createCheese();
    }
}