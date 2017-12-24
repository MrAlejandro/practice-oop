<?php

interface PizzaIngredientFactory
{
    public function createDough() : Dough;
    public function createSauce() : Sauce;
    public function createCheese() : Cheese;
    public function createVeggies() : array;
    public function createPepperoni() : Pepperoni;
    public function createClam() : Clams;
}