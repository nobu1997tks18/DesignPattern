<?php
namespace Command\Devices;

interface Device
{
  public function on();
  public function off();
}