<?php
namespace State\Quarter;

use State\Client\GumballMachine;

class SoldOutState implements State
{
  private $gumball_machine;

  public function __construct(GumballMachine $gumball_machine)
  {
    $this->gumball_machine = $gumball_machine;
  }

  public function insertQuarter()
  {
    echo "売り切れ中です。\n";
  }

  public function ejectQuarter()
  {
    echo "25セント投入していません。\n";
  }

  public function turnCrank()
  {
    echo "売り切れ中です。\n";
  }

  public function dispence()
  {
    echo "売り切れ中です。\n";
  }
}
