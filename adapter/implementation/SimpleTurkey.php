<?php

class SimpleTurkey implements Turkey
{
    public function gobble()
    {
        echo 'Gobble' . PHP_EOL;
    }

    public function fly()
    {
        echo 'Flap' . PHP_EOL;
    }
}