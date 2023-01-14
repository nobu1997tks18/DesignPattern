<?php
namespace Singleton\NgSingleton;

class NgSingletonB extends NgSingleton
{
  protected function __construct()
  {
    echo "NgSingletonBを作成しました\n";
  }
}