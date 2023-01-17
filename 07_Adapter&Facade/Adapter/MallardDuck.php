<?php

namespace AdapterAndFacade\Adapter;

class MallardDuck implements Duck
{
  public function quack()
  {
    echo 'クワクワ';
  }
  
  public function fly()
  {
    echo '長距離飛びます。';
  }
}