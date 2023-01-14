<?php
namespace Singleton\Singleton;

trait Singleton
{
  private static $unique_instance;

  public static function getInstance()
  {
    if(self::$unique_instance === null){
      self::$unique_instance = new Self();
    }

    return self::$unique_instance;
  }
}