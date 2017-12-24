<?php

class ChicagoPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough() : Dough
    {
        return new ThickDough();
    }

    public function createSauce() : Sauce
    {
        return new PlumTomatoSauce();
    }

    public function createCheese() : Cheese
    {
        return new MozzarellaCheese();
    }

    public function createVeggies() : array
    {
        return ['Garlic', 'Onion', 'Mushroom', 'RedPepper'];
    }

    public function createPepperoni() : Pepperoni
    {
        return new Pepperoni();
    }

    public function createClam() : Clams
    {
        return new FrozenClams();
    }
}