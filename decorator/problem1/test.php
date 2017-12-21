<?php

require_once __DIR__ . '/Beverage.php';
require_once __DIR__ . '/Espresso.php';
require_once __DIR__ . '/HouseBlend.php';

$espresso = new Espresso();
$espresso->setMilk(true);
$espresso->setWhip(true);
echo $espresso->cost();

