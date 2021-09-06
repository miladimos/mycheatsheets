<?php

class Singleton
{
    private static $instance;

    private function __construct() 
    {

    }

    public function getInstance()
    {
        return static::$instance;
    }
}