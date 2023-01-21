<?php
namespace IteratorAndComposite\Menu;

use IteratorAndComposite\Composite\MenuComponent;

class Menu extends MenuComponent
{
  public function __construct(string $name, string $description)
  {
    $this->name = $name;
    $this->description = $description;
  }

  public function print()
  {
    echo "--{$this->getName()}_{$this->getDescription()}--\n";
    $this->printIterator($this->createIterator());
    echo "\n";
  }
}
