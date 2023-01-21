<?php

namespace State\Quarter;

use State\Client\GumballMachine;

class HasQuarterState implements State
{
  private $gumball_machine;

  public function __construct(GumballMachine $gumball_machine)
  {
    $this->gumball_machine = $gumball_machine;
  }

  public function insertQuarter()
  {
    echo "これ以上は投入できません。\n";
  }

  public function ejectQuarter()
  {
    echo "25セント排出します。\n";
    $this->gumball_machine->setNoQuarterState();
  }

  public function turnCrank()
  {
    echo "ハンドルを回しました。\n";
    $winner = random_int(0, 9);
    if ($winner == 0 && $this->gumball_machine->canWinnerMode()) {
      $this->gumball_machine->setWinnerState();
      return;
    }
    $this->gumball_machine->setSoldState();
  }

  public function dispence()
  {
    echo "ガムボールが出ません\n";
  }
}
