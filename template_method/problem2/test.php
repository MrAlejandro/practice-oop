<?php

require_once __DIR__ . '/Drink.php';
require_once __DIR__ . '/Coffee.php';
require_once __DIR__ . '/Tea.php';

(new Tea())->prepareRecipe();
(new Coffee())->prepareRecipe();
