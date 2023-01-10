<?php
namespace Decorator\Decorators;

use Decorator\Beverages\Beverage;

class Whip extends BeverageDecorator
{
  public function __construct(Beverage $beverage)
  {
    $this->beverage = $beverage;
    $this->description = 'ホイップ';
    $this->cost = 150;
  }
}