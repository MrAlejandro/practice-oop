<?php

require_once __DIR__ . '/Pizza.php';
require_once __DIR__ . '/PizzaStore.php';
require_once __DIR__ . '/SimplePizzaFactory.php';
require_once __DIR__ . '/CheesePizza.php';
require_once __DIR__ . '/GreekPizza.php';
require_once __DIR__ . '/PepperoniPizza.php';

$store = new PizzaStore(new SimplePizzaFactory());
$store->orderPizza('pepperoni');
