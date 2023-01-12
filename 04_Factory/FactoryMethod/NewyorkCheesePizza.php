<?php

class NewyorkCheesePizza extends Pizza
{
  public function __construct()
  {
    $this->name = 'ニューヨークチーズピザ';
    $this->dough = 'もちもち生地';
    $this->souce = '4種のチーズソース';
  }
}