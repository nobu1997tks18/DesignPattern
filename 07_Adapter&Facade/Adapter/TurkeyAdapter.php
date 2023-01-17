<?php

namespace AdapterAndFacade\Adapter;

class TurkeyAdapter implements Duck
{
  private Turkey $turkey;
  
  public function __construct(Turkey $turkey)
  {
    $this->turkey = $turkey;
  }

  public function quack()
  {
    $this->turkey->gobble();
  }
  
  public function fly()
  {
    $this->turkey->fly();
  }
}