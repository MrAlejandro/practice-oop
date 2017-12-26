<?php

require_once __DIR__ . '/interfaces/Command.php';

require_once __DIR__ . '/Light.php';
require_once __DIR__ . '/Stereo.php';
require_once __DIR__ . '/RemoteControl.php';

require_once __DIR__ . '/commands/LightsOnCommand.php';
require_once __DIR__ . '/commands/LightsOffCommand.php';
require_once __DIR__ . '/commands/StereoOnWithCDCommand.php';
require_once __DIR__ . '/commands/StereoOffCommand.php';
require_once __DIR__ . '/commands/MacroCommand.php';
require_once __DIR__ . '/commands/NoCommand.php';

$control = new RemoteControl();
$light = new Light();
$stereo = new Stereo();

$partyOn = new MacroCommand([new LightsOnCommand($light), new StereoOnWithCDCommand($stereo)]);
$partyOff = new MacroCommand([new LightsOffCommand($light), new StereoOffCommand($stereo)]);

$control->setCommand(0, $partyOn, $partyOff);
echo $control;

$control->onButtonPushed(0);
//$control->offButtonPushed(1);
$control->undoButtonPushed();
//$control->undoButtonPushed();
//$control->undoButtonPushed();
