<?php

class NYPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        if ($type === 'cheese') {
            $pizza = new NYStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new NYStyleGreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new NYStylePepperoniPizza();
        }

        return $pizza;
    }
}