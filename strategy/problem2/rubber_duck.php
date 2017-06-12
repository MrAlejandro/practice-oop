<?php

class RubberDuck extends Duck implements Quackable
{
    public function display()
    {
        echo "I'm a yellow cute duck" . PHP_EOL;
    }

    public function quack()
    {
        echo 'Squack' . PHP_EOL;
    }
}


