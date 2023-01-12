<?php

namespace Factory\FactoryMethod\Pizza;

abstract class Pizza
{
  protected string $name;
  protected string $souce;
  protected string $dough;
  
  public function prepare()
  {
    echo $this->dough.'の'.$this->name.'を作成します';
    echo '生地をこねる。';
    echo $this->souce.'を追加';
    echo 'トッピングを追加。';
  }
  
  public function bake()
  {
    echo '180度で25分';
  }
  
  public function cut(){
    echo 'ピザを扇型にカットする。';
  }
  
  public function box()
  {
    echo '箱に入れる。';
  }

}