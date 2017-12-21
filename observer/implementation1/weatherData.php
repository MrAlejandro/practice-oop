<?php

class WeatherData implements Subject
{
    public $temperature;
    public $humidity;
    public $pressure;

    /** @var \SplObjectStorage $observers */
    private $observers;

    public function __construct()
    {
        $this->observers = new SplObjectStorage();
    }

    public function registerObserver(Observer $observer)
    {
        $this->observers->attach($observer);
    }

    public function removeObserver(Observer $observer)
    {
        if ($this->observers->contains($observer)) {
            $this->observers->detach($observer);
        }
    }

    public function notifyObservers()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this->temperature, $this->humidity, $this->pressure);
        }
    }

    public function measurementsChanged()
    {
        $this->temperature = $this->getTemperature();
        $this->humidity = $this->getHumidity();
        $this->pressure = $this->getPressure();

        $this->notifyObservers();
    }
    public function getTemperature()
    {
        return rand(25, 40);
    }

    public function getHumidity()
    {
        return rand(70,85);
    }

    public function getPressure()
    {
        return rand(730, 770);
    }
}
