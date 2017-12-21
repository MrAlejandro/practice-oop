<?php

abstract class Beverage
{
    protected $description;
    protected $mocha;
    protected $milk;
    protected $whip;
    protected $soy;

    abstract public function cost();

    /**
     * @return mixed
     */
    public function hasMocha()
    {
        return $this->mocha;
    }

    /**
     * @param mixed $mocha
     */
    public function setMocha($mocha)
    {
        $this->mocha = $mocha;
    }

    /**
     * @return mixed
     */
    public function hasMilk()
    {
        return $this->milk;
    }

    /**
     * @param mixed $milk
     */
    public function setMilk($milk)
    {
        $this->milk = $milk;
    }

    /**
     * @return mixed
     */
    public function hasWhip()
    {
        return $this->whip;
    }

    /**
     * @param mixed $whip
     */
    public function setWhip($whip)
    {
        $this->whip = $whip;
    }

    /**
     * @return mixed
     */
    public function hasSoy()
    {
        return $this->soy;
    }

    /**
     * @param mixed $soy
     */
    public function setSoy($soy)
    {
        $this->soy = $soy;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}
