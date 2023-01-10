<?php
namespace Decorator\Decorators;

use Decorator\Beverages\Beverage;

class Milk extends BeverageDecorator
{
  public function __construct(Beverage $beverage)
  {
    $this->beverage = $beverage;
    $this->description = 'ミルク';
    $this->cost = 50;
  }
}