<?php

abstract class PizzaStore
{
  public function order(string $menu)
  {
    $pizza = $this->createPizza($menu);
    $pizza->prepare();
    $pizza->bake();
    $pizza->cut();
    $pizza->box();
  }

  abstract public function createPizza(String $menu) :Pizza;
}