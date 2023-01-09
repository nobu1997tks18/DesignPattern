<?php
namespace Strategy\Attack;

use Strategy\Attack\AttackBehavior;

class MagicAttack implements AttackBehavior
{
  public function attack()
  {
    echo "魔法で攻撃\n";
  }
}