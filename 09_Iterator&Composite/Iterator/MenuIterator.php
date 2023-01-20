<?php

namespace IteratorAndComposite\Iterator;

class MenuIterator implements Iterator
{
  private array $menu_item;
  private $position;

  public function __construct(array $menu_item)
  {
    $this->menu_item = $menu_item;
    $this->position = 0;
  }

  public function hasNext()
  {
    if ($this->position >= count($this->menu_item) || !isset($this->menu_item[$this->position])) {
      return false;
    }

    return true;
  }

  public function next()
  {
    $result = $this->menu_item[$this->position];
    $this->position++;
    return $result;
  }
}
