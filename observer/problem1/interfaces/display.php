<?php

interface Display
{
    public function update($temperature, $humidity, $pressure);
    public function display($temperature, $humidity, $pressure);
}
