<?php

namespace Observer\Observers;

use Observer\Observers\CalculateObserver;
use Observer\Factories\CalculatorFactory;

class AvarageCalclator implements CalculateObserver, CalculatorFactory
{
  private int $avarage_number;
  private int $add_times;

  private function __construct(int $add_number, int $add_times)
  {
    $this->avarage_number = $add_number;
    $this->add_times = $add_times;
  }
  
  public static function factoryWithEmptyData()
  {
    return new Self(0,0);
  }

  public  static function factory(int $add_number)
  {
    return new Self($add_number, 0);
  }

  public function update(int $add_number)
  {
    echo "平均気温を※※℃です\n";
  }
}