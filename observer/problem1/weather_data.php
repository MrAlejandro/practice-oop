<?php

class WeatherData
{
    public $tempereture;
    public $humidity;
    public $pressure;

    public $currentCoditionsDisplay;
    public $statisticsDisplay;
    public $forecastDisplay;

    public function __construct()
    {
        $this->currentCoditionsDisplay = new CurrentCoditionsDisplay();
        $this->statisticsDisplay = new StatisticsDisplay();
        $this->forecastDisplay = new ForecastDisplay();
    }

    public function measurementsChanged()
    {
        $this->temperature = $this->getTemperature();
        $this->humidity = $this->getHumidity();
        $this->pressure = $this->getPressure();

        $this->currentCoditionsDisplay->update($this->temperature, $this->humidity, $this->pressure);
        $this->statisticsDisplay->update($this->temperature, $this->humidity, $this->pressure);
        $this->forecastDisplay->update($this->temperature, $this->humidity, $this->pressure);
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

