<?php
namespace Proxy;

class MainTeacher extends Teacher
{
  public function __construct($name)
  {
    $this->name = $name;
  }

  public function question1()
  {
    echo "その回答は{$this->name}が対応します。\n";
  }

  public function question2()
  {
    echo "その回答は{$this->name}が対応します。\n";
  }

  public function question3()
  {
    echo "その回答は{$this->name}が対応します。\n";
  }
}
