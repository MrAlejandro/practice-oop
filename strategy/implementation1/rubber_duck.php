<?php

class RubberDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Squick();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a yellow cute duck" . PHP_EOL;
    }
}

