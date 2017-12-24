<?php

class ChicagoPizzaStore extends PizzaStore
{
    public function createPizza(string $type) : Pizza
    {
        if ($type === 'cheese') {
            $pizza = new ChicagoStyleCheesePizza();
        } elseif ($type === 'greek') {
            $pizza = new ChicagoStyleGreekPizza();
        } elseif ($type === 'pepperoni') {
            $pizza = new ChicagoStylePepperoniPizza();
        }

        return $pizza;
    }
}