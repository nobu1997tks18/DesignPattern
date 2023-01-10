<?php

namespace Decorator\Beverages;

abstract class Beverage
{
  protected string $description;
  protected int $cost;

  public function getDescription()
  {
    return $this->description;
  }

  public function cost()
  {
    return $this->cost;
  }
}