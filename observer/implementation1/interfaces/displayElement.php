<?php

interface DisplayElement
{
    public function display($temperature, $humidity, $pressure);
}