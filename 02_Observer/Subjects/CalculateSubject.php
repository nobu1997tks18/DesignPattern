<?php
namespace Observer\Subjects;

use Observer\Observers\CalculateObserver;

interface CalculateSubject
{
  public function registerObserver(CalculateObserver $o);
  public function removeObserver(CalculateObserver $o);
  public function notifyObserver();
}