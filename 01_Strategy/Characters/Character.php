<?php
namespace Strategy\Characters;

use Strategy\Attack\AttackBehavior;
use Strategy\Defend\DefendBehavior;

abstract class Character
{
  protected AttackBehavior $attack_behavior;
  protected DefendBehavior $defend_behavior;

  public function attack(){
    $this->attack_behavior->attack();
  }

  public function defend(){
    $this->defend_behavior->defend();
  }

  public function run(){
    echo "逃げます\n";
  }
}