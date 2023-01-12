<?php

namespace Factory\FactoryMethod\Pizza;
use Factory\AbstructFactory\PizzaIngreadientFactory;

class NewyorkHoneyPizza extends Pizza
{
  public function __construct(PizzaIngreadientFactory $ingreadient)
  {
    $this->name = 'ニューヨークハニーピザ';
    $this->ingreadient = $ingreadient;
    $this->dough = $this->ingreadient->createDough();
    $this->souce = $this->ingreadient->createSource();
  }
  
  public function bake()
  {
    echo "180度で20分焼く\n";
  }
  
  public function cut(){
    echo "ピザを四角にカットする。\n";
  }
}