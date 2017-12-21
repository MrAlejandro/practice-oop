<?php

class CurrentConditionsDisplay implements Observer, DisplayElement
{
    /** @var \Subject $subject */
    private $subject;

    public function __construct(Subject $subject)
    {
        $this->subject = $subject;
        $this->subject->registerObserver($this);
    }

    public function update($temperature, $humidity, $pressure)
    {
        $this->display($temperature, $humidity, $pressure);
    }

    public function display($temperature, $humidity, $pressure)
    {
        echo 'The weather now:' . PHP_EOL;
        echo "Current temperature: {$temperature}" . PHP_EOL;
        echo "Current humidity: {$humidity}" . PHP_EOL;
        echo "Current pressure: {$pressure}" . PHP_EOL;
        echo PHP_EOL;
    }
}
