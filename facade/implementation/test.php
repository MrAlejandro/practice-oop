<?php

require_once __DIR__ . '/Amplifier.php';
require_once __DIR__ . '/DvdPlayer.php';
require_once __DIR__ . '/HomeTheaterFacade.php';
require_once __DIR__ . '/PopcornPopper.php';
require_once __DIR__ . '/Projector.php';
require_once __DIR__ . '/Screen.php';

$facade = new HomeTheaterFacade(
    new Amplifier(),
    new DvdPlayer(),
    new PopcornPopper(),
    new Projector(),
    new Screen()
);

$facade->watchMovie('Fight club');
$facade->endMovie();
