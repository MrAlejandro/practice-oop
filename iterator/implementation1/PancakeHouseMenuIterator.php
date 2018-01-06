<?php

class PancakeHouseMenuIterator implements CustomIterator
{
    protected $items;

    public function __construct(SplObjectStorage $items)
    {
        $this->items = $items;
        $this->items->rewind();
    }

    public function next()
    {
        $item = $this->items->current();
        $this->items->next();

        return $item;
    }

    public function hasNext()
    {
        return $this->items->valid();
    }
}