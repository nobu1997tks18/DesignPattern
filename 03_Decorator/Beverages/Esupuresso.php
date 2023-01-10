<?php

namespace Decorator\Beverages;

class Esupuresso extends Beverage
{
  public function __construct()
  {
    $this->description = 'エスプレッソ';
    $this->cost = 500;
  }
}