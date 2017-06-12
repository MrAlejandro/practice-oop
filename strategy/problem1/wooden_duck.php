<?php

class WoodenDuck extends Duck
{
    public function display()
    {
        echo "I'm a wooden duck" . PHP_EOL;
    }

    // wooden ducks cannot fly ((
    public function fly()
    {
    }

    // wooden ducks cannot make sounds ((
    public function quack()
    {
    }
}


