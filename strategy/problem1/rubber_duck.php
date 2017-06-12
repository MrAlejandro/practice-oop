<?php

class RubberDuck extends Duck
{
    public function quack()
    {
        echo 'Squeak' . PHP_EOL;
    }

    public function display()
    {
        echo "I'm a yellow cute duck" . PHP_EOL;
    }

    // rubber ducks cannot fly ((
    public function fly()
    {
    }
}

