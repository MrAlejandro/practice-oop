<?php

class Coffee extends CaffeineBeverage
{
    public function brew()
    {
        echo 'Dripping coffee trough filter' . PHP_EOL;
    }

    public function addCondiments()
    {
        echo 'Adding sugar and milk' . PHP_EOL;
    }
}
