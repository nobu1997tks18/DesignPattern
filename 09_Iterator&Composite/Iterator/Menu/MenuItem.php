<?php

namespace IteratorAndComposite\Iterator\Menu;

class MenuItem
{
  private string $name;
  private string $description;
  private int $price;

  public function __construct(string $name, string $description, int $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  public function getName()
  {
    return $this->name;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function getPrice()
  {
    return $this->price;
  }
}
