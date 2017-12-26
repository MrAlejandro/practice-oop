<?php

class RemoteControl
{
    private $onCommands = array();
    private $offCommands = array();
    private $undoCommand;

    public function __construct()
    {
        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = new NoCommand();
            $this->offCommands[$i] = new NoCommand();
        }

        $this->undoCommand = new NoCommand();
    }

    public function setCommand(int $slot, Command $onCommand, Command $offCommand)
    {
        $this->onCommands[$slot] = $onCommand;
        $this->offCommands[$slot] = $offCommand;
    }

    public function onButtonPushed(int $slot)
    {
        $this->onCommands[$slot]->execute();
        $this->undoCommand = $this->onCommands[$slot];
    }

    public function offButtonPushed(int $slot)
    {
        $this->offCommands[$slot]->execute();
        $this->undoCommand = $this->offCommands[$slot];
    }

    public function undoButtonPushed()
    {
        $this->undoCommand->undo();
    }

    public function __toString() : string
    {
        $result = '';

        foreach ($this->onCommands as $index => $command) {
            $result .= $index . ': ' . get_class($this->onCommands[$index]) . " | " . get_class($this->offCommands[$index]) . PHP_EOL;
        }

        return $result;
    }
}