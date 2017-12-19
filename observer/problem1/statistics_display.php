<?php

class StatisticsDisplay implements Display
{
    public function update($temperature, $humidity, $pressure)
    {
        // do some statistics stuff here
        $this->display($temperature, $humidity, $pressure);
    }

    public function display($temperature, $humidity, $pressure)
    {
        echo 'The weather statistics:' . PHP_EOL;
        echo "Statistical temperature: $temperature" . PHP_EOL;
        echo "Statistical humidity: $humidity" . PHP_EOL;
        echo "Statistical pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

