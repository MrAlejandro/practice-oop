<?php

class StatisticsDisplay implements Observer, DisplayElement
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
