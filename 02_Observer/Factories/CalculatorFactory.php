<?php

namespace Observer\Factories;

interface CalculatorFactory
{
  public static function factoryWithEmptyData();
  public static function factory(int $add_number);
}