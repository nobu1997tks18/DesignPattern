<?php

namespace IteratorAndComposite\Client;

use IteratorAndComposite\Composite\MenuComponent;

class Waiter
{
  private MenuComponent $menu_list;

  public function __construct(MenuComponent $menu_list)
  {
    $this->menu_list = $menu_list;
  }

  public function printMenu()
  {
    $this->menu_list->print();
  }
}
