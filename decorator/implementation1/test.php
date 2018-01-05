<?php

require_once __DIR__ . '/Beverage.php';
require_once __DIR__ . '/CondimentDecorator.php';
require_once __DIR__ . '/Espresso.php';
require_once __DIR__ . '/HouseBlend.php';
require_once __DIR__ . '/condiment/Milk.php';
require_once __DIR__ . '/condiment/Mocha.php';
require_once __DIR__ . '/condiment/Soy.php';
require_once __DIR__ . '/condiment/Whip.php';

// HouseBlend + double milk + soy + whip
$coffee = new Whip(
    new Soy (
        new Milk(
            new Milk(
                new HouseBlend()
            )
        )
    )
);

echo 'Coffee: ' . $coffee->getDescription() . PHP_EOL;
echo 'Cost: ' . (string) $coffee->cost() . PHP_EOL;
