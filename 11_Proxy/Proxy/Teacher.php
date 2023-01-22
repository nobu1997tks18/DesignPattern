<?php
namespace Proxy;

abstract class Teacher
{
  protected $name;

  public function __construct($name)
  {
    $this->name = $name;
  }

  abstract public function question1();
  abstract public function question2();
  abstract public function question3();
}