<?php

require_once __DIR__ . '/interfaces/State.php';
require_once __DIR__ . '/GumballMachine.php';
require_once __DIR__ . '/HasQuarterState.php';
require_once __DIR__ . '/NoQuarterState.php';
require_once __DIR__ . '/SoldOutState.php';
require_once __DIR__ . '/SoldState.php';
require_once __DIR__ . '/WinnerState.php';

$gumballMachine = new GumballMachine(77);

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();

$gumballMachine->insertQuarter();
$gumballMachine->turnCrank();
