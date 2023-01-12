<?php
namespace Factory\AbstructFactory;

use Factory\AbstructFactory\Ingreadients\FluffyDough;
use Factory\AbstructFactory\Ingreadients\Source;
use Factory\AbstructFactory\Ingreadients\Dough;
use Factory\AbstructFactory\Ingreadients\HoneySource;

class NewyorkHoneyPizzaIngreadientFactory implements PizzaIngreadientFactory
{
  public function createSource(): Source
  {
    return new HoneySource();
  }
  
  public function createDough(): Dough
  {
    return new FluffyDough();
  }
}