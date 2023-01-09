<?php

namespace Observer\ObserverList;

use Observer\Observers\CalculateObserver;
use Observer\Factories\ListFactory;

class ObserverList implements ListFactory
{
  private array $items = [];

  private function __construct(array $observer_array = [])
  {
    foreach ($observer_array as $observer) {
      if (get_class($observer) === 'Observer') {
        $this->registerObserver($observer);
      }
    }
  }

  public static function factoryWithEmptyData()
  {
    return new Self();
  }

  public static function factory(array $observer_array = [])
  {
    return new Self($observer_array);
  }

  public function registerObserver(CalculateObserver $o)
  {
    $this->items[] = $o;
  }

  public function removeObserver(CalculateObserver $o)
  {
    echo '削除処理書く';
  }

  public function getItems()
  {
    return $this->items;
  }
}