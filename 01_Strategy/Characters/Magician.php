<?php
namespace Strategy\Characters;

use Strategy\Characters\Character;
use Strategy\Attack\MagicAttack;
use Strategy\Defend\MagicDefend;

class Magician extends Character
{
  public function __construct()
  {
    $this->attack_behavior = new MagicAttack();
    $this->defend_behavior = new MagicDefend();
  }
}