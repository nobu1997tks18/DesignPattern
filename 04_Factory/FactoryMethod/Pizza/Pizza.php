<?php

namespace Factory\FactoryMethod\Pizza;

use Factory\AbstructFactory\Ingreadients\Dough;
use Factory\AbstructFactory\Ingreadients\Source;
use Factory\AbstructFactory\PizzaIngreadientFactory;

abstract class Pizza
{
  protected string $name;
  protected Source $souce;
  protected Dough $dough;
  protected PizzaIngreadientFactory $ingreadient;

  public function prepare()
  {
    echo $this->dough->displayName().'の'.$this->name."を作成します\n";
    echo "生地をこねる。\n";
    echo $this->souce->displayName()."を追加\n";
    echo "トッピングを追加。\n";
  }
  
  public function bake()
  {
    echo "180度で25分焼く\n";
  }
  
  public function cut(){
    echo "ピザを扇型にカットする。\n";
  }
  
  public function box()
  {
    echo "箱に入れる。\n";
  }

}