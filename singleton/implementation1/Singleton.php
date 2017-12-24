<?php

class Singleton
{
    private static $instance = null;
    protected $name = '';

    private function __construct() { }

    public static function getInstance() : Singleton
    {
        if (self::$instance === null) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }

    public function setName(string $name) : void
    {
        $this->name = $name;
    }

    public function getName() : string
    {
        return $this->name;
    }

    private function __clone() { }
}