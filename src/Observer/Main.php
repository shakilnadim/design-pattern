<?php

namespace DesignPattern\Observer;

use DesignPattern\Observer\Displays\CurrentConditionsDisplay;
use DesignPattern\Observer\Displays\ForecastDisplay;
use DesignPattern\Observer\Displays\StatisticsDisplay;

class Main
{
    public function main()
    {
        $weatherData = new WeatherData();

        $currentConditionsDisplay = new CurrentConditionsDisplay($weatherData);
        $statisticsDisplay = new StatisticsDisplay($weatherData);
        $forecastDisplay = new ForecastDisplay($weatherData);

        $weatherData->setMeasurements(80, 65, 30.4);
        $weatherData->setMeasurements(82, 70, 29.2);
        $weatherData->removeObserver($forecastDisplay);
        $weatherData->setMeasurements(78, 90, 29.2);
    }
}