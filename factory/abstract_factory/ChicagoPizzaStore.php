<?php

class ChicagoPizzaStore extends PizzaStore
{
    protected function createPizza(string $type) : Pizza
    {
        $ingredientsFactory = new ChicagoPizzaIngredientFactory();

        if ($type === 'cheese') {
            $pizza = new CheesePizza($ingredientsFactory);
            $pizza->setName('Chicago style cheese pizza');
        } elseif ($type === 'clam') {
            $pizza = new ClamPizza($ingredientsFactory);
            $pizza->setName('Chicago style clam pizza');
        }

        return $pizza;
    }
}