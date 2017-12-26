<?php

class StereoOffCommand implements Command
{
    private $stereo;
    private $prevState;

    public function __construct(Stereo $stereo)
    {
        $this->stereo = $stereo;
    }

    public function execute()
    {
        $this->storePreviousState();
        $this->stereo->off();
    }

    public function undo()
    {
        $this->restorePreviousState();
    }

    protected function storePreviousState()
    {
        $this->prevState = [
            'state' => $this->stereo->getState(),
            'source' => $this->stereo->getSource(),
            'volume' => $this->stereo->getVolume(),
        ];
    }

    protected function restorePreviousState()
    {
        if ($this->prevState['state'] === Stereo::STATE_OFF) {
            $this->stereo->off();
        } elseif ($this->prevState['state'] === Stereo::STATE_ON) {
            $this->stereo->on();
            $this->stereo->setVolume($this->prevState['volume']);

            switch ($this->prevState['source']) {
                case Stereo::SOURCE_CD:
                    $this->stereo->setCd();
                    break;
                case Stereo::SOURCE_DVD:
                    $this->stereo->setDvd();
                    break;
                case Stereo::SOURCE_RADIO:
                    $this->stereo->setRadio();
                    break;
            }
        }
    }
}