<?php
namespace AdapterAndFacade;

use AdapterAndFacade\Adapter\MallardDuck;
use AdapterAndFacade\Adapter\WildTurkey;
use AdapterAndFacade\Adapter\TurkeyAdapter;

include 'include.php';

$duck = new MallardDuck();
$turkey = new WildTurkey();
$adapter = new TurkeyAdapter($turkey);

$duck->quack();
$duck->fly();
$adapter->quack();
$adapter->fly();

