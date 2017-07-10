<?php

class StatisticsDisplay implements Display
{
    public function update($tmperature, $humidity, $pressure)
    {
        // do some statistics stuff here
        $this->display($tmperature, $humidity, $pressure);
    }

    public function display($tmperature, $humidity, $pressure)
    {
        echo 'The weathre statistics:' . PHP_EOL;
        echo "Statistical temperature: $tmperature" . PHP_EOL;
        echo "Statistical humidity: $humidity" . PHP_EOL;
        echo "Statistical pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

