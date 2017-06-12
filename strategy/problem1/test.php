<?php

require_once __DIR__ . '/duck.php';
require_once __DIR__ . '/mallard_duck.php';
require_once __DIR__ . '/redhead_duck.php';
require_once __DIR__ . '/rubber_duck.php';
require_once __DIR__ . '/wooden_duck.php';

$mallard_duck = new MallardDuck();
$mallard_duck->display();
$mallard_duck->swim();
$mallard_duck->quack();
$mallard_duck->fly();

$redhead_duck = new RedheadDuck();
$redhead_duck->display();
$redhead_duck->swim();
$redhead_duck->quack();
$redhead_duck->fly();

$rubber_duck = new RubberDuck();
$rubber_duck->display();
$rubber_duck->swim();
$rubber_duck->quack();
$rubber_duck->fly();

$wooden_duck = new WoodenDuck();
$wooden_duck->display();
$wooden_duck->swim();
$wooden_duck->quack();
$wooden_duck->fly();
