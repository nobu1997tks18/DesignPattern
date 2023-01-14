<?php
namespace Command\Clients;

use Command\Commands\Command;
use Command\Commands\NoCommand;

class RemoteController
{
  private array $on_command_array;
  private array $off_command_array;
  private Command $undo;
  
  public function __construct()
  {
    $this->undo = new NoCommand();
  }

  public function setCommand(int $index, Command $on_command, Command $off_command){
    $this->on_command_array[$index] = $on_command;
    $this->off_command_array[$index] = $off_command;
  }
  
  public function onButtonWasPressed(int $index)
  {
    $this->on_command_array[$index]->execute();
    $this->undo = $this->off_command_array[$index];
  }
  
  public function offButtonWasPressed(int $index)
  {
    $this->off_command_array[$index]->execute();
    $this->undo = $this->on_command_array[$index];
  }
  
  public function undo(){
    echo "取り消し：";
    $this->undo->execute();
  }
}