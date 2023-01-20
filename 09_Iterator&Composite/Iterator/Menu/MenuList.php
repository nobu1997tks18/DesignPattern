<?php
namespace IteratorAndComposite\Iterator\Menu;

use IteratorAndComposite\Iterator\Menu\Menu;
use IteratorAndComposite\Iterator\MenuIterator;

class MenuList implements Menu
{
  private array $menu_list;

  public function __construct()
  {
    $this->menu_list = [];
  }

  public function createIterator(): MenuIterator
  {
    return new MenuIterator($this->menu_list);
  }

  public function addMenu(Menu $menu)
  {
    $this->menu_list[] = $menu;
  }
}