<?php
namespace Singleton\NgSingleton;

abstract class NgSingleton
{
  private static $unique_instance;

  public static function getInstance()
  {
    if(self::$unique_instance === null){
      self::$unique_instance = new static();
    }

    return self::$unique_instance;
  }
}