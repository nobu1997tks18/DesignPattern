<?php
namespace Strategy;

use  Strategy\Characters\Human;
use  Strategy\Characters\Fighter;
use  Strategy\Characters\Magician;

include 'include.php';

$human = new Human();
$fighter = new Fighter();
$magician = new Magician();

$human->attack();
$human->defend();
$human->run();

$fighter->attack();
$fighter->defend();
$fighter->run();

$magician->attack();
$magician->defend();
$magician->run();