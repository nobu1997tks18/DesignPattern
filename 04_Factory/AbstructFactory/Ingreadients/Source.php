<?php
namespace Factory\AbstructFactory\Ingreadients;

abstract class Source
{
  protected $name;

  public function displayName()
  {
    return $this->name;
  }
}