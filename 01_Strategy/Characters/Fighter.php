<?php
namespace Strategy\Characters;

use Strategy\Characters\Character;
use Strategy\Attack\SwordAttack;
use Strategy\Defend\ArmerDefend;

class Fighter extends Character
{
  public function __construct()
  {
    $this->attack_behavior = new SwordAttack();
    $this->defend_behavior = new ArmerDefend();
  }
}