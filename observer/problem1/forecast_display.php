<?php

class ForecastDisplay implements Display
{
    public function update($temperature, $humidity, $pressure)
    {
        // do some forecast stuff here
        $this->display($temperature, $humidity, $pressure);
    }

    public function display($temperature, $humidity, $pressure)
    {
        echo 'The weather forecast:' . PHP_EOL;
        echo "Forecast temperature: $temperature" . PHP_EOL;
        echo "Forecast humidity: $humidity" . PHP_EOL;
        echo "Forecast pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

