<?php

namespace Observer\Factories;

interface ListFactory
{
  public static function factoryWithEmptyData();
  public static function factory(array $array);
}