<?php
namespace Factory\FactoryMethod\Creators;
use Factory\FactoryMethod\Pizza\Pizza;
use Factory\FactoryMethod\Pizza\NewyorkCheesePizza;
use Factory\FactoryMethod\Pizza\NewyorkTomatoPizza;

class NewyorkPizzaStore extends PizzaStore
{
  public function createPizza(String $menu) :Pizza
  {
   if($menu ==='tomato'){
    return new NewyorkTomatoPizza();
   }
   
   if($menu === 'cheese'){
    return new NewyorkCheesePizza();
   }
  }
}