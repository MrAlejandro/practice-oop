<?php

require_once __DIR__ . '/MenuComponent.php';
require_once __DIR__ . '/Menu.php';
require_once __DIR__ . '/MenuItem.php';
require_once __DIR__ . '/Waitress.php';

$pancakeHouseMenu = new Menu('PANCAKE HOUSE MENU', 'Breakfast');
$dinerMenu = new Menu('DINER MENU', 'Lunch');
$dessertMenu = new Menu('DESSERT MENU', 'Dessert of course!');
$drinksMenu = new Menu('Drinks', 'Drinks menu');

$allMenus = new Menu('ALL MENUS', 'All menus combined');

$allMenus->add($pancakeHouseMenu);
$allMenus->add($dinerMenu);
$allMenus->add($dessertMenu);

$dinerMenu->add(new MenuItem('Dish1', 'Dish1 description', 3.33, true));
$dinerMenu->add(new MenuItem('Dish2', 'Dish2 description', 2.33, true));
$dinerMenu->add(new MenuItem('Dish3', 'Dish3 description', 1.33, false));
$dinerMenu->add(new MenuItem('Dish4', 'Dish4 description', 0.33, false));

$pancakeHouseMenu->add(new MenuItem('Pancake1', 'Pancake1 description', 3.33, true));
$pancakeHouseMenu->add(new MenuItem('Pancake2', 'Pancake2 description', 2.33, true));
$pancakeHouseMenu->add(new MenuItem('Pancake3', 'Pancake3 description', 1.33, false));
$pancakeHouseMenu->add(new MenuItem('Pancake4', 'Pancake4 description', 0.33, false));

$dessertMenu->add(new MenuItem('Dessert1', 'Dessert1 description', 3.33, true));
$dessertMenu->add(new MenuItem('Dessert2', 'Dessert2 description', 2.33, true));
$dessertMenu->add(new MenuItem('Dessert3', 'Dessert3 description', 1.33, false));
$dessertMenu->add(new MenuItem('Dessert4', 'Dessert4 description', 0.33, false));

$dessertMenu->add($drinksMenu);

$drinksMenu->add(new MenuItem('Dkink1', 'Dkink1 description', 3.33, true));
$drinksMenu->add(new MenuItem('Dkink2', 'Dkink2 description', 2.33, true));
$drinksMenu->add(new MenuItem('Dkink3', 'Dkink3 description', 1.33, false));
$drinksMenu->add(new MenuItem('Dkink4', 'Dkink4 description', 0.33, false));

$waitrees = new Waitress($allMenus);
$waitrees->printMenu();
