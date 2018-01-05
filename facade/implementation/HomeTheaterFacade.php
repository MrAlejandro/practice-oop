<?php

class HomeTheaterFacade
{
    protected $amp;
    protected $dvd;
    protected $popper;
    protected $projector;
    protected $screen;

    public function __construct(
        Amplifier $amp,
        DvdPlayer $dvd,
        PopcornPopper $popper,
        Projector $projector,
        Screen $screen
    )
    {
        $this->amp = $amp;
        $this->dvd = $dvd;
        $this->popper = $popper;
        $this->projector = $projector;
        $this->screen = $screen;
    }

    public function watchMovie(string $name)
    {
        echo "Starting watching the movie: {$name}" . PHP_EOL;
        $this->popper->on();
        $this->screen->down();
        $this->projector->on();
        $this->projector->wideScreenMode();
        $this->amp->on();
        $this->dvd->on();
        $this->dvd->play();
    }

    public function endMovie()
    {
        echo 'Ending watching movie' . PHP_EOL;
        $this->popper->off();
        $this->screen->up();
        $this->projector->off();
        $this->amp->off();
        $this->dvd->off();
    }
}