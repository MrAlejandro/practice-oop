<?php

class HasQuarterState implements State
{
    protected $gumballMachine;

    public function __construct(GumballMachine $gumballMachine)
    {
        $this->gumballMachine = $gumballMachine;
    }

    public function insertQuarter()
    {
        echo 'You cannot insert another quarter' . PHP_EOL;
    }

    public function ejectQuarter()
    {
        echo 'Quarter returned' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getNoQuarterState());
    }

    public function turnCrank()
    {
        echo 'You turned...' . PHP_EOL;
        $this->gumballMachine->setState($this->gumballMachine->getSoldState());
    }

    public function dispense()
    {
        echo 'No gumball dispensed' . PHP_EOL;
    }
}