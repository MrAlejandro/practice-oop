<?php

interface Menu
{
    public function createIterator() : CustomIterator;
}