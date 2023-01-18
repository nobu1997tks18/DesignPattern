<?php

namespace TempleteMethod;

class Tea extends PrepareHotBrink
{
  protected function brew()
  {
    echo "紅茶を入れます\n";
  }

  protected function addCondiments()
  {
    echo "レモンを入れます\n";
  }
}