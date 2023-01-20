<?php

namespace IteratorAndComposite\Iterator\Client;

use IteratorAndComposite\Iterator\Iterator;
use IteratorAndComposite\Iterator\Menu\MenuList;
use IteratorAndComposite\Iterator\MenuIterator;

class Waiter
{
  private MenuIterator $menu_list;

  public function __construct(MenuList $menu_list)
  {
    $this->menu_list = $menu_list->createIterator();
  }

  public function printMenu()
  {
    while ($this->menu_list->hasNext()) {
      $menu = $this->menu_list->next();
      var_dump($menu);
      // while ($menu->hasNext()) {
      //   $this->printIterator($menu->next());
      // }
    }
  }

  private function printIterator(Iterator $iterator)
  {
    while ($iterator->hasNext()) {
      $menu = $iterator->next();
      echo "{$menu->getName()}_{$menu->getDescription()}_{$menu->getPrice()}円\n";
    }
  }
}
