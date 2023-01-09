<?php
namespace Observer;
use Subjects\WeatherData;

include 'include.php';

$weather_data = WeatherData::factory();
$weather_data->changeTemperature(100);

