<?php

require_once __DIR__ . '/PizzaStore.php';
require_once __DIR__ . '/Pizza.php';
require_once __DIR__ . '/NYPizzaStore.php';
require_once __DIR__ . '/ChicagoPizzaStore.php';

require_once __DIR__ . '/NY/NYStylePepperoniPizza.php';
require_once __DIR__ . '/NY/NYStyleCheesePizza.php';
require_once __DIR__ . '/NY/NYStyleGreekPizza.php';

require_once __DIR__ . '/Chicago/ChicagoStylePepperoniPizza.php';
require_once __DIR__ . '/Chicago/ChicagoStyleCheesePizza.php';
require_once __DIR__ . '/Chicago/ChicagoStyleGreekPizza.php';

$nyStore = new NYPizzaStore();
$nyStore->orderPizza('greek');
