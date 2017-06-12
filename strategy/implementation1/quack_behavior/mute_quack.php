<?php

class MuteQuack implements QuackBehavior
{
    public function quack()
    {
        echo 'Tssssss...' . PHP_EOL;
    }
}

