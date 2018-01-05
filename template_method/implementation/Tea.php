<?php

class Tea extends CaffeineBeverage
{
    public function brew()
    {
        echo 'Steeping tea bag' . PHP_EOL;
    }

    public function addCondiments()
    {
        echo 'Adding a lemon slice' . PHP_EOL;
    }
}