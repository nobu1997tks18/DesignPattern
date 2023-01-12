<?php
namespace Decorator;
use Decorator\Beverages\Decaf;
use Decorator\Beverages\Esupuresso;
use Decorator\Decorators\Milk;
use Decorator\Decorators\Whip;

include 'include.php';

$decaf = new Decaf();
echo $decaf->getDescription();
echo $decaf->cost().'円';
echo "\n";

$esupuresso = new Esupuresso();
echo $esupuresso->getDescription();
echo $esupuresso->cost().'円';
echo "\n";

$milk = new Milk($decaf);
echo $milk->getDescription();
echo $milk->cost().'円';
echo "\n";

$whip = new Whip($esupuresso);
echo $whip->getDescription();
echo $whip->cost().'円';
echo "\n";

$milk2 = new Milk($whip);
echo $milk2->getDescription();
echo $milk2->cost().'円';
echo "\n";