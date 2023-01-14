<?php
namespace Command\Commands;

use Command\Devices\LivingLight;

class LivingLightOnCommand implements Command
{
  public LivingLight $living_light;
  
  public function __construct()
  {
    $this->living_light = new LivingLight();
    
  }
  public function execute(){
      $this->living_light->on();
  }
}