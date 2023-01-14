<?php
namespace Command\Devices;

class AirConditioner implements Device
{
  public function on(){
    echo "エアコンをつけました。\n";
  }

  public function off(){
    echo "エアコンを消しました。\n";
  }
}