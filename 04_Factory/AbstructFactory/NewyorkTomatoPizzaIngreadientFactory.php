<?php
namespace Factory\AbstructFactory;

use Factory\AbstructFactory\Ingreadients\CrispyDough;
use Factory\AbstructFactory\Ingreadients\Source;
use Factory\AbstructFactory\Ingreadients\Dough;
use Factory\AbstructFactory\Ingreadients\TomatoSource;

class NewyorkTomatoPizzaIngreadientFactory implements PizzaIngreadientFactory
{
  public function createSource(): Source
  {
    return new TomatoSource();
  }
  
  public function createDough(): Dough
  {
    return new CrispyDough();
  }
}