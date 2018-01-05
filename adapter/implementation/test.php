<?php

require_once __DIR__ . '/interfaces/Duck.php';
require_once __DIR__ . '/interfaces/Turkey.php';
require_once __DIR__ . '/SimpleDuck.php';
require_once __DIR__ . '/SimpleTurkey.php';
require_once __DIR__ . '/TurkeyAdapter.php';

function duck_tester(Duck $duck) : void
{
    $duck->quack();
    $duck->fly();
}

$ducks = [
    new SimpleDuck(),
    new TurkeyAdapter(new SimpleTurkey()),
];

foreach ($ducks as $duck) {
    duck_tester($duck);
}
