<?php
namespace Command;

use Command\Clients\RemoteController;
use Command\Commands\LivingLightOffCommand;
use Command\Commands\LivingLightOnCommand;
use Command\Commands\AirConditionerOffCommand;
use Command\Commands\AirConditionerOnCommand;

include 'include.php';

$remote_controller = new RemoteController();

$living_light_on_command = new LivingLightOnCommand();
$living_light_off_command = new LivingLightOffCommand();
$remote_controller->setCommand(0, $living_light_on_command, $living_light_off_command);
$remote_controller->undo();
$remote_controller->onButtonWasPressed(0);
$remote_controller->offButtonWasPressed(0);
$remote_controller->undo();

$air_conditioner_on = new AirConditionerOnCommand();
$air_conditioner_off = new AirConditionerOffCommand();
$remote_controller->setCommand(1,$air_conditioner_on, $air_conditioner_off);
$remote_controller->onButtonWasPressed(1);
$remote_controller->offButtonWasPressed(1);
$remote_controller->undo();

