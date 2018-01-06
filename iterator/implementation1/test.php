<?php

require_once __DIR__ . '/interfaces/CustomIterator.php';
require_once __DIR__ . '/interfaces/Menu.php';
require_once __DIR__ . '/Waitress.php';
require_once __DIR__ . '/MenuItem.php';
require_once __DIR__ . '/DinerMenuIterator.php';
require_once __DIR__ . '/DinerMenu.php';
require_once __DIR__ . '/PancakeHouseMenuIterator.php';
require_once __DIR__ . '/PancakeHouseMenu.php';

$breakfast = new PancakeHouseMenu();
$dinner = new DinerMenu();

$waitress = new Waitress($breakfast, $dinner);
$waitress->printMenu();

