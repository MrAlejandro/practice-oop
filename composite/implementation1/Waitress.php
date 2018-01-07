<?php

class Waitress
{
    protected $menus;

    public function __construct(MenuComponent $menus)
    {
        $this->menus = $menus;
    }

    public function printMenu()
    {
        $this->menus->print();
    }
}