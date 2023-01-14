<?php
namespace Command;

use Command\Clients\RemoteController;
use Command\Commands\LivingLightOffCommand;
use Command\Commands\LivingLightOnCommand;

include 'include.php';

$remote_controller = new RemoteController();
$living_light_on_command = new LivingLightOnCommand();
$living_light_off_command = new LivingLightOffCommand();
$remote_controller->setCommand(0, $living_light_on_command, $living_light_off_command);
$remote_controller->onButtonWasPressed(0);
$remote_controller->offButtonWasPressed(0);