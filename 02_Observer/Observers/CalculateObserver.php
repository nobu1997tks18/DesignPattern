<?php
namespace Observer\Observers;

interface CalculateObserver
{
  public function update(int $add_number);
}