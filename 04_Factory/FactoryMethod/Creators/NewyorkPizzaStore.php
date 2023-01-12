<?php
namespace Factory\FactoryMethod\Creators;

use Factory\AbstructFactory\NewyorkHoneyPizzaIngreadientFactory;
use Factory\AbstructFactory\NewyorkTomatoPizzaIngreadientFactory;
use Factory\FactoryMethod\Pizza\Pizza;
use Factory\FactoryMethod\Pizza\NewyorkHoneyPizza;
use Factory\FactoryMethod\Pizza\NewyorkTomatoPizza;

class NewyorkPizzaStore extends PizzaStore
{
  public function createPizza(String $menu) :Pizza
  {
   if($menu ==='tomato'){
    $ingreadient = new NewyorkTomatoPizzaIngreadientFactory();
    return new NewyorkTomatoPizza($ingreadient);
   }
   
   if($menu === 'cheese'){
    $ingreadient = new NewyorkHoneyPizzaIngreadientFactory();
    return new NewyorkHoneyPizza($ingreadient);
   }
  }
}