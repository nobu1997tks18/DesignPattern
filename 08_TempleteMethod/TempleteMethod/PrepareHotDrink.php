<?php

namespace TempleteMethod;

abstract class PrepareHotBrink
{
  public function prepareDrink()
  {
    $this->boilWater();
    $this->brew();
    $this->pourIncup();
    $this->addCondiments();
  }
  
  private function boilWater()
  {
    echo "お湯を沸かします\n";
  }
  
  private function pourIncup()
  {
    echo "コップに注ぎます\n";
  }
  
  abstract protected function brew();
  abstract protected function addCondiments();
}