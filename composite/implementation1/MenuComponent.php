<?php

abstract class MenuComponent
{
    public function add(MenuComponent $item)
    {
        throw new RuntimeException('Cannot add item');
    }

    public function remove(integer $index)
    {
        throw new RuntimeException('Cannot remove item');
    }

    public function getChild(integer $index)
    {
        throw new RuntimeException('Cannot retrieve child');
    }

    public function isVegetarian()
    {
        throw new RuntimeException('Cannot perform operation');
    }

    public function getName()
    {
        throw new RuntimeException('Cannot retrieve name');
    }

    public function getDescription()
    {
        throw new RuntimeException('Cannot retrieve description');
    }

    public function getPrice()
    {
        throw new RuntimeException('Cannot retrieve price');
    }

    public function print()
    {
        throw new RuntimeException('Cannot print item');
    }
}
