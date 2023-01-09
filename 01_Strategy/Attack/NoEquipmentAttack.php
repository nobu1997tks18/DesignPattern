<?php
namespace Strategy\Attack;

use Strategy\Attack\AttackBehavior;

class NoEquipmentAttack implements AttackBehavior
{

  public function attack()
  {
    echo "素手で攻撃\n";
  }
}