<?php

namespace Factory\FactoryMethod\Pizza;

class NewyorkCheesePizza extends Pizza
{
  public function __construct()
  {
    $this->name = 'ニューヨークチーズピザ';
    $this->dough = 'もちもち生地';
    $this->souce = '4種のチーズソース';
  }
  
  public function bake()
  {
    echo "180度で20分焼く\n";
  }
  
  public function cut(){
    echo "ピザを四角にカットする。\n";
  }
}