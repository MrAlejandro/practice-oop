<?php

class CurrentConditionsDisplay implements Display
{
    public function update($temperature, $humidity, $pressure)
    {
        // do some stuff with incoming data here
        $this->display($temperature, $humidity, $pressure);
    }

    public function display($temperature, $humidity, $pressure)
    {
        echo 'The weather now:' . PHP_EOL;
        echo "Current temperature: $temperature" . PHP_EOL;
        echo "Current humidity: $humidity" . PHP_EOL;
        echo "Current pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

