<?php
namespace Command\Commands;

class NoCommand implements Command
{
  public function execute(){
    echo "何も起きませんでした\n";
  }
}