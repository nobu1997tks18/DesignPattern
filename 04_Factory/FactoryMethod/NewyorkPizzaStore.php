<?php

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