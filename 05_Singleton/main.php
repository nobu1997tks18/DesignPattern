<?php
namespace Singleton;

use Singleton\Singleton\SingletonA;
use Singleton\Singleton\SingletonB;
use Singleton\NgSingleton\NgSingletonA;
use Singleton\NgSingleton\NgSingletonB;

include 'include.php';

var_dump(SingletonA::getInstance());
var_dump(SingletonA::getInstance());
var_dump(SingletonB::getInstance());
var_dump(SingletonB::getInstance());

var_dump(NgSingletonA::getInstance());
var_dump(NgSingletonA::getInstance());
var_dump(NgSingletonB::getInstance());
var_dump(NgSingletonB::getInstance());