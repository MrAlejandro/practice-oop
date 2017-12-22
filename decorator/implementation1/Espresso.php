<?php

class Espresso extends Beverage
{
    protected $description = 'Espresso';

    public function cost()
    {
        return 1.33;
    }
}