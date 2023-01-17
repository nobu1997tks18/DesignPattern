<?php

namespace AdapterAndFacade\Adapter;

class WildTurkey implements Turkey
{
  public function gobble()
  {
    echo 'ぐわぐわ';
  }
  
  public function fly()
  {
    echo '短距離飛びます。';
  }
}