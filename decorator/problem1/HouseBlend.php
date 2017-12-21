<?php

class HouseBlend extends Beverage
{
    protected $description = 'HouseBlend';

    public function cost()
    {
        $total = 0.77;

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
