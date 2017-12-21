<?php

class Espresso extends Beverage
{
    protected $description = 'Espresso';

    public function cost()
    {
        $total = 1.17;

        if ($this->hasMilk()) {
            $total += 0.15;
        }

        if ($this->hasMocha()) {
            $total += 0.25;
        }

        if ($this->hasSoy()) {
            $total += 0.20;
        }

        if ($this->hasWhip()) {
            $total += 0.10;
        }

        return $total;
    }
}