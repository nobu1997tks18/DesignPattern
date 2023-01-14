<?php
namespace Singleton\NgSingleton;

class NgSingletonA extends NgSingleton
{
  protected function __construct()
  {
    echo "NgSingletonAを作成しました\n";
  }
}