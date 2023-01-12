<?php

namespace Factory\FactoryMethod\Pizza;

abstract class Pizza
{
  protected string $name;
  protected string $souce;
  protected string $dough;
  
  public function prepare()
  {
    echo $this->dough.'の'.$this->name."を作成します\n";
    echo "生地をこねる。\n";
    echo $this->souce."を追加\n";
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