<?php
namespace Strategy\Defend;

use Strategy\Defend\DefendBehavior;

class ArmerDefend implements DefendBehavior
{
  public function defend()
  {
    echo "鎧で防御\n";
  }
}