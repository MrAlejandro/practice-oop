<?php

class Menu extends MenuComponent
{
    protected $name;
    protected $desc;
    protected $items = [];

    public function __construct(string $name, string $desc)
    {
        $this->name = $name;
        $this->desc = $desc;
    }

    public function add(MenuComponent $item)
    {
        $this->items[] = $item;
    }

    public function remove(integer $index)
    {
        unset($this->items[$index]);
    }

    public function getChild(integer $index)
    {
        return $this->items[$index];
    }

    public function getName() : string
    {
        return $this->name;
    }

    public function getDescription() : string
    {
        return $this->desc;
    }

    public function print()
    {
        echo '---------------------' . PHP_EOL;
        echo $this->getName() . PHP_EOL;
        echo $this->getDescription() . PHP_EOL;
        echo '---------------------' . PHP_EOL;

        foreach ($this->items as $item) {
            $item->print();
        }
    }
}