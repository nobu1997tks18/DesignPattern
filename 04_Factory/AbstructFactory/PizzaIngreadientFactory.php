<?php
namespace Factory\AbstructFactory;

use Factory\AbstructFactory\Ingreadients\Source;
use Factory\AbstructFactory\Ingreadients\Dough;

interface PizzaIngreadientFactory
{
  public function createSource(): Source;
  public function createDough(): Dough;
}