<?php

namespace Factory\FactoryMethod\Pizza;

class NewyorkTomatoPizza extends Pizza
{
  public function __construct()
  {
    $this->name = 'ニューヨークトマトピザ';
    $this->dough = 'サクサク生地';
    $this->souce = 'トマトソース';
  }
}