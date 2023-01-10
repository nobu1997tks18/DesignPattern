<?php
namespace Decorator\Decorators;

use Decorator\Beverages\Beverage;

class Whip extends BeverageDecorator
{
  public function __constructor(Beverage $beverage)
  {
    echo 'ホイップを追加します。';
    $this->beverage = $beverage;
    $this->description = 'ホイップ';
    $this->cost = 150;
  }
}