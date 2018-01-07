<?php

class SoldState implements State
{
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'Please wait, we are trying already giving you a gumball' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Sorry, you already turned the crack' . PHP_EOL;
    }

    public function turnCrank()
    {
        echo 'Turning twice does not get you another gumball' . PHP_EOL;
    }

    public function dispense()
    {
        $this->gumballMachine->releaseBall();

        if ($this->gumballMachine->getCount() > 0) {
            $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
        } else {
            echo 'Oops, out of gumballs!' . PHP_EOL;
            $this->gumballMachine->setState($this->gumballMachine->getSoldOutState());
        }
    }
}
