<?php

namespace DesignPattern\Observer\Displays;

use DesignPattern\Observer\Observer;
use DesignPattern\Observer\WeatherData;

class StatisticsDisplay implements Display, Observer
{
    private float $temperature;
    private float $humidity;
    private float $pressure;

    public function __construct(private WeatherData $weatherData)
    {
        $this->weatherData->registerObserver($this);
    }

    public function update()
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();
        $this->pressure = $this->weatherData->getTemperature();

        $this->display();
    }

    public function display()
    {
        echo "Statistics: temperature: {$this->temperature}, humidity: {$this->humidity}, pressure: {$this->pressure}\n";
    }
}