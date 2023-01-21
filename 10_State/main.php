<?php

namespace State;

use State\Client\GumballMachine;

include 'include.php';

$gumball_machine = new GumballMachine(2);

$gumball_machine->insertQuarter();
$gumball_machine->turnCrank();

$gumball_machine->insertQuarter();
$gumball_machine->ejectQuarter();
$gumball_machine->turnCrank();

$gumball_machine->ejectQuarter();
