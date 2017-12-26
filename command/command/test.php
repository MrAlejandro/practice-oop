<?php

require_once __DIR__ . '/interfaces/Command.php';

require_once __DIR__ . '/Light.php';
require_once __DIR__ . '/Stereo.php';
require_once __DIR__ . '/RemoteControl.php';

require_once __DIR__ . '/commands/LightsOnCommand.php';
require_once __DIR__ . '/commands/LightsOffCommand.php';
require_once __DIR__ . '/commands/StereoOnWithCDCommand.php';
require_once __DIR__ . '/commands/StereoOffCommand.php';
require_once __DIR__ . '/commands/NoCommand.php';

$control = new RemoteControl();
$light = new Light();
$stereo = new Stereo();

$control->setCommand(0, new LightsOnCommand($light), new LightsOffCommand($light));
$control->setCommand(1, new StereoOnWithCDCommand($stereo), new StereoOffCommand($stereo));
echo $control;

$control->onButtonPushed(1);
$control->offButtonPushed(1);
$control->undoButtonPushed();
$control->undoButtonPushed();
$control->undoButtonPushed();
