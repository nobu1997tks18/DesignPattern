<?php

namespace IteratorAndComposite\Menu;

use IteratorAndComposite\Composite\MenuComponent;

class MenuItem extends MenuComponent
{
  public function __construct(string $name, string $description, int $price)
  {
    $this->name = $name;
    $this->description = $description;
    $this->price = $price;
  }

  public function print()
  {
    echo "{$this->getName()}_{$this->getDescription()}_{$this->getPrice()}円\n";
  }
}
