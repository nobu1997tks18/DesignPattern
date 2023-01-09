<?php
namespace Strategy\Defend;

use Strategy\Defend\DefendBehavior;

class MagicDefend implements DefendBehavior
{
  public function defend()
  {
    echo "魔法で防御\n";
  }
}