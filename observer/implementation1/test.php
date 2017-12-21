<?php

require_once __DIR__ . '/interfaces/subject.php';
require_once __DIR__ . '/interfaces/observer.php';
require_once __DIR__ . '/interfaces/displayElement.php';

require_once __DIR__ . '/currentConditionsDisplay.php';
require_once __DIR__ . '/statisticsDisplay.php';
require_once __DIR__ . '/forecastDisplay.php';
require_once __DIR__ . '/weatherData.php';

$wd = new WeatherData();

$c = new CurrentConditionsDisplay($wd);
$f = new ForecastDisplay($wd);
$s = new StatisticsDisplay($wd);

$wd->measurementsChanged();
$wd->measurementsChanged();
