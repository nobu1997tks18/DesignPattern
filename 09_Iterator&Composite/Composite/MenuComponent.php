<?php
namespace IteratorAndComposite\Composite;

use IteratorAndComposite\Iterator\Iterator;
use IteratorAndComposite\Iterator\MenuIterator;

abstract class MenuComponent
{
  protected string $name;
  protected string $description;
  protected int $price = 0;
  protected array $menu_list = [];

  abstract public function print();

  public function add(MenuComponent $menu_component)
  {
    $this->menu_list[] = $menu_component;
  }

  protected function getName()
  {
    return $this->name;
  }

  protected function getDescription()
  {
    return $this->description;
  }

  protected function getPrice()
  {
    return $this->price;
  }

  protected function createIterator(): MenuIterator
  {
    return new MenuIterator($this->menu_list);
  }

  protected function printIterator(Iterator $iterator)
  {
    while ($iterator->hasNext()) {
      $menu = $iterator->next()->print();
    }
  }
}