<?php
namespace Strategy\Characters;

use Strategy\Characters\Character;
use Strategy\Attack\NoEquipmentAttack;
use Strategy\Defend\NoEquipmentDefend;

class Human extends Character
{
  public function __construct()
  {
    $this->attack_behavior = new NoEquipmentAttack();
    $this->defend_behavior = new NoEquipmentDefend();
  }
}