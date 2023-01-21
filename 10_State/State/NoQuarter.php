<?php

namespace State\Quarter;

use State\Client\GumballMachine;

class NoQuarterState implements State
{
  private $gumball_machine;

  public function __construct(GumballMachine $gumball_machine)
  {
    $this->gumball_machine = $gumball_machine;
  }

  public function insertQuarter()
  {
    echo "25セント投入しました。\n";
    $this->gumball_machine->setHasQuarterState();
  }

  public function ejectQuarter()
  {
    echo "25セント投入していません。\n";
  }

  public function turnCrank()
  {
    echo "ハンドルを回しました。\n";
    echo "25セント投入していません。\n";
  }

  public function dispence()
  {
    echo "お金を支払ってください。\n";
  }
}
