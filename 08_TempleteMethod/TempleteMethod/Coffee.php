<?php

namespace TempleteMethod;

class Coffee extends PrepareHotBrink
{
  protected function brew()
  {
    echo "コーヒを入れます\n";
  }

  protected function addCondiments()
  {
    echo "砂糖を入れます\n";
    echo "ミルクを入れます\n";
  }
}