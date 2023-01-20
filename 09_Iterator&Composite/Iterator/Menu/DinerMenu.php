<?php

namespace IteratorAndComposite\Iterator\Menu;

use IteratorAndComposite\Iterator\MenuIterator;

class DinerMenu implements Menu
{
  private array $menu_list;
  
  public function __construct()
  {
    $this->addItem('BLT','定番のベーコンレタスサンドです。',1000);
    $this->addItem('チーズバーガー','3種のチーズを利用してます。',1500);
    $this->addItem('本日のケーキ','日替わりのケーキを。', 700);
    $this->addItem('コーヒー','デザートのお供に',1000);
  }
  
  private function addItem(string $name, string $description, int $price)
  {
    $this->menu_list[] = new MenuItem($name, $description, $price);
  }
  
  public function createIterator(): MenuIterator
  {
    return new MenuIterator($this->menu_list);
  }
}