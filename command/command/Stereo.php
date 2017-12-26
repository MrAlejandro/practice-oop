<?php

class Stereo
{
    const SOURCE_CD = 'cd';
    const SOURCE_DVD = 'dvd';
    const SOURCE_RADIO = 'radio';
    const STATE_ON = 'on';
    const STATE_OFF = 'off';

    protected $volume;
    protected $source;
    protected $state;

    public function __construct()
    {
        $this->state = self::STATE_OFF;
    }

    public function on()
    {
        $this->state = self::STATE_ON;
        echo 'Turning the stereo on' . PHP_EOL;
    }

    public function off()
    {
        $this->state = self::STATE_OFF;
        echo 'Turning the stereo off' . PHP_EOL;
    }

    public function setCd()
    {
        echo 'Setting CD' . PHP_EOL;
        $this->source = self::SOURCE_CD;
    }

    public function setDvd()
    {
        echo 'Setting DVD' . PHP_EOL;
        $this->source = self::SOURCE_DVD;
    }

    public function setRadio()
    {
        echo 'Setting Radio' . PHP_EOL;
        $this->source = self::SOURCE_RADIO;
    }

    public function setVolume(int $volume)
    {
        echo "Setting volume to {$volume}" . PHP_EOL;
        $this->volume = $volume;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function getState()
    {
        return $this->state;
    }
}