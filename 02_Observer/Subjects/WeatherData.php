<?php
namespace Subjects;

use Factory\factory;
use Observer\Observers\AvarageCalclator;
use Observer\Observers\CalculateObserver;
use Observer\ObserverList\ObserverList;
use Observer\Subjects\CalculateSubject;
use Observer\Factories\SubjectFactory;


class WeatherData implements CalculateSubject, SubjectFactory
{
  private ObserverList $observer_list;
  private int $temperature;

  private function __construct()
  {
    echo "気温な測定を開始します。\n";
    $this->observer_list = ObserverList::factoryWithEmptyData();
    $this->registerObserver(AvarageCalclator::factoryWithEmptyData());
  }

  public static function factory()
  {
    return new Self();
  }

  public function registerObserver(CalculateObserver $o)
  {
    $this->observer_list->registerObserver($o);
  }

  public function removeObserver(CalculateObserver $o)
  {
    $this->observer_list->removeObserver($o);
  }

  public function notifyObserver()
  {
    foreach($this->getListItems() as $observer){
      $this->updateObserver($observer);
    }
  }

  public function changeTemperature(int $temperature)
  {
    $this->temperature = $temperature;
    $this->notifyObserver();
  }

  private function getListItems()
  {
    return $this->observer_list->getItems();
  }

  private function updateObserver(CalculateObserver $observer)
  {
    $observer->update($this->temperature);
  }
}