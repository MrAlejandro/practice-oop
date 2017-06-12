<?php

class RedheadDuck extends Duck
{
    public function __construct()
    {
        $this->quackBehavior = new Quack();
        $this->flyBehavior = new FlyWithWings();
    }

    public function display()
    {
        echo "I'm a duck with a red head" . PHP_EOL;
    }
}
