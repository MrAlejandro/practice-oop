<?php

require_once __DIR__ . '/interfaces/PizzaIngredientFactory.php';
require_once __DIR__ . '/NYPizzaIngredientFactory.php';
require_once __DIR__ . '/ChicagoPizzaIngredientFactory.php';

require_once __DIR__ . '/interfaces/Cheese.php';
require_once __DIR__ . '/cheese/MozzarellaCheese.php';
require_once __DIR__ . '/cheese/ReggianoCheese.php';

require_once __DIR__ . '/interfaces/Clams.php';
require_once __DIR__ . '/clam/FreshClams.php';
require_once __DIR__ . '/clam/FrozenClams.php';

require_once __DIR__ . '/interfaces/Dough.php';
require_once __DIR__ . '/dough/ThickDough.php';
require_once __DIR__ . '/dough/ThinDough.php';

require_once __DIR__ . '/interfaces/Sauce.php';
require_once __DIR__ . '/sauce/MarinaraSauce.php';
require_once __DIR__ . '/sauce/PlumTomatoSauce.php';

require_once __DIR__ . '/pepperoni/Pepperoni.php';

require_once __DIR__ . '/PizzaStore.php';
require_once __DIR__ . '/ChicagoPizzaStore.php';
require_once __DIR__ . '/NYPizzaStore.php';

require_once __DIR__ . '/Pizza.php';
require_once __DIR__ . '/CheesePizza.php';
require_once __DIR__ . '/ClamPizza.php';

$nyPizzaStore = new NYPizzaStore();
$nyPizzaStore->orderPizza('clam');

$chicagoPizzaStore = new ChicagoPizzaStore();
$chicagoPizzaStore->orderPizza('clam');
