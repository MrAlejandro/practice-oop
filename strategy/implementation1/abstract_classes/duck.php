<?php

abstract class Duck
{
    /** @var  \FlyBehavior $flyBehavior */
    protected $flyBehavior;

    /** @var  \QuackBehavior $quackBehavior */
    protected $quackBehavior;

    abstract public function display();

    public function swim()
    {
        echo "I'm swimming" . PHP_EOL;
    }

    public function performQuack()
    {
        return $this->quackBehavior->quack();
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function setFlyBehavior(FlyBehavior $flyBehavior)
    {
        $this->flyBehavior = $flyBehavior;
    }

    public function setQuackBehavior(QuackBehavior $quackBehavior)
    {
        $this->quackBehavior = $quackBehavior;
    }
}
