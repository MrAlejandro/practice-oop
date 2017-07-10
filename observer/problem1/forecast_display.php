<?php

class ForecastDisplay implements Display
{
    public function update($tmperature, $humidity, $pressure)
    {
        // do some dorecast stuff here
        $this->display($tmperature, $humidity, $pressure);
    }

    public function display($tmperature, $humidity, $pressure)
    {
        echo 'The weathre forecast:' . PHP_EOL;
        echo "Forecast temperature: $tmperature" . PHP_EOL;
        echo "Forecast humidity: $humidity" . PHP_EOL;
        echo "Forecast pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

