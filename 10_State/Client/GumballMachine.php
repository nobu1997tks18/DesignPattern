<?php

namespace State\Client;

use State\Quarter\State;
use State\Quarter\SoldOutState;
use State\Quarter\NoQuarterState;
use State\Quarter\HasQuarterState;
use State\Quarter\SoldState;
use State\Quarter\WinnerState;

class GumballMachine
{
  private State $soldout_state;
  private State $no_quarter_state;
  private State $has_quarter_state;
  private State $sold_state;
  private State $winner_state;
  private State $state;
  private int $count = 0;
  private int $refill_count = 0;

  public function __construct(int $count)
  {
    $this->soldout_state = new SoldOutState($this);
    $this->no_quarter_state = new NoQuarterState($this);
    $this->has_quarter_state = new HasQuarterState($this);
    $this->sold_state = new SoldState($this);
    $this->winner_state = new WinnerState($this);

    $this->count = $count;
    $this->refill_count = ($this->count / 2);
    if ($this->count > 0) {
      $this->state = $this->no_quarter_state;
      return;
    }
    $this->state = $this->sold_state;
  }

  public function setSoldoutState()
  {
    $this->state = $this->soldout_state;
  }

  public function setNoQuarterState()
  {
    $this->state = $this->no_quarter_state;
  }

  public function setHasQuarterState()
  {
    $this->state = $this->has_quarter_state;
  }

  public function setSoldState()
  {
    $this->state = $this->sold_state;
  }

  public function setWinnerState()
  {
    $this->state = $this->winner_state;
  }

  public function isSoldout()
  {
    return ($this->count <= 0);
  }

  public function canWinnerMode()
  {
    return ($this->count > 1);
  }

  public function insertQuarter()
  {
    $this->state->insertQuarter();
  }

  public function ejectQuarter()
  {
    $this->state->ejectQuarter();
  }

  public function turnCrank()
  {
    $this->state->turnCrank();
    $this->state->dispence();
  }

  public function refill()
  {
    $this->count += 50;
  }

  public function releaseBall()
  {
    if ($this->isSoldout()) {
      $this->refill();
      return;
    }

    $this->count -= 1;
  }
}
