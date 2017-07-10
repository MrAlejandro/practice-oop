<?php

class CurrentCoditionsDisplay implements Display
{
    public function update($tmperature, $humidity, $pressure)
    {
        // do some stuff with incomming data here
        $this->display($tmperature, $humidity, $pressure);
    }

    public function display($tmperature, $humidity, $pressure)
    {
        echo 'The weathre now:' . PHP_EOL;
        echo "Current temperature: $tmperature" . PHP_EOL;
        echo "Current humidity: $humidity" . PHP_EOL;
        echo "Current pressure: $pressure" . PHP_EOL;
        echo PHP_EOL;
    }
}

