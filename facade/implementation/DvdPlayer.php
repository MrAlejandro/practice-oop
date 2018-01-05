<?php

class DvdPlayer
{
    public function on()
    {
        echo 'Turning DVD player on' . PHP_EOL;
    }

    public function off()
    {
        echo 'Turning DVD player off' . PHP_EOL;
    }

    public function play()
    {
        echo 'Starting playing the movie' . PHP_EOL;
    }

    public function stop()
    {
        echo 'Stopping playing the movie' . PHP_EOL;
    }
}