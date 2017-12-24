<?php

class SimplePizzaFactory
{
    public function createPizza(string $type) : Pizza
    {
        if ($type === 'cheese') {
            $pizza = new CheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new reekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new PepperoniPizza();
        }

        return $pizza;
    }
}