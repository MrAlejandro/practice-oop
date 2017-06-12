<?php

class MallardDuck extends Duck implements Flyable, Quackable
{
    public function display()
    {
        echo "I'm a mallard looking duck" . PHP_EOL;
    }

    public function fly()
    {
        echo 'Flap flap flap...' . PHP_EOL;
    }

    public function quack()
    {
        echo 'Quack' . PHP_EOL;
    }
}

