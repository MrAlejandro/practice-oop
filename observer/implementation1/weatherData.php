<?php

class WeatherData implements Subject
{
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
    }
}
