<?php

require_once __DIR__ . '/interfaces/subject.php';
require_once __DIR__ . '/interfaces/observer.php';
require_once __DIR__ . '/interfaces/displayElement.php';

require_once __DIR__ . '/weatherData.php';

class Test implements Observer
{
    public function update()
    {
    }
}

$t1 = new Test();
$t2 = new Test();
$t3 = new Test();

$wd = new WeatherData();

$wd->registerObserver($t1);
print_r($wd);
