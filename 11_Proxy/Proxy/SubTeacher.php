<?php
namespace Proxy;

class SubTeacher extends Teacher
{
  private MainTeacher $main_teacher;

  public function __construct($name, MainTeacher $main_teacher)
  {
    $this->name = $name;
    $this->main_teacher = $main_teacher;
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
    echo "その回答は{$this->name}が対応できません。\n";
    $this->main_teacher->question3();
  }
}
