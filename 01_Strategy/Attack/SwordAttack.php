<?php
namespace Strategy\Attack;

use Strategy\Attack\AttackBehavior;

class SwordAttack implements AttackBehavior
{
  public function attack(){
    echo "剣で攻撃\n";
  }
}