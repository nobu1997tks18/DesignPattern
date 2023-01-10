<?php
namespace Decorator\Decorators;

use Decorator\Beverages\Beverage;

class Milk extends BeverageDecorator
{
  public function __constructor(Beverage $beverage)
  {
    echo 'ミルクを追加します。';
    $this->beverage = $beverage;
    $this->description = 'ミルク';
    $this->cost = 50;
  }
}