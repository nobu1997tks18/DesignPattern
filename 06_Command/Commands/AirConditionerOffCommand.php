<?php
namespace Command\Commands;

use Command\Devices\AirConditioner;

class AirConditionerOffCommand implements Command
{
  public AirConditioner $air_conditioner;
  
  public function __construct()
  {
    $this->air_conditioner = new AirConditioner();
    
  }
  public function execute(){
      $this->air_conditioner->off();
  }
}