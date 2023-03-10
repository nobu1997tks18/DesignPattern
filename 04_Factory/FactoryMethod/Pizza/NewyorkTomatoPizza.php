<?php

namespace Factory\FactoryMethod\Pizza;
use Factory\AbstructFactory\PizzaIngreadientFactory;

class NewyorkTomatoPizza extends Pizza
{
  public function __construct(PizzaIngreadientFactory $ingreadient)
  {
    $this->name = 'ニューヨークトマトピザ';
    $this->ingreadient = $ingreadient;
    $this->dough = $this->ingreadient->createDough();
    $this->souce = $this->ingreadient->createSource();
  }
}