<?php

require_once __DIR__ . '/interfaces/State.php';
require_once __DIR__ . '/GumballMachine.php';
require_once __DIR__ . '/HasQuarterState.php';
require_once __DIR__ . '/NoQuarterState.php';
require_once __DIR__ . '/SoldOutState.php';
require_once __DIR__ . '/SoldState.php';

$gumballMachine = new GumballMachine(3);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
