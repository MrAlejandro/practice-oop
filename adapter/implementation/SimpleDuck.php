<?php

class SimpleDuck implements Duck
{
    public function quack()
    {
        echo 'Quack' . PHP_EOL;
    }

    public function fly()
    {
        echo 'Flap flap flap flap flap' . PHP_EOL;
    }
}