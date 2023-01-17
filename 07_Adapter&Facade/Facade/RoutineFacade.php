<?php

namespace AdapterAndFacade\Facade;

class RoutineFacade
{
  private Cleaning $clearning;
  private Cooking $cooking;
  private Learning $learning;
  private Washing $washing;

  public function __construct()
  {
    $this->clearning = new Cleaning();
    $this->cooking = new Cooking();
    $this->learning = new Learning();
    $this->washing = new Washing();
  }

  public function morning_routine()
  {
    $this->cooking->cookMorning();
    $this->washing->washDishes();
    $this->clearning->clearRoom();
    $this->learning->learnEnglish();
  }
}