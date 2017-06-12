<?php

class WoodenDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new MuteQuack();
        $this->flyBehavior = new FlyNoWay();
    }

    public function display()
    {
        echo "I'm a wooden duck" . PHP_EOL;
    }
}


