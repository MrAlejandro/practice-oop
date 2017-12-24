<?php

require_once __DIR__ . '/Singleton.php';

$sngltn = Singleton::getInstance();
$sngltn->setName('Singleton');
//$copy = clone $sngltn;
//$sngltn->setName('Test');
print_r($sngltn);
//print_r($copy);
