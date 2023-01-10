<?php
namespace Decorator\Decorators;

use Decorator\Beverages\Beverage;

abstract class BeverageDecorator extends Beverage
{
  protected Beverage $beverage;

  public function getDescription()
  {
    return $this->beverage->getDescription().'/'.$this->description;
  }

  public function cost()
  {
    return $this->beverage->cost() +  $this->cost;
  }
}