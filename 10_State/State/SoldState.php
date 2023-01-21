<?php
namespace State\Quarter;

use State\Client\GumballMachine;

class SoldState implements State
{
  private $gumball_machine;

  public function __construct(GumballMachine $gumball_machine)
  {
    $this->gumball_machine = $gumball_machine;
  }

  public function insertQuarter()
  {
    echo "排出中です。\n";
  }

  public function ejectQuarter()
  {
    echo "排出中のため払い戻しはできません。\n";
  }

  public function turnCrank()
  {
    echo "排出中のためハンドルは回せません\n";
    $this->gumball_machine->setSoldState();
  }

  public function dispence()
  {
    $this->gumball_machine->releaseBall();
    echo "お取り忘れにご注意下さい。\n";

    if($this->gumball_machine->isSoldout()){
      $this->gumball_machine->setSoldoutState();
      return;
    }

    $this->gumball_machine->setNoQuarterState();
  }
}
