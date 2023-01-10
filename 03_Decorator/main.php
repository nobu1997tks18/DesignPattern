<?php
namespace Decorator;
use Decorator\Beverages\Decaf;
use Decorator\Decorators\Milk;
use Decorator\Decorators\Whip;

include 'include.php';

$decaf = new Decaf();
$milk = new Milk($decaf);
var_dump($milk);
// $milk->getDescription();
// $milk->cost();

// $whip = new Whip($milk);
// $whip->getDescription();
// $whip->cost();

