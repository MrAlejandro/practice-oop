<?php

class NoCommand implements Command
{
    public function execute()
    {
        echo 'Click, click...' . PHP_EOL;
    }

    public function undo()
    {
        echo 'Click, click...' . PHP_EOL;
    }
}