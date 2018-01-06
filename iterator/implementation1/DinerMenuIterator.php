<?php

class DinerMenuIterator implements CustomIterator
{
    protected $items;
    protected $index = 0;

    public function __construct(array $items)
    {
        $this->items = $items;
        $this->items = array_values($this->items);
    }

    public function next()
    {
        $item = $this->items[$this->index];
        $this->index++;

        return $item;
    }

    public function hasNext()
    {
        return isset($this->items[$this->index]);
    }
}