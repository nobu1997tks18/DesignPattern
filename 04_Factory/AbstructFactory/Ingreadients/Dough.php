<?php
namespace Factory\AbstructFactory\Ingreadients;

abstract class Dough
{
  protected $name;

  public function displayName()
  {
    return $this->name;
  }
}