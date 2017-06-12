<?php

require_once __DIR__ . '/fly_behavior/interfaces/fly_behavior.php';
require_once __DIR__ . '/quack_behavior/interfaces/quack_behavior.php';

require_once __DIR__ . '/abstract_classes/duck.php';
require_once __DIR__ . '/fly_behavior/fly_no_way.php';
require_once __DIR__ . '/fly_behavior/fly_with_wings.php';
require_once __DIR__ . '/quack_behavior/mute_quack.php';
require_once __DIR__ . '/quack_behavior/quack.php';
require_once __DIR__ . '/quack_behavior/squick.php';
require_once __DIR__ . '/mallard_duck.php';
require_once __DIR__ . '/redhead_duck.php';
require_once __DIR__ . '/rubber_duck.php';
require_once __DIR__ . '/wooden_duck.php';

$mallard_duck = new MallardDuck();
$mallard_duck->display();
$mallard_duck->swim();
$mallard_duck->performQuack();
$mallard_duck->performFly();

$redhead_duck = new RedheadDuck();
$redhead_duck->display();
$redhead_duck->swim();
$redhead_duck->performQuack();
$redhead_duck->performFly();

$rubber_duck = new RubberDuck();
$rubber_duck->display();
$rubber_duck->swim();
$rubber_duck->performQuack();
$rubber_duck->performFly();

$wooden_duck = new WoodenDuck();
$wooden_duck->display();
$wooden_duck->swim();
$wooden_duck->performQuack();
$wooden_duck->performFly();

