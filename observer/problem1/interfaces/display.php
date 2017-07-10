<?php

interface Display
{
    public function update($tmperature, $humidity, $pressure);
    public function display($tmperature, $humidity, $pressure);
}
