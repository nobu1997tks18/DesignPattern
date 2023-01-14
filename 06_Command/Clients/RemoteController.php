<?php
namespace Command\Clients;

use Command\Commands\Command;

class RemoteController
{
  private array $on_command_array;
  private array $off_command_array;

  public function setCommand(int $index, Command $on_command, Command $off_command){
    $this->on_command_array[$index] = $on_command;
    $this->off_command_array[$index] = $off_command;
  }
  
  public function onButtonWasPressed(int $index)
  {
    $this->on_command_array[$index]->execute();
  }
  
  public function offButtonWasPressed(int $index)
  {
    $this->off_command_array[$index]->execute();
  }
}