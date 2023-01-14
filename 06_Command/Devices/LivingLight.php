<?php
namespace Command\Devices;

class LivingLight implements Device
{
  public function on(){
    echo "リビングの電気をつけました。\n";
  }

  public function off(){
    echo "リビングの電気を消しました。\n";
  }
}