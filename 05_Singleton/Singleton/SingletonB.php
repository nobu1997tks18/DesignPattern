<?php
namespace Singleton\Singleton;

class SingletonB
{
  use Singleton;

  private function __construct()
  {
    echo "SingletonBを作成しました\n";
  }
}