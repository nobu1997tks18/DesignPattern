<?php

namespace Decorator\Beverages;

class Decaf extends Beverage
{
  public function __construct()
  {
    echo 'デカフェコーヒーです。';
    $this->description = 'デカフェ';
    $this->cost = 600;
  }
}