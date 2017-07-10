<?php

require_once dirname(__FILE__) . '/interfaces/display.php';
require_once dirname(__FILE__) . '/current_conditions_display.php';
require_once dirname(__FILE__) . '/forecast_display.php';
require_once dirname(__FILE__) . '/statistics_display.php';
require_once dirname(__FILE__) . '/statistics_display.php';
require_once dirname(__FILE__) . '/weather_data.php';

$weatherData = new WeatherData();
$weatherData->measurementsChanged();

