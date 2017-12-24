<?php

class NYPizzaStore extends PizzaStore
{
    protected function createPizza(string $type) : Pizza
    {
        $ingredientsFactory = new NYPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientsFactory);
            $pizza->setName('New York style cheese pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientsFactory);
            $pizza->setName('New York style clam pizza');
        }

        return $pizza;
    }
}