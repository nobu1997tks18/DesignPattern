<?php
namespace Singleton\Singleton;

class SingletonA
{
  use Singleton;
  
  private function __construct()
  {
    echo "SingletonAを作成しました\n";
  }
}