<?php

namespace DesignPattern\Observer\Displays;

use DesignPattern\Observer\Observer;
use DesignPattern\Observer\WeatherData;

class CurrentConditionsDisplay implements Display, Observer
{
    private float $temperature;
    private float $humidity;

    public function __construct(private WeatherData $weatherData)
    {
        $this->weatherData->registerObserver($this);
    }

    public function update()
    {
        $this->temperature = $this->weatherData->getTemperature();
        $this->humidity = $this->weatherData->getHumidity();

        $this->display();
    }

    public function display()
    {
        echo "Current conditions: temperature: {$this->temperature}, humidity: {$this->humidity}\n";
    }
}