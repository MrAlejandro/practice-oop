<?php

class NYPizzaIngredientFactory implements PizzaIngredientFactory
{
    public function createDough() : Dough
    {
        return new ThinDough();
    }

    public function createSauce() : Sauce
    {
        return new MarinaraSauce();
    }

    public function createCheese() : Cheese
    {
        return new ReggianoCheese();
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
        return new FreshClams();
    }
}