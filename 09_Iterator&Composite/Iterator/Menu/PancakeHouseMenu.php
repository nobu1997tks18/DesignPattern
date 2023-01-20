<?php
namespace IteratorAndComposite\Iterator\Menu;

use IteratorAndComposite\Iterator\MenuIterator;

class PancakeHouseMenu implements Menu
{
  private array $menu_list;
  
  public function __construct()
  {
    $this->addItem('パンケーキ','定番のパンケーキです。',1000);
    $this->addItem('ランチパンケーキセット','ドリンクつきのお得なセットです。',1200);
    $this->addItem('フルーツパンケーキ','日替わりの果物をふんだんに使ったパンケーキです。',1500);
    $this->addItem('コーヒー','甘いパンケーキのお供に',1000);
    $this->addItem('紅茶','ダージリンティーです。',1000);
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