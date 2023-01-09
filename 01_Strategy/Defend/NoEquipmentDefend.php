<?php
namespace Strategy\Defend;

use Strategy\Defend\DefendBehavior;

class NoEquipmentDefend implements DefendBehavior
{
  public function defend()
  {
    echo "体で防御\n";
  }
}