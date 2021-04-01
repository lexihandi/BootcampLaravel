<?php

class Animal
{
    protected $name;
    protected $legs;
    protected $cold_blooded;

    public function __construct($name)
    {
        $this->name = $name;
        $this->legs = 2;
        $this->cold_blooded = "no";
    }

    public function getName()
    {
        return "Name: $this->name";
    }

    public function getLegs()
    {
        return "Legs: $this->legs";
    }

    public function getColdBlooded()
    {
        return "Cold blooded: $this->cold_blooded";
    }
}
